<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Souscategories extends Model
{

        protected $fillable = [
            'categorie_nom',
            'categorie_libele1',
            'categorie_unite1',
            'categorie_libele2',
            'categorie_unite2',

       ];
}
