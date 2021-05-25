<?php

namespace App\Observers;

use App\Models\User_comment;

class UserCommentObserver
{
    /**
     * Handle the User_comment "created" event.
     *
     * @param User_comment $user_comment
     * @return void
     */
    public function created(User_comment $user_comment)
    {
        //
    }

    /**
     * Handle the User_comment "updated" event.
     *
     * @param User_comment $user_comment
     * @return void
     */
    public function updated(User_comment $user_comment)
    {
        //
    }

    /**
     * Handle the User_comment "deleted" event.
     *
     * @param User_comment $user_comment
     * @return void
     */
    public function deleted(User_comment $user_comment)
    {
        //
    }

    /**
     * Handle the User_comment "restored" event.
     *
     * @param User_comment $user_comment
     * @return void
     */
    public function restored(User_comment $user_comment)
    {
        //
    }

    /**
     * Handle the User_comment "force deleted" event.
     *
     * @param User_comment $user_comment
     * @return void
     */
    public function forceDeleted(User_comment $user_comment)
    {
        //
    }
}
