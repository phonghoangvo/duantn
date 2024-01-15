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

    public function products()
    {
        return $this->belongsToMany(Product::class, 'pro_cate', 'idCategory', 'idProduct', 'id');
    }
    

    public function category()
    {
        return $this->belongsTo(Category::class, 'idCategory', 'id');
    }
}


