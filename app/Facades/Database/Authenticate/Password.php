<?php

namespace App\Facades\Database\Authenticate;

use App\Exceptions\Exception;
use App\Libs\AppContainer;
use App\Repositories\Repository;
use Illuminate\Support\Facades\Hash;

class Password
{
    /**
     * @var int
     */
    protected int $expireLimitation = 3;

    /**
     * @return string
     */
    public function get(): string
    {
        return User::get()?->password;
    }

    /**
     * Retrieves the last three passwords used by the user.
     *
     * @return mixed
     */
    public function lastPasswords(): mixed
    {
        return AppContainer::use('userLastPasswords', function () {
            return Repository::userPassword()
                ->withoutGlobalScope()
                ->where('user_code', User::code())
                ->orderBy('id', 'desc')
                ->limitation($this->expireLimitation)
                ->getRepository();
        });
    }

    /**
     * Check if the given password matches any of the user's last passwords.
     *
     * This function iterates through the user's previous passwords and compares
     * the provided password against each hashed password. If a match is found,
     * an exception is thrown indicating that the password violates the rule
     * for reuse of recent passwords.
     *
     * @param string $password The password to check against the user's last passwords.
     * @return void
     */
    public function validPassword(string $password): void
    {
        foreach ($this->lastPasswords() as $item) {
            if (Hash::check($password, $item['password'])) {
                Exception::customException('lastPasswordSameRule', ['limit' => $this->expireLimitation]);
            }
        }
    }

}
