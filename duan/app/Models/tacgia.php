<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tacgia extends Model
{
    use HasFactory;
    protected $table ='tacgia';
    protected $primaryKey='id';
    protected $fillable=[
        'name',
        'img',
    ];
    
    
    public function protg()
    {
        return $this->belongsTo('App\Models\Product','idTacgia');
    }
}
