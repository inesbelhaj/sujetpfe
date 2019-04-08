<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    protected $fillable = [

         'fournisseur_nom',
         'fournisseur_prenom',

         'fournisseur_adresse',
         'fournisseur_telephone',

         'fournisseur_contact',
    ];
}
