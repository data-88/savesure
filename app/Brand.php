<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Brand extends Model
{

  protected $table = 'brands';
      /**
      * Attributes that are mass assignable.
      *
      * @var array
      */
    protected $fillable  = [
      'name','category_id'
    ];

    /**
     * Get the models of the brand.
     *
     * @return HasMany
     */
    public function types()
    {
        return $this->belongsTo(Category::class);
        return $this->hasMany(Type::class);
    }
}
