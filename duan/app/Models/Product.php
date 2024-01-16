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
    public function comment(){
        return $this->hasMany(comment::class);
    }

    public function cate(){
        return $this->hasOne(Pro_cate::class,'id','idProduct');
    }

    public function protg()
    {
        return $this->belongsTo(tacgia::class,'idTacgia');
    }

    public function nhaxuatban(){
        return $this->hasOne(nhaxuatban::class,'id','idNhaxuatban');
    }
    public function getyeuthichAttribute(){
        $yeuthich = Yeuthich::where(['idProduct' => $this->id,'idUser'=> auth()->id()])->first();
        return $yeuthich ? true : false;
    }
}
