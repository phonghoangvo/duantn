<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'order';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'hoTen',
        'email',
        'phone',
        'address',
        'note',
        'total',
        'status'
    ];
    public function orderDetails()
    {
        return $this->hasMany(Order_Detail::class);
    }

}
