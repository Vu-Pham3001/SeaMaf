<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Image;
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
        $products = Product::productMenu()->simplePaginate(config('config.paginate'));

        return view('admin.pages.listmenu', compact('products'));
    }

    public function edit($id)
    {
        $id_pro = Product::where('id', $id)->first();
        return view ('admin.pages.edit', compact('id_pro'));
    }

    public function update(Request $request, $id)
    {
        $info = Product::where('id', $id)->first();

        if(isset($request['name-product'])) {
            $info->name = $request['name-product'];
        }

        if(isset($request['categori_id'])) {
            $info->categori_id = $request['categori_id'];
        }

        if(isset($request['img'])) {
            $info->img = $request['img'];
        }

        if(isset($request['description'])) {
            $info->description = $request['description'];
        }

        if(isset($request['code'])) {
            $info->code = $request['code'];
        }

        if(isset($request['price'])) {
            $info->price = $request['price'];
        }

        if(isset($request['is_top'])) {
            $info->is_top = $request['is_top'];
        }

        if(isset($request['sale'])) {
            $info->sale = $request['sale'];
        }

        $info->save();

        return redirect()->back()->with('successful', 'cập nhật thành công');
    }

    public function delete(Request $request, $id)
    {
        $id_del = Product::where('id', $id)->first();

        $id_del->delete();

        return redirect()->back()->with('successful', 'Xóa sản phẩm thành công');
    }

    public function detail($id)
    {
        $pro_detai = Product::where('id', $id)->first();

        $pro_img = Image::where('product_id', $id)->get();

        $cate = Product::where('categori_id', $pro_detai->categori_id)->get();

        return view('product.product_detail', compact('pro_detai','pro_img', 'cate'));
    }
}
