<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommitmentFile extends Model
{
    protected $fillable = ['title', 'description', 'path'];

    public function commitment() {
        return $this->belongsTo('App\Commitment');
    }
}
