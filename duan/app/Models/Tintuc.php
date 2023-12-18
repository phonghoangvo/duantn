<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tintuc extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'img',
        'content',
        'hidden',
        'summary',
        'created_at',
        'updated_at',
    ];
}
