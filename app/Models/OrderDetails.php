<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;
    protected $table="orderdetails";
    protected $fillable = ['order_id',  'quantity', 'price' ,'product_id'];
   public function order()
   {
       return $this->belongsTo(Order::class, 'order_id');
   }

 

  public function adminProduct(){
    return $this->belongsTo(product::class,'product_id' );
  }

  public function product() {
    return $this->belongsTo(Product::class);
}

}
