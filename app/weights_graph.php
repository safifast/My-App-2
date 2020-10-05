<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class weights_graph extends Model
{
    protected $fillable = [
        'user_id', 'current_weight', 'target_weight'
    ];

}
