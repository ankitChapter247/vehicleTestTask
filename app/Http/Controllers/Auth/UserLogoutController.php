<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserLogoutController extends Controller{
    public function __construct(){
        $this->middleware('auth:web');
    }

    public function userLogout(){
        Auth::logout();
        if(Auth::guard('admin')->check()){
            return redirect('/admin/dashboard');
        }
        return redirect('/login');
    }
}
