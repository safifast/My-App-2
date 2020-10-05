<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class testApi extends Controller
{
    public function test()
    {
        $current_weights = DB::table('weights_graphs')->pluck('current_weight');
        $target_weights = DB::table('weights_graphs')->pluck('target_weight');
        return [$current_weights,$target_weights];
    }
}
