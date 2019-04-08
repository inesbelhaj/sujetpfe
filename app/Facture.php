<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    protected $fillable = [
    'facture_num',
    'client_nom',
    'facture_datef',
    'facture_paiment',
    'facture_date',
    'facture_mod',
];
}
