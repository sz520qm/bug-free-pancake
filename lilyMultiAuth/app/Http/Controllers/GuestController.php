<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    // public function edit($id)
    // {

    //     return view('guests.guest-data', ['users' => User::all(),]);
    // }
    public function guestData()
    {

        return view('guests.guest-data', ['users' => User::all(),]);
    }
    public function create()
    {
        return view('auth.register');
    }
}
