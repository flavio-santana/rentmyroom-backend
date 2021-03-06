<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Anuncio; 

/**
 * AnuncioComodidade
 */
class AnuncioComodidade extends Model
{
    
    /**
     * connection
     *
     * @var string
     */
    protected $connection = 'mysql_anuncio';
    
    //
    protected $fillable = array(
        'id','anuncio_id','comodidade_id','publicado','created_at','updated_at',
    );

    /**
     * produto
     *
     * @return void
     */
    public function anuncio()
    {
        $this->belongsTo(Anuncio::class);
    }
}