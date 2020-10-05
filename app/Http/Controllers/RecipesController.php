<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function saveRecipe(Request $data)
    {
        $error_array = array();
        $success_output = '';
        
        $success_output = '<div class="alert alert-success">Recipe Added Successfully</div>';
        DB::table('recipes')
        ->insert(
            ['file_name' => $data->file_name,'title' => $data->title,'description' => $data->description,'instructions' => $data->instructions,'ingredients' => $data->ingredients,'proteins' => $data->proteins, 'fats' => $data->fats, 'carbs' => $data->carbs ]
        );
        #create or update your data here

        $output = array(
            'error'     =>  $error_array,
            'success'   =>  $success_output
        );
        echo json_encode($output);

    }
    public function getRecipes()
    {
        $error_array = array();
        $success_output = '';
        
        $success_output = '<div class="alert alert-success">Recipe Added Successfully</div>';
        $res = DB::table('recipes')->get();
        
        #create or update your data here

        $output = array(
            'error'     =>  $error_array,
            'success'   =>  $success_output,
            'data'      =>  $res
        );
        echo json_encode($output);

    }
    public function getRecipe(Request $data)
    {
        $res = DB::table('recipes')->find($data->id);
        
        #create or update your data here

        $output = array(
            'data'      =>  $res
        );
        echo json_encode($output);

    }
}
