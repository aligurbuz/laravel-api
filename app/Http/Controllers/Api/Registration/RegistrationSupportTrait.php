<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Registration;

use App\Facades\Support\Email\Email;

trait RegistrationSupportTrait
{
    /**
     * After the user registers, we provide activation by sending an e-mail.
     *
     * @param callable $callback
     * @return array
     */
    protected function verifyingEmail(callable $callback): array
    {
        $registration = call_user_func($callback);

        $userEmail = $registration[0]['user'][0]['email'];
        $verifyEmailHash = encodeString((string)$registration[0]['registration_code']);

        Email::verifyingEmail($userEmail, $verifyEmailHash);

        return $registration;
    }
}
