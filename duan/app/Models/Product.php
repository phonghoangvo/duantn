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
    public function Comment(){
        return $this->hasMany(Comment::class,'id','idProduct');
    }
    public function cate(){
        return $this->hasOne(Pro_cate::class,'id','idProduct');
    }
    
    public function protg()
    {
        return $this->belongsTo(tacgia::class,'idTacgia','id');
    }
    
    public function nhaxuatban(){
        return $this->belongsTo(nhaxuatban::class,'idNhaxuatban','id',);
    }
    public function getyeuthichAttribute(){
        $yeuthich = Yeuthich::where(['idProduct' => $this->id,'idUser'=> auth()->id()])->first();
        return $yeuthich ? true : false;
    }
}
