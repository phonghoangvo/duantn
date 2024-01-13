<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pro_cate extends Model
{
    use HasFactory;
    protected $table ='pro_cate';
    protected $primaryKey='id';
    protected $fillable=[
        'idCategory',
        'idProduct',
    ];
}
