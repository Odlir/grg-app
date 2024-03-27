<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kardex extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'kardex';

    protected $fillable = ['product_warehouse_id','type','cost', 'price'];
}
