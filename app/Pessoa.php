<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = [
        'nome', 'telefone', 'email', 'cpf',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
