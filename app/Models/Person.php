<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['doc_types','nro_documento','nombre_legal', 'direccion',
        'alias','genero', 'telefono', 'correo','ubicacion','ubigeo', 'rating'];

    protected $dates = ['deleted_at'];

    public function doctype(): HasOne
    {
        return $this->hasOne(DocType::class, 'id');
    }

    public function persontype()
    {
        return $this->belongsToMany(PersonType::class, 'person_type_detail', 'person_id', 'person_type_id');
    }

    public function distrito()
    {
        return $this->belongsTo(Distrito::class, 'ubigeo', 'id');
    }
}
