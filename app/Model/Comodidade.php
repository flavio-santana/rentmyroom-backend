<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comodidade extends Model
{
    //
    protected $fillable = array(
        'id','descricao','publicado','created_at','updated_at',
    );
}
