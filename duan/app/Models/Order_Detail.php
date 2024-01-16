<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    use HasFactory;
    protected $table = 'order_detail';
    protected $primaryKey = 'id';
    protected $fillable = [
        'order_id',
        'id_product',
        'name',
        'total',
        'quantity'
    ];
    public function product(){
        return $this->hasOne(Product::class,'id','id_product');
    }
}
