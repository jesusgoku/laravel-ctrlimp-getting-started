<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commitment extends Model
{
    protected $fillable = ['description', 'due_date'];

    public function company() {
        return $this->belongsTo('App\Company');
    }

    public function files() {
        return $this->hasMany('App\CommitmentFile');
    }
}
