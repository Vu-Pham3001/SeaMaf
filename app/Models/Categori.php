<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categori extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'categoris';

    protected $fillable = [
        'name',
    ];

    protected function products()
    {
        return $this->hasMany(Product::class,'category_id');
    }
}
