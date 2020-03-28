<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Type extends Model
{
    protected $table= 'types';
    /**
     * Attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'brand_id','category_id'
    ];

    /**
     * Get the brand of the type.
     *
     * @return BelongsTo
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class);
        return $this->hasMany(Variant::class);
    }
}
