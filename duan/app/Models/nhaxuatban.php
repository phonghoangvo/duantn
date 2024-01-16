<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhaxuatban extends Model
{
    use HasFactory;
    protected $table ='nhaxuatban';
    protected $primaryKey='id';
    protected $fillable=[
        'name',
        'img',
    ];
}
