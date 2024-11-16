<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_cliente', 'email_cliente', 'telefone_cliente', 'data_reserva', 'hora_reserva', 'numero_pessoas','observacao',
    ];
}
