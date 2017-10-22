<?php

namespace App\Application\Model;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{

  public $table = "testimonials";


   protected $fillable = [
        'title' , 'des' , 'image', 'position'
   ];



}
