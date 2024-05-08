<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $table ='products';
    protected $fillable =[
        'category_id',
        'name',
        'thumbnail',
       ' price',
       'description',
       'category',
       'status',

    ];

    public function category(){
        return $this->belongsto(Category::class);
    }
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
