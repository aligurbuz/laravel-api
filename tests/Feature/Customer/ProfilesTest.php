<?php

namespace Tests\Feature\Customer;

use App\Models\Customer;
use Tests\TestCase;

class ProfilesTest extends TestCase
{
    /**
     * @var string
     */
    protected string $endpoint = 'customer/profiles';

    /**
     * @var string
     */
    protected string $model = Customer::class;

    /**
     * @var string
     */
    protected string $repository = 'customer';

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_customer_profiles()
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

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_customer_profiles_post_required_columns()
    {
        $this->postRequiredColumns();
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_customer_profiles_post()
    {
        $this->postHttpMethod();
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_customer_profiles_put()
    {
        $this->putHttpMethod();
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_customer_profiles_put_activation()
    {
        $this->putHttpMethodActivation([], 1);
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_customer_profiles_put_activation2()
    {
        $this->putHttpMethodActivation(['status' => true], 1);
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_customer_profiles_put_activation3()
    {
        $this->putHttpMethodActivation(['status' => true, 'is_deleted' => true]);
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_customer_profiles_put_activation4()
    {
        $this->putHttpMethodActivation(['status' => true, 'is_deleted' => false], 1);
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_customer_profiles_put_activation5()
    {
        $this->putHttpMethodActivation(['status' => false, 'is_deleted' => false]);
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_customer_profiles_put_activation6()
    {
        $this->putHttpMethodActivation(['status' => false, 'is_deleted' => true]);
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_customer_profiles_put_activation7()
    {
        $this->putHttpMethodActivation(['status' => true, 'is_deleted' => false], 1);
    }
}
