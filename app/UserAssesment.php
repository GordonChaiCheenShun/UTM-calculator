<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAssesment extends Model
{
   // Table name
   protected $table='user_assesment';
   // Primary key
   public $primaryKey="id";
   //Timestamps
   public $timestamps=true;
}
