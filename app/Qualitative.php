<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualitative extends Model
{
    protected $table='qualitative_analysis';
    protected $primaryKey = 'qid';

    //protected $primaryKey = ['qid', 'setid'];
    //public $incrementing = false;
}
