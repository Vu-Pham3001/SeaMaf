<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function user()
    {
        return view('test1');
    }
}
