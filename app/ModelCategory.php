<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class ModelCategory extends Model 
{
   protected $table ='categories';
   protected $fillable =['name'];
   protected $guarded =['id'];
}
