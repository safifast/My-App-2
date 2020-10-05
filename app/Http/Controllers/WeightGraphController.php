<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class WeightGraphController extends Controller
{
    protected function saveWeights(Request $data){
        $error_array = array();
        $success_output = '';
        
        $res = DB::table('weights_targets')->where('user_id', auth()->user()->id)->first();
        $res = $res->target_weight;
        $success_output = '<div class="alert alert-success">Data Inserted Successfully</div>';
        DB::table('weights_graphs')
        ->insert(
            ['user_id' => auth()->user()->id, 'current_weight' => $data->current_weight, 'target_weight' => $res]
        );
        #create or update your data here

        $output = array(
            'error'     =>  $error_array,
            'success'   =>  $success_output
        );
        echo json_encode($output);

    }
}
