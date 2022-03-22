<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Auth;
use App\Models\User;
use App\Models\Cart;

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

    public function cart($id)
    {
        $proIdCart = Cart::where(['user_id' => $id])->with('product')->get();

        return view('test', compact('proIdCart'));
    }
}
