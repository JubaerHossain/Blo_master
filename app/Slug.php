<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slug extends Model
{
    protected $fillable=[
        'Tagtitle',
        'slug',
    ];
    protected $table='slugs';
}
