<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use App\Classes\NewModel;

class City extends NewModel {

    protected $table = "city";
    protected $hidden = ['id', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * City where product used
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function product()
    {
        return $this->hasMany('App\Product');
    }

}