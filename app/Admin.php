<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [

        'admin_nom',
        'admin_prenom',
        'admin_naissance',
        'admin_sexe',
        'admin_adresse',
        'admin_telephone',
        'admin_categorie',
        'admin_login',
        'admin_pasword'

    ];
}
