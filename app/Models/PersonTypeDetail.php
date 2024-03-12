<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PersonTypeDetail extends Pivot
{
    use HasFactory;

    protected $table="person_type_detail";

    protected $fillable = ['person_id','person_type_id'];

}
