<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $filable = [
        'title' , 'producer', 'number_of_doors'
    ] ;
}
