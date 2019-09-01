<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['descricao', 'apresentacao', 'nomePrincipioAtivo', 'empresa'];
    public function getDates()
    {
        return array('created_at','updated_at');
    }
}