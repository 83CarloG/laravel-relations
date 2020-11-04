<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function info()
    {
        // Creo nel model la relazione inserendo il model da relazionare
        return $this->hasOne('App\AuthorInfo');
    }
}
