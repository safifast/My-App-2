<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class WeightsTargetController extends Controller
{
    protected function saveTarget(Request $data){
        
        $target = $data->input("target-weight");
        $target = intval($target);

        $error_array = array();
        $success_output = '';
        $success_output = '<div class="alert alert-success">Data Updated</div>';
        DB::table('weights_targets')
        ->updateOrInsert(
            ['user_id' => auth()->user()->id],
            ['target_weight' => $target]
        );
        #create or update your data here

        $output = array(
            'error'     =>  $error_array,
            'success'   =>  $success_output
        );
        echo json_encode($output);

    }
}
