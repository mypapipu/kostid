<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use App\Classes\NewModel;

class Transaction extends NewModel {

    protected $table = 'transaction';
    protected $hidden = ['id', 'created_at', 'created_by', 'updated_at', 'updated_by', 'deleted_at'];

    /**
     * Transaction owned by member
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function member()
    {
        return $this->belongsTo('App\Member');
    }

}