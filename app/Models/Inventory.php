<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventory extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "inventory";

    protected $fillable = ['name', 'description', 'warehouse_id', 'creation_user', 'modification_user', 'elimination_user', 'status'];
}
