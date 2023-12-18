<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiachiKhachhang extends Model
{
    use HasFactory;
    protected $fillable=[
        'hoTen',
        'email',
        'soDienThoai',
        'diaChi',
        'phuongthucthanhtoan',
    ];
    
}
