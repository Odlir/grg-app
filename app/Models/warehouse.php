<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class warehouse extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "warehouse";
    protected $fillable = ['name', 'description', 'creation_user', 'modification_user', 'elimination_user', 'status'];
    public function establishment(): HasOne
    {
        return $this->hasOne(establishment::class, 'id');
    }

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
