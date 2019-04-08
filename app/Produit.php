<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = [
        'produit_caractere',
        'image',
        'produit_categorie',
        'produit_prixvent',
        'produit_code',
        'produit_nom',
        'produit_tva',

        'produit_reference',
   ];
}
