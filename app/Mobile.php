<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobile extends Model
{
    //
    protected $fillable = ['s_id','model','company'];


    public function sell()
    {
        return $this->belongsTo(Sell::class);
    }
}
