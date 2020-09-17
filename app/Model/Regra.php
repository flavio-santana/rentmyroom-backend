<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Regra extends Model
{
    //
    protected $fillable = array(
        'id','descricao','publicado','created_at','updated_at',
    );

    
    public function anuncios()
    {
        return $this->hasMany(AnuncioRegra::class);
    }
}
