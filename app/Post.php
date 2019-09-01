<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['descricao', 'apresentacao', 'nomePrincipioAtivo', 'empresa'];
}