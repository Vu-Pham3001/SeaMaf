<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;

class products extends Controller
{
    public function add()
    {
        return view('admin.menu.addmenu');
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

        return redirect('/admin/add');
    }
}
