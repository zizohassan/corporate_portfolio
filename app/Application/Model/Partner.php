<?php

namespace App\Application\Model;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{

  public $table = "partners";


   protected $fillable = [
        'title' , 'image'
   ];



}
