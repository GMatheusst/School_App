<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'price',
        'img',
        'in_stock',
        'workload',
    ];

    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }

    public function cartProducts()
    {
        return $this->belongsToMany(Cart::class, 'cart_product')
                    ->withPivot('quantity');
    }

    public function orderProducts()
    {
        return $this->belongsToMany(Order::class, 'order_product')
                    ->withPivot('quantity');
    }

    public function works()
    {
        return $this->hasMany(Work::class);
    }
}
