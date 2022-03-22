<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use Session;
// use Auth;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth as FacadesAuth;

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

        $user_info->save();

        return redirect()->back()->with('successful', 'cập nhật thông tin thành công');
    }

    public function addcart(Request $request)
    {
        $cartId = Cart::where('product_id', (string)$request->input('product_id'))->where('user_id', FacadesAuth::user()->id)->get();
        if(count($cartId)>=1) {
            Cart::where('id', $cartId[0]->id)->update(['quanlity'=> $cartId[0]->quanlity+1]);
        }
        else{
            Cart::create([
                'user_id' => FacadesAuth::user()->id,
                'product_id' => (int)$request->input('product_id'),
                'status' => 1,
                'quanlity' => 1,
            ]);
        }

        return redirect()->back()->with('successful', 'Thêm vào giỏ hàng thành công');
    }

    public function cart()
    {
        $user = FacadesAuth::user();

        $proIdCart = Cart::where(['user_id' => $user->id])->with('product')->get();

        return view('cart.cart', compact('proIdCart'));
    }
}
