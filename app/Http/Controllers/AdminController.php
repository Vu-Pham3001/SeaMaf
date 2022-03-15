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
        return view('admin.pages.dashboard');
    }

    // public function user()
    // {
    //     return view('test1');
    // }

    public function listuser()
    {
        $users = User::userMenu()->simplePaginate(config('config.paginate'));

        return view('admin.pages.listuser', compact('users'));
    }
}
