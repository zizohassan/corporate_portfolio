<?php

namespace App\Application\Model;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{

  public $table = "services";


   protected $fillable = [
        'title' , 'des' , 'icon'
   ];



}
