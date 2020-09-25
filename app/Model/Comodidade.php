<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comodidade extends Model
{    
    /**
     * connection
     *
     * @var string
     */
    protected $connection = 'mysql_anuncio';
    
    //
    protected $fillable = array(
        'id','descricao','publicado','created_at','updated_at',
    );
}
