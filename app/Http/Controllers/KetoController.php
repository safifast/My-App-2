<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KetoResults;
use Illuminate\Support\Facades\DB;
use Auth;
class KetoController extends Controller
{
    public function index()
    {
        return csrf_token(); 
    }
    protected function saveResults(Request $data)
    {
        $error_array = array();
        $success_output = '';
        
        $success_output = '<div class="alert alert-success">Data Updated</div>';
        DB::table('keto_results')
        ->updateOrInsert(
            ['user_id' => auth()->user()->id],
            ['protein' => $data->protein, 'fats' => $data->fats, 'carbs' => $data->carbs ]
        );
        #create or update your data here

        $output = array(
            'error'     =>  $error_array,
            'success'   =>  $success_output
        );
        echo json_encode($output);

    }
    public function getResults()
    {
        $res = DB::table('keto_results')->where('user_id', auth()->user()->id)->first();

        return response()->json([$res->protein, $res->carbs, $res->fats, $res->consumed_protein, $res->consumed_carbs, $res->consumed_fats ]);
    }

}
