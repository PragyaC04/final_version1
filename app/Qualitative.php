<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualitative extends Model
{
    protected $table='qualitatives';
    protected $primaryKey = 'qid';

    //protected $primaryKey = ['qid', 'setid'];
    //public $incrementing = false;
}
