<?php

namespace App\Application\Model;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{

  public $table = "sliders";


   protected $fillable = [
        'title' , 'des' , 'image' , 'background_image' , 'link'
   ];



}
