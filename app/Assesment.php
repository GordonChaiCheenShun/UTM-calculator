<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assesment extends Model
{
    protected $table = 'assesment';
    public $primaryKey = 'id';
    public $timestamp = true;
}
