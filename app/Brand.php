<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{

  protected $table = 'brands';
      /**
      * Attributes that are mass assignable.
      *
      * @var array
      */
    protected $fillable  = [
      'name'
    ];
    
    /**
     * Get the models of the brand.
     *
     * @return HasMany
     */
    public function types()
    {
        return $this->hasMany(Type::class);
    }
}
