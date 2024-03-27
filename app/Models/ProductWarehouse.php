<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductWarehouse extends Model
{
    use HasFactory;

    protected $table="product_warehouse";

    protected $fillable = ['product_id','warehouse_id', 'initial_stock'];
}
