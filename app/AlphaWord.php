<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlphaWord extends Model
{
    public function words()
    {
        return $this->hasMany(Word::class);
    }

    protected $guarded = [];
    public $timestamps = false;
}
