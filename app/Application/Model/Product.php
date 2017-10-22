<?php

namespace App\Application\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

  public $table = "products";


   protected $fillable = [
        'title' , 'des' , 'image' , 'cat_id'
   ];



}
