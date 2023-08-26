<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function login()
    {
        $user = Auth::user()->status;

        if ($user == 1) {
            return view('backend.layouts.main');
        } else {
            return view('auth.login');
        }
    }
}
