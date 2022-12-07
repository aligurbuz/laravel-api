<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Password\Events\Changes;

use App\Exceptions\Exception;
use App\Facades\Authenticate\Phone;
use App\Facades\Authenticate\User;
use App\Facades\Sms\Sms;

trait AfterCreate
{
	/**
	 * event performed after repository create
	 *
	 * @param array $result
	 * @param array $clientData
	 * @return void
	 */
	public function eventFireAfterCreate(array $result = [], array $clientData = []): void
	{
        $userPhone = User::phone(true);

        Sms::to($userPhone)->message('Activation Code: '.$clientData['hash'])->send();
	}
}
