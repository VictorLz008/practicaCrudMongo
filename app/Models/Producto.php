<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;
//use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'Productos';

    protected $fillable = ['nombre','descripcion','precio','stock'];
}
