<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuahang extends Model
{
    use HasFactory;
    protected $table ='product';
    protected $primaryKey='id';
    protected $dates=['ngayDang'];
    protected $fillable=[
        'name',	
        'img',	
        'price',	
        'priceSale',	
        'luotxem',	
        'tomTat',	
        'moTa',	
        'ngayDang',	
        'namsanxuat',	
        'idNhaxuatban',	
        'idTacgia',	
        'idVoucher',	
        'yeuthich',	
        'quantity',	
        'giamgia',	
        'hidden',	
        'hot'
    ];
    public function cate(){
        return $this->hasOne(Pro_cate::class,'id','idProduct');
    }
    public function category(){
        return $this->belongsTo(Category::class,'id');
    }
}
