<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table ='category';
    protected $primaryKey='id';
    protected $fillable=[
        'name',
        'img',
        'hidden',
        'thutu',
    ];
    public function products()
{
    return $this->belongsToMany(Product::class, 'pro_cate', 'idCategory', 'idProduct');
}
}
