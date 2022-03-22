<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'products';

    protected $fillable = [
        'code',
        'name',
        'img',
        'description',
        'categori_id',
        'price',
        'is_top',
        'on_sale',
        'sale',
    ];

    protected function carts()
    {
        return $this->hasMany(Cart::class, 'product_id');
    }

    protected function images()
    {
        return $this->hasMAny(Image::class, 'product_id');
    }

    public function scopeLeastProduct($query)
    {
        $query->orderByDesc('id')->limit(8);
    }

    public function scopeProductTop($query)
    {
        $query->where('is_top',1)->orderByDesc('id')->limit(8);
    }

    public function scopeProductMenu($query)
    {
        $query->orderByDesc('id');
    }

    public function scopeFilter($query, $data)
    {
        if(isset($data['keyword'])) {
            $query->where('name', 'like', '%'.$data['keyword'].'%')
                    ->orWhere('code', 'like', '%'.$data['keyword'].'%');
        }

        return $query;
    }
}
