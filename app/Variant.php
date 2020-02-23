<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Variant extends Model
{
    protected $table= 'variants';
    /**
     * Attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'type_id'
    ];

    /**
     * Get the brand of the type.
     *
     * @return BelongsTo
     */
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
