<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductFacility extends Model {

    protected $table = 'product_facility';
    protected $hidden = ['id', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * Product facility owned by product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }

}