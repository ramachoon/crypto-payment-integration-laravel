<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createUser()
    {
        $user = new User();
        $user->name = 'John Doe';
        $user->email = 'johndoe@example.com';
        $user->password = bcrypt('password');
        $user->save();

        $referralLink = $user->getReferralLink();

        return view('user.create', [
            'user' => $user,
            'referralLink' => $referralLink,
        ]);
    }
}
