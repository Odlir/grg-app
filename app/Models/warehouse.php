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

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    public function provincia()
    {
        return $this->belongsTo(Provincia::class);
    }

    public function distrito()
    {
        return $this->belongsTo(Distrito::class);
    }
}
