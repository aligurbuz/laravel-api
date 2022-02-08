<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Registration;

use App\Factory\Factory;
use App\Http\Controllers\Api\ApiController;
use App\Client\Registration\Registration\Create\CreateClient;
use App\Repositories\Resources\Registration\Contracts\RegistrationRepositoryContract;

class RegistrationController extends ApiController
{
    /**
     * @var bool
     */
    protected bool $authenticate = false;

	/**
	 * create registration data
	 *
	 * @param CreateClient $client
	 * @param RegistrationRepositoryContract $registrationRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, RegistrationRepositoryContract $registrationRepository): array|object
	{
		return $this->transaction(function() use($client,$registrationRepository) {
		    $client->handle();

            return $this->verifyingEmail(function() use($registrationRepository){
               return $registrationRepository->create();
            });
		});
	}

    /**
     * After the user registers, we provide activation by sending an e-mail.
     *
     * @param callable $callback
     * @return array
     */
    private function verifyingEmail(callable $callback) : array
    {
        $registration = call_user_func($callback);

        $userEmail = $registration[0]['user'][0]['email'];
        $verifyEmailHash = encodeString((string)$registration[0]['user'][0]['user_code']);

        Factory::email()->verifyingEmailForUser($userEmail,$verifyEmailHash);

        return $registration;
    }
}
