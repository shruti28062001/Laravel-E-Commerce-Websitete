<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table="order";
    protected $fillable = ['address', 'customer_id', 'grand_total', 'order_status', 'payment_method','payment_id','phone_no'];

   public function orderDetails()
   {
       return $this->hasMany(OrderDetails::class, 'order_id');
   }
   public function user()
{
    return $this->belongsTo(User::class, 'customer_id');
}  

public function orderDetail() {
    return $this->hasMany(OrderDetails::class);
}

}
