<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // protected $table ="books";
    protected $fillable =["title","description","thumb","price","series","sale_date","type"];
}
