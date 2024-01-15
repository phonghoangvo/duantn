<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class nhaxuatban extends Model
{
    use HasFactory;
    protected $table ='nhaxuatban';
    protected $primaryKey='id';
    protected $fillable=[
        'name',
        'img',
    ];
    public function Product(){
        return $this->hasMany(Product::class, 'idNhaxuatban','id');
    }
}
