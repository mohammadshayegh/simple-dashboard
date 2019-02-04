<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    //

    protected $fillable = ['price','date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function mobile()
    {
        return $this->belongsTo(Mobile::class);
    }
}
