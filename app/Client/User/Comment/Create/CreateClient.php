<?php

namespace App\Client\User\Comment\Create;

use App\Client\Client;
use App\Models\User_comment;
use App\Client\ClientAutoGeneratorTrait;
use JetBrains\PhpStorm\Pure;

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

    /**
     * get array limiter
     *
     * @return int
     */
    public function getArrayLimiter(): int
    {
        return 5;
    }

    /**
     * get client title value
     *
     * @var string
     */
    protected string $title;

    /**
     * @return string
     */
    #[Pure] protected function title(): string
    {
        return md5($this->title);
    }
}
