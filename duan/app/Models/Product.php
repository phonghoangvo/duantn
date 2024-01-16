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
<<<<<<< HEAD
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
=======
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
    return $this->belongsToMany(Product::class, 'pro_cate', 'idProduct', 'idCategory')
                ->withPivot('id'); // Nếu cần thì thêm các cột khác của bảng trung gian
}

// Lưu ý: Tên mô hình 'pro_cate' nên theo quy ước về chữ hoa và chữ thường
public function pro_cate()
{
    return $this->belongsToMany(Category::class, 'pro_cate', 'idCategory', 'idProduct')
                ->withPivot('id'); // Nếu cần thì thêm các cột khác của bảng trung gian
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
>>>>>>> fb200323ef340c1b8a28d5a0261ad8a3541440a2
}
