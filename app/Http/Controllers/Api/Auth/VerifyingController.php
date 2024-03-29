<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Auth;

use App\Client\Auth\Verifying\Create\CreateClient;
use App\Exceptions\Exception;
use App\Http\Controllers\Api\ApiController;
use App\Libs\Date;
use App\Repositories\Repository;

class VerifyingController extends ApiController
{
    /**
     * @var bool
     */
    protected bool $authenticate = false;

    /**
     * With the hash information sent to the registered
     * user's e-mail, the registration will be activated when this service is reached.
     *
     * @param CreateClient $client
     * @return array
     */
    public function verifying(CreateClient $client): array
    {
        return $this->transaction(function () use ($client) {
            $client->handle();

            $hash = client('hash');
            $registrationCode = (int)decodeString($hash);

            $registrationRepository = $this->getRegistrationData($registrationCode);
            $registrationData = $registrationRepository->getRepository();

            if (isset($registrationData[0]['user']['email'])) {
                $this->updateUserStatus($registrationData[0]['user']['email']);
                $registrationRepository->update([['status' => 0]]);

                return ['user' => 'active'];
            }

            return Exception::customException('hash is not valid');
        });
    }

    /**
     * get registration data for verifying controller
     *
     * @param int $registrationCode
     * @return object
     */
    private function getRegistrationData(int $registrationCode): object
    {
        $registrationRepository = Repository::registration();
        $registrationRepository->instance(false);

        return $registrationRepository->code($registrationCode);
    }

    /**
     * update 1 value user's status for verifying
     *
     * @param string $email
     */
    private function updateUserStatus(string $email): void
    {
        $userRepository = Repository::user();
        $userRepository->instance(false);

        $userRepository->where('email', $email)->update([['status' => 1, 'email_verified_at' => Date::now()]]);
    }
}
