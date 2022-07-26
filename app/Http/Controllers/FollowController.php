<?php

namespace App\Http\Controllers;

use App\Models\User;

class FollowController
{
    public function store(User $user)
    {
        auth()->user()->toggelFollow($user);
        return back();
}
}
