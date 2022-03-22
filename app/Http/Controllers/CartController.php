<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function delete(Request $request, $id)
    {
        $proIdCart = Cart::where('product_id', $id)->first();

        $proIdCart->delete();

        return redirect()->back()->with('successful', 'Xóa sản phẩm giỏ hàng thành công');
    }
}
