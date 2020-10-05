<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class weights_target extends Model
{
    protected $fillable = [
        'user_id', 'target_weight'
    ];
}
