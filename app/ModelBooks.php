<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class ModelBooks extends Model 
{
   protected $table ='books';
   protected $fillable =['judul'];
   protected $guarded =['kode'];
}
