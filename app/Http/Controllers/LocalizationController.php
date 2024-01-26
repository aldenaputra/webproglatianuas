<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    public function loginID()
    {
        App::setLocale('id');
        return view('auth.login');
    }
    public function loginEN()
    {
        App::setLocale('en');
        return view('auth.login');
    }
}
