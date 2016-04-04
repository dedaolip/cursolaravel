<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelsProduct extends Model
{
    protected $table = 'products';
    public $timestamps = false;
    protected $fillable = ['name', 'description', 'price_cost', 'price_resale'];
}
