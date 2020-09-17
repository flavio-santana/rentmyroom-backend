<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\AnuncioComodidade; 
use App\Model\AnuncioRegra; 


/**
 * Anuncio
 */
class Anuncio extends Model
{
    //
    protected $fillable = array(
        'id','imovel_id','tipoQuarto_id','titulo','descricao','valorAluguel','dataDisponivel','publicado','created_at','updated_at',
    );

    /**
     * comodidades
     *
     * @return void
     */
    public function comodidades()
    {
        return $this->hasMany(AnuncioComodidade::class);
    }
    
    /**
     * regras
     *
     * @return void
     */
    public function regras()
    {
        return $this->hasMany(AnuncioRegra::class);
    }
}
