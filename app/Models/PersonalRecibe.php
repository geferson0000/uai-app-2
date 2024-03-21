<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalRecibe extends Model
{
    use HasFactory;

    protected $table = 'personal_recibe';

    protected $fillable = [
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'gmail',
        'emai_cantv',
        'telefono',
        'p00',
        'cedula',
        'cargo_id'
    ];
    
    public function cargo()
    {
        return $this->belongsTo(Cargo::class);
    }
}
