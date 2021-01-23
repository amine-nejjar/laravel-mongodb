<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Visits extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'visits';
    
    protected $fillable = [
        'datetime', 'ip'
    ];
}