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
        'img',
        'hidden',
        'thutu',
    ];
    public function pro_cate()
    {
        return $this->hasMany(pro_cate::class, 'idCategory', 'id');
    }
}
