<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class pro_cate extends Model
{
    use HasFactory;
    protected $table ='pro_cate';
    protected $primaryKey='id';
    protected $fillable=[
        'idCategory',
        'idProduct',
    ];
    public function Product()
    {
        return $this->hasMany(Product::class, 'idProduct', 'id');
    }

    public function Category()
    {
        return $this->hasOne(Category::class, 'id', 'idCategory');
    }
}
