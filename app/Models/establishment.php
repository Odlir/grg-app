<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class establishment extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "establishment";
    protected $fillable = ['name','description','creation_user','modification_user','elimination_user','status'];
    protected $keyType = 'string';

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

}
