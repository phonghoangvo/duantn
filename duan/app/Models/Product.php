<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'img',
        'price',
        'priceSale',
        'nhacungcap',
        'nhaxuatban',
        'tacgia',
        'ngayDang',
        'tomTat',
        'idCategory'
];
    public function comment(){
        return $this->hasMany(comment::class);
    }
}
