<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    protected $table = 'category';
    /**
     * Attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable  = ['name'];

    /**
     * Get the models of the brand.
     *
     * @return HasMany
     */
    public function brands()
    {
        return $this->hasMany(Brand::class);
    }
}
