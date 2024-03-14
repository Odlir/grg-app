<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unitOfMeasure extends Model
{
    use HasFactory;

    protected $table = 'unit_of_measure';
    protected $keyType = 'string';
}
