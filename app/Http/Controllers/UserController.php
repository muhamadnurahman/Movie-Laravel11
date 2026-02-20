<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createProfile()
    {
        $user = User::find(1);

        $user->profile()->create([
            'phone' => '1234567890',
            'address' => '12 merdeka St'
        ]);

        return $user;
    }

    public function userProfile()
    {
        $user = User::all();

        //lazi loading
        // return $user->profile;

        //eager loading
        // return $user->load('profile');

        return $user;
    }

    public function updateProfile()
    {
        $user = User::find(1);

        $user->profile()->update([
            'phone' => '9999999',
            'address' => '321 man Tr',
        ]);

        return $user;
    }

    public function deleteProfile()
    {
        $user = User::find(1);

        $user->profile()->delete();

        return $user;
    }
}
