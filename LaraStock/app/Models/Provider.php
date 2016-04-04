<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = 'providers';
    public $timestamps = false;
    protected $fillable = ['name'];

    public function providers()
    {
        return$this->hasMany(Product::class);
    }

    public function brands()
    {
        return$this->hasMany(Product::class);
    }
}
