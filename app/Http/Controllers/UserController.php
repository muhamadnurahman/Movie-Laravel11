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
}
