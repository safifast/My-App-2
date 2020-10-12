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

    public function getCalories($id)
    {
        $res = DB::table('recipes')->find($id);
        return [floatval($res->proteins),floatval($res->carbs),floatval($res->fats)];
    }

    public function getAllRecipe()
    {
        
        $res = DB::table('recipes')->get();
        $card_html ='<div class="row mt-2 mb-4">';
        $x = 0;
        $calories= [];
        foreach($res as $recipe){
            $reviews = DB::table('reviews')->where([
                ['recipe_id', $recipe->id]
            ])->pluck('ratting')->toArray();;
            $ratting = 0.0;
            foreach($reviews as $review)
            {
                $ratting = $ratting + $review;
            }
            $ratting = $ratting/count($reviews);
            
            $card_html .=' 
                <div class="col-lg-4 wow bounceIn">
                    <div class=" card component-card_2 ">
                        <img src="http://localhost:8000/storage/img/recipe1.png" class="card-img-top"
                        alt="widget-card-2">
        
                        <div class="card-body crd" style="border-top: 20px; background: #fff;">
                            <div class="row">
                                <div class="col-lg-6" pl-4 style="justify-content: space-between;flex-direction: column;display: flex;">
                                    <div>    
                                        <h5 class="card-title">'. $recipe->title .'</h5>';
                                        for($y =1;$y<6;$y++)
                                        {
                                            if ($ratting>=$y)
                                            {
                                                $card_html .=' <span class="fa fa-star checked"></span>';
                                            }
                                        }
                        $card_html .='<p class="card-text">' . $recipe->description .'</p>
                                    </div>
                                    <div>
                                        <button data-backdrop="static" data-keyboard="false" data-toggle="modal"
                                            data-target="#exampleModal" onclick="exploreRecipe('.$recipe->id.')"
                                            class="btn btn-success">View Recipe</button>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 pl-0" style="text-align: -webkit-center; margin-top: 8px;">
                                    <div id="chart_'.$recipe->id.'" class="" style="position: relative;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
                
                $calories[$x] = $this->getCalories($recipe->id);
                
                $x=$x+1;
        }
        $card_html .='</div>';
        // var_dump($calories);
        $output = array(
            'data'      =>  $card_html,
            'recipe_count'      =>  count($res),
            'calories' => $calories
        );
        echo json_encode( $output);
    }

    public function getSubscribedPlan(Request $data)
    {
        $res = DB::table('recipes')->get();
        $card_html = '
        <div class="day container-fluid mb-3">
                <h1 class="mt-3" style="text-align:center;">Monday</h1>
                <div class="row mt-2 mb-4">';

                    
        $card_html .= $this->getPlanRecipe($res->id, $res->mon1, "Monday", "Breakfast");
        $card_html .= $this->getPlanRecipe($res->id, $res->mon2, "Monday", "Lunch");
        $card_html .= $this->getPlanRecipe($res->id, $res->mon3, "Monday", "Dinner");
        $card_html .='
        </div>
        </div>';
        $card_html .= '
        <div class="day container-fluid mb-3">
                <h1 class="mt-3" style="text-align:center;">Tuesday</h1>
                <div class="row mt-2 mb-4">';

        $card_html .= $this->getPlanRecipe($res->id, $res->tues1, "Tuesday", "Breakfast");
        $card_html .= $this->getPlanRecipe($res->id, $res->tues2, "Tuesday", "Lunch");
        $card_html .= $this->getPlanRecipe($res->id, $res->tues3, "Tuesday", "Dinner");
        $card_html .='
        </div>
        </div>';
        $card_html .= '
        <div class="day container-fluid mb-3">
                <h1 class="mt-3" style="text-align:center;">Wednesday</h1>
                <div class="row mt-2 mb-4">';

        $card_html .= $this->getPlanRecipe($res->id, $res->wed1, "Wednesday", "Breakfast");
        $card_html .= $this->getPlanRecipe($res->id, $res->wed2, "Wednesday", "Lunch");
        $card_html .= $this->getPlanRecipe($res->id, $res->wed3, "Wednesday", "Dinner");
        $card_html .='
        </div>
        </div>';
        $card_html .= '
        <div class="day container-fluid mb-3">
                <h1 class="mt-3" style="text-align:center;">Thursday</h1>
                <div class="row mt-2 mb-4">';

        $card_html .= $this->getPlanRecipe($res->id, $res->thur1, "Thursday", "Breakfast");
        $card_html .= $this->getPlanRecipe($res->id, $res->thur2, "Thursday", "Lunch");
        $card_html .= $this->getPlanRecipe($res->id, $res->thur3, "Thursday", "Dinner");
        $card_html .='
        </div>
        </div>';
        $card_html .= '
        <div class="day container-fluid mb-3">
                <h1 class="mt-3" style="text-align:center;">Friday</h1>
                <div class="row mt-2 mb-4">';

        $card_html .= $this->getPlanRecipe($res->id, $res->fri1, "Friday", "Breakfast");
        $card_html .= $this->getPlanRecipe($res->id, $res->fri2, "Friday", "Lunch");
        $card_html .= $this->getPlanRecipe($res->id, $res->fri3, "Friday", "Dinner");
        $card_html .='
        </div>
        </div>';
        $card_html .= '
        <div class="day container-fluid mb-3">
                <h1 class="mt-3" style="text-align:center;">Saturday</h1>
                <div class="row mt-2 mb-4">';

        $card_html .= $this->getPlanRecipe($res->id, $res->sat1, "Saturday", "Breakfast");
        $card_html .= $this->getPlanRecipe($res->id, $res->sat2, "Saturday", "Lunch");
        $card_html .= $this->getPlanRecipe($res->id, $res->sat3, "Saturday", "Dinner");
        $card_html .='
        </div>
        </div>';
        $card_html .= '
        <div class="day container-fluid mb-3">
                <h1 class="mt-3" style="text-align:center;">Sunday</h1>
                <div class="row mt-2 mb-4">';

        $card_html .= $this->getPlanRecipe($res->id, $res->sun1, "Sunday", "Breakfast");
        $card_html .= $this->getPlanRecipe($res->id, $res->sun2, "Sunday", "Lunch");
        $card_html .= $this->getPlanRecipe($res->id, $res->sun3, "Sunday", "Dinner");
        $card_html .='
        </div>
        </div>';
        #create or update your data here
        // var_dump($res->name);
        //return $card_html;

        $recipes = [$res->mon1,$res->mon2,$res->mon3,$res->tues1,$res->tues2,$res->tues3,$res->wed1,$res->wed2,$res->wed3,$res->thur1,$res->thur2,$res->thur3,$res->fri1,$res->fri2,$res->fri3,$res->sat1,$res->sat2,$res->sat3,$res->sun1,$res->sun2,$res->sun3];
        $calories=[];
        for ($x = 0; $x <= 20; $x+=1){
            $calories[$x] = $this->getCalories($recipes[$x]);
        }
        // var_dump($calories);
        $output = array(
            'data'      =>  $card_html,
            'recipes'      =>  $recipes,
            'index' => $data->index,
            'calories' => $calories
        );
        echo json_encode($output);

    }
}