<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'rut'];

    public function account() {
        return $this->belongsTo('App\Account');
    }

    public function commitments() {
        return $this->hasMany('App\Commitment');
    }
}
