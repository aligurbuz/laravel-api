<?php

namespace App\Models\Entities;

class EntityMap
{
    /**
     * @param object $query
     * @return Language
     */
    public function language(object $query) : Language
    {
        return new Language($query);
    }
    
    /**
     * @param object $query
     * @return Localization
     */
    public function localization(object $query) : Localization
    {
        return new Localization($query);
    }
    
    /**
     * @param object $query
     * @return Country
     */
    public function country(object $query) : Country
    {
        return new Country($query);
    }

    /**
     * @param object $query
     * @return User
     */
    public function user(object $query) : User
    {
        return new User($query);
    }
}
