<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductBrandDetail extends Model
{
    use HasFactory;

    protected $table="product_brand_detail";

    protected $fillable = ['product_id','product_brand_id'];
}
