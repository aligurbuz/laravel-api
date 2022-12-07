<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Password\Events\Changes;

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
        //this specifies which path to use for notification
        $notificationAdapter = $this->notificationAdapter;

        // after checking the method to be run
        // in the main repository for notificationAdapter, we run it.
        if(method_exists($this,$notificationAdapter)){
            $this->{$this->notificationAdapter}($clientData['hash']);
        }
	}
}
