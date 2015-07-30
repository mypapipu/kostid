<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model {

    protected $table = 'image';
    protected $hidden = ['id', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * Image owned by product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }

}