<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['nome', 'email', 'telefone', 'descricao'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'usuarios';
}
