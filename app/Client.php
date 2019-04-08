<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
    'client_nom' , 'client_prenom', 'client_adresse' ,  'client_telephone' , 'client_contact' ,

 ];
}
