<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use App\Classes\NewModel;

class Member extends NewModel {

    protected $table = 'member';
    protected $hidden = ['id', 'facebook_id', 'created_at', 'created_by', 'updated_at', 'updated_by', 'deleted_at'];

    /**
     * Member has transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transaction()
    {
        return $this->hasMany('App\Transaction');
    }

}
