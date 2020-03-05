<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Detail extends Model
{
    /**
     * Attributes that are mass assignable.
     *
     * @var array
     */
    //

    protected $table = 'details';

    protected $fillable = [
        'name', 'email', 'phone', 'brand_id', 'type_id', 'variant_id','date', 'status'
    ];

    /**
     * Get the brand of the type.
     *
     * @return BelongsTo
     */

    /*public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function variant(){
        return $this->belongsTo(Variant::class);
    }*/

}
