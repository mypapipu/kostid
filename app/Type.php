<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use App\Classes\NewModel;

class Type extends NewModel {

    protected $table = "type";
    protected $hidden = ['id', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * Type of product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function product()
    {
        return $this->hasMany('App\Product');
    }

}