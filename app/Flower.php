<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    protected $fillable=['nume','marime','culoare','pret'];
    protected $table = 'flowers';
}
