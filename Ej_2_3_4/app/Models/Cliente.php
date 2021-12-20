<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table='cliente';
    protected $primaryKey = 'id';
    public    $timestamps=false;
    protected $fillable=[
    'nombre', 'dpi', 'fecha_nacimiento', 'estado', 'created_at', 'updated_at', 'created_by'
    ];


}
