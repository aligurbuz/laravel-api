<?php

namespace Tests\Feature\Definition;

use Tests\TestCase;
use App\Models\Gender;

class GendersTest extends TestCase
{
    /**
     * @var string
     */
    protected string $endpoint = 'definition/genders';

    /**
     * @var string
     */
    protected string $model = Gender::class;

    /**
     * @var string
     */
    protected string $repository = 'gender';

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_definition_genders()
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
    public function test_definition_genders_post_required_columns()
    {
        $this->postRequiredColumns();
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_definition_genders_post()
    {
        $this->postHttpMethod();
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_definition_genders_put()
    {
        $this->putHttpMethod();
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_definition_genders_put_activation()
    {
        $this->putHttpMethodActivation([],1);
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_definition_genders_put_activation2()
    {
        $this->putHttpMethodActivation(['status' => true],1);
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_definition_genders_put_activation3()
    {
        $this->putHttpMethodActivation(['status' => true,'is_deleted' => true]);
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_definition_genders_put_activation4()
    {
        $this->putHttpMethodActivation(['status' => true,'is_deleted' => false],1);
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_definition_genders_put_activation5()
    {
        $this->putHttpMethodActivation(['status' => false,'is_deleted' => false]);
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_definition_genders_put_activation6()
    {
        $this->putHttpMethodActivation(['status' => false,'is_deleted' => true]);
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_definition_genders_put_activation7()
    {
        $this->putHttpMethodActivation(['status' => true,'is_deleted' => false],1);
    }
}
