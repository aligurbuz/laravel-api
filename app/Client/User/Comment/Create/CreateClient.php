<?php

namespace App\Client\User\Comment\Create;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Models\User_comment;

class CreateClient extends Client
{
	use GeneratorTrait;
	use ClientAutoGeneratorTrait;

	/**
	 * get capsule for client
	 *
	 * @var array
	 */
	protected array $capsule = [];

    /**
	 * get model entity validation
	 *
	 * @var array|string[]
	 */
	protected array $model = [User_comment::class];

    /**
     * get rule for client
     *
     * @var array
     */
    protected array $rule = [
        'title'         => 'required',
        'comment'       => 'required',
        'description'   => 'required',
    ];
}
