<?php

namespace Tests\Feature\User;

use Tests\TestCase;
use App\Models\UserPassword;

class PasswordTest extends TestCase
{
    /**
     * @var string
     */
    protected string $endpoint = 'user/password';

    /**
     * @var string
     */
    protected string $model = UserPassword::class;

    /**
     * @var string
     */
    protected string $repository = 'userPassword';

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_user_password()
    {
        $this->getHttpMethod();
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_products_relations()
    {
        $this->getHttpMethodWithRelations();
    }
}
