<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Gallery;

class GalleryPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function show(User $user, Gallery $gallery)
    {
        return $user->id == $gallery->user_id;
    }

    public function delete(User $user, Gallery $gallery)
    {
        return $user->id == $gallery->user_id;
    }

    public function manage(User $user, Gallery $gallery)
    {
        return $user->id == $gallery->user_id;
    }
}
