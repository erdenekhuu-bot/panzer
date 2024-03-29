<?php

namespace App\Broadcasting;

use App\Models\User;

class DemoCh
{
    /**
     * Create a new channel instance.
     */
    public $user;
    public function __construct()
    {
        //
    }

    /**
     * Authenticate the user's access to the channel.
     */
    public function join(User $user)
    {
        //
    }
}
