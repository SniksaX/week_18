<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductOrder extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price'];

    public function order() {
        return $this->morphOne(Order::class, 'orderable');
    }
}
