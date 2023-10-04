<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computador extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $primaryKey = 'idComputador';
    protected $table = 'computadores';
    protected $fillable = [
        'marcaPc',
        'modeloPc',
        'serialPc',
        'personas_idPersona'
    ];

    const CREATED_AT = 'fechaHoraEntrada';
    const UPDATED_AT = 'fechaHoraSalida';

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'personas_idPersona', 'idPersona');
    }
}
