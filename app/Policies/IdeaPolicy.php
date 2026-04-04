<?php

namespace App\Policies;

use App\Models\Idea;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class IdeaPolicy
{


    // Who can views the Ideas
    public function view(User $user, Idea $idea)
    {
        return $user->id === $idea->user_id
            ? Response::allow()
            : Response::deny("You can't edit this Idea, cause you're not its own.");
    }


    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
}
