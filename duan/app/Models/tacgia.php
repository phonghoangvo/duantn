<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class tacgia extends Model
{
    use HasFactory;
    protected $table ='tacgia';
    protected $primaryKey='id';
    protected $fillable=[
        'name',
        'img',
    ];
    
    
    public function Product(){
        return $this->hasMany(Product::class, 'idTacgia','id');
    }
}
