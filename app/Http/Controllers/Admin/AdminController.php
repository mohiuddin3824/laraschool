<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Auth
    public function __construct()
    {
        $this->middleware('auth');
    }
    //Admin Logout
    public function adminLogout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
