<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    /**
     * Attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable  = [
        'name','location','phone','image'
    ];
}
