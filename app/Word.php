<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    public function alphaWord()
    {
        return $this->belongsTo(AlphaWord::class);
    }

    protected $guarded = [];
    public $timestamps = false;
}
