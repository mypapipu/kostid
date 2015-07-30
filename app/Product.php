<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use App\Classes\NewModel;

class Product extends NewModel {

    protected $table = 'product';
    protected $hidden = ['id', 'created_by', 'created_at', 'updated_by', 'updated_at', 'deleted_at'];

    /**
     * Facility on product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function product_facility()
    {
        return $this->hasMany('App\ProductFacility');
    }

    /**
     * Image on product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function image()
    {
        return $this->hasMany('App\Image');
    }

    /**
     * City where product located
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city()
    {
        return $this->belongsTo('App\City');
    }

    /**
     * Type of product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type()
    {
        return $this->belongsTo('App\Type');
    }

}
