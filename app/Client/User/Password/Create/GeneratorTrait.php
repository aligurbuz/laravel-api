<?php

namespace App\Client\User\Password\Create;

use App\Libs\Date;

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = [
        'user_password_code',
        'expired_at'
    ];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = [
        'user_password_code',
        'expired_at'
    ];


	/**
	 * generates user password for client
	 *
	 * @return int
	 */
	public function userPasswordCodeGenerator(): int
	{
		return generateHash();
	}

    /**
     * generates user password expired_at for client
     *
     * @return string
     */
    public function expiredAtGenerator(): string
    {
        return Date::after(180)->toDateTimeString();
    }
}
