<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $appends = ['yeuthich'];
    protected $table = 'product';
    protected $primaryKey = 'id';
    protected $fillable = [   
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
public function comments()
{
    return $this->hasMany(Comment::class, 'idProduct', 'id');
}
public function categories()
{
    return $this->belongsToMany(Category::class, 'pro_cate', 'idProduct', 'idCategory');
}
public function proCates()
{
    return $this->belongsToMany(Product::class, 'pro_cate', 'idProduct', 'idCategory');
}

public function pro_cate(){
    return $this->belongsTo('App\pro_cate','idCategory');
}
public function tacgia()
{
    return $this->belongsTo(Tacgia::class, 'idTacgia', 'id');
}

public function nhaxuatban()
{
    return $this->belongsTo(Nhaxuatban::class, 'idNhaxuatban', 'id');
}

public function getyeuthichAttribute()
{
    $yeuthich = Yeuthich::where(['idProduct' => $this->id, 'idUser' => auth()->id()])->first();
    return $yeuthich ? true : false;
}
}
