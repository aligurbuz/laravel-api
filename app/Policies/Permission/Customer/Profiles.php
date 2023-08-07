<?php

namespace App\Policies\Permission\Customer;
trait Profiles
{
    /**
     * The first running method for the corresponding endpoint.
     *
     * @return void
     */
    public function initCustomerProfiles(): void
    {
        /**if(!$this->container('post')){
            $this->setEndpointNegativePermission('POST','specialExceptionKey');
        }**/
    }
}
