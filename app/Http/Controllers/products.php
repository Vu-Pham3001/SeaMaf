<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Session;

class products extends Controller
{
    public function add()
    {
        return view('admin.pages.addmenu');
    }

    protected function create($data)
    {
        return Product::create([
            'name' => $data['name-product'],
            'categori_id' => $data['categori_id'],
            'img' => $data['img'],
            'description' => $data['description'],
            'code' => $data['code'],
            'price' => $data['price'],
            'is_top' => $data['is_top'],
            'sale' => $data['sale'],
        ]);
    }

    public function store(ProductRequest $request)
    {
        $product = $this->create($request);

        Session::flash('successful', 'Tạo danh mục thành công');

        return redirect('/admin/add');
    }

    public function index()
    {
        $products = Product::productMenu()->get();

        return view('admin.pages.listmenu', compact('products'));
    }

    public function delete(Request $request, $id)
    {
        $id_pro = Product::find($id);
        $id_pro->delete();
        return redirect('/admin/listmenu');
    }
}
