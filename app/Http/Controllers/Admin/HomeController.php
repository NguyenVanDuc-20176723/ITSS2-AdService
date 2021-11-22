<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct(){
        if (!Auth::user()){
            return Redirect('admin/login');
        }
    }
    public function index()
    {
        $user = Auth::guard('admin')->user();
        echo 'Xin chào Admin, '. $user->name;
    }
}
