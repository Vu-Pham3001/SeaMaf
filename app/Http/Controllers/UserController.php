<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Auth;

class UserController extends Controller
{
    public function edit($id)
    {
        $info_user = User::where('id', $id)->first();

        return view('user.user', compact('info_user'));
    }

    public function update(Request $request, $id)
    {
        $user_info = User::where('id', $id)->first();

        if(isset($request['name'])) {
            $user_info->name = $request['name'];
        }

        if(isset($request['email'])) {
            $user_info->email = $request['email'];
        }

        if(isset($request['password'])) {
            $user_info->password = bcrypt($request['password']);
        }

        // dd($user_info);

        $user_info->save();

        return redirect()->back()->with('successful', 'cập nhật thông tin thành công');
    }
}
