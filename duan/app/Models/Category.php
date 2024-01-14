<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table ='category';
    protected $primaryKey='id';
    protected $fillable=[
        'name',
        'hidden',
        'thutu',
    ];
    public function product(){
        return $this->hasMany('App\Models\Cuahang');
    }
}
