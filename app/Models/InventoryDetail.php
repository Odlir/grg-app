<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InventoryDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "inventory_detail";

    protected $fillable = ['inventory_id', 'product_id', 'amount', 'creation_user', 'modification_user', 'elimination_user', 'status'];
}
