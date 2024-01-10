<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yeuthich extends Model
{
    use HasFactory;
    protected $table ='yeuthich';
    protected $primaryKey='id';
    protected $fillable=[
        'idProduct',
        'idUser',
    ];
    public function prod(){
        return $this->hasOne(Product::class,'id','idProduct');
    }
}
