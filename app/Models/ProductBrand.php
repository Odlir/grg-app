<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductBrand extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "products_brand";
    protected $fillable = ['name','description', 'status'];

    protected $dates = ['deleted_at'];
}
