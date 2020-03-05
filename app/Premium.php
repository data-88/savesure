<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Premium extends Model
{
    /**
     * Attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'min_cc','max_cc', 'amount'
    ];
}
