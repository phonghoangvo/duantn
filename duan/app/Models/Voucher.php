<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;
    protected $table ='voucher';
    protected $primaryKey='id';
    protected $fillable=[
        'magiamgia',
        'giatri',
        'kieugiamgia',
        'ngayhethan',
    ];
}
