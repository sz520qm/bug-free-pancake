<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('user')){
             return view('userdash');
        }elseif(Auth::user()->hasRole('blogwriter')){
             return view('blogwriterdash');
        }elseif(Auth::user()->hasRole('admin')){
         return view('dashboard');
    }
    }
 
    public function myprofile()
    {
     return view('myprofile');
    }

    public function adminprofile()
    {
     return view('adminprofile');
    }
 
    public function postcreate()
    {
     return view('postcreate');
    }
 }

