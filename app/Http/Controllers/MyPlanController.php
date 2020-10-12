<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MyPlanController extends Controller
{
    public function getCalories($id)
    {
        $res = DB::table('recipes')->find($id);
        return [floatval($res->proteins),floatval($res->carbs),floatval($res->fats)];
    }
    public function updateKeto(Request $data)
    {
        $res = DB::table('recipes')->find($data->id);
        $keto = DB::table('keto_results')->where('user_id', auth()->user()->id)->first();
        $newconsumed_protein = $keto->consumed_protein+$res->proteins;
        $newconsumed_carbs = $keto->consumed_carbs+$res->carbs;
        $newconsumed_fats = $keto->consumed_fats+$res->fats;
        DB::table('keto_results')
        ->updateOrInsert(
            ['user_id' => auth()->user()->id],
            ['protein'=>$keto->protein, 'carbs'=>$keto->carbs, 'fats'=>$keto->fats, 'consumed_protein' => $newconsumed_protein, 'consumed_fats' => $newconsumed_fats, 'consumed_carbs' => $newconsumed_carbs ]
        );
        return "keto updated Successfully";
    }
    public function getPlanRecipe($plain_id, $id, $day, $time)
    {
        $res = DB::table('recipes')->find($id);
        $reviews = DB::table('reviews')->where([
            ['user_id', '=',auth()->user()->id],
            ['plan_id', $plain_id],
            ['day', $day],
            ['time', $time],
        ])->get();
        $card_html ='';
        if(count($reviews)<1){
            $card_html = '<div class="col-lg-4 wow bounceIn " data-wow-delay="0.6s">

            <div class=" card component-card_2 wow bounceIn   shadow ">
                <img src="http://localhost:8000/storage/img/recipe1.png" class="card-img-top"
                    alt="widget-card-2">
                <div style=" position: absolute;    float: left;    padding: 21px;    width: 100%;">
                    <h5 style="color: white;">' . $time . '</h5>
                    </div>
        
                    <div class="card-body crd" style="border-top: 20px; background: #fff;">
                        <div class="row">
                        <div class="col-lg-6" pl-4 style="justify-content: space-between;
                        flex-direction: column;
                        display: flex;">
                        <h5 class="card-title">'. $res->title .'</h5>
                        <p class="card-text">' . $res->description .'</p>
                        <div>
                        <button data-toggle="modal"
                            data-target="#exampleModal" onclick="exploreRecipe(1)"
                            class="btn btn-success">View Recipe</button>
                            </div>    
                        </div>
                        <div class="col-lg-6" style="text-align: -webkit-center; margin-top: 8px;">
                            <div id="chart_'.$day.'_'.$time. '" class="" style="position: absolute;"></div>
                            <div><button onclick="add_review('.$res->id.','.$plain_id.',\''.$day.'\',\''.$time.'\',5)"
                            class="btn btn-success" style="
                            position: inherit;
                            margin-top: 91%;
                        " class="trigger-btn" data-toggle="modal" data-target="#myModal" >Complete</button></div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>';
        }
        else{
            $card_html = '<div class="col-lg-4  wow bounceIn" data-wow-delay="0.6s">
            <div class=" card component-card_2 shadow wow bounceIn  ">
                <img src="http://localhost:8000/storage/img/recipe1.png" class="card-img-top"
                    alt="widget-card-2">
                <div style=" position: absolute;    float: left;    padding: 21px;    width: 100%;">
                    <h5 style="color: white;">' . $time . '</h5>
                    </div>
        
                    <div class="card-body crd" style="border-top: 20px; background: #fff;">
                        <div class="row">
                        <div class="col-lg-6  pl-4" style="justify-content: space-between;
                        flex-direction: column;
                        display: flex;">
                        <div>
                        <h5 class="card-title">'. $res->title .'</h5>
                        <p class="card-text">' . $res->description .'</p>
                        </div>
                        <div>
                        <button data-toggle="modal"
                            data-target="#exampleModal" onclick="exploreRecipe('.$res->id.')"
                            class="btn btn-success">View Recipe</button>
                            </div>    
                        </div>
                        <div class="col-lg-6" style="text-align: -webkit-center; margin-top: 8px;">
                            <div id="chart_'.$day.'_'.$time. '" style="position: absolute;" class=""></div>
                            <div><button onclick="add_review('.$res->id.','.$plain_id.',\''.$day.'\',\''.$time.'\',5)"
                            class="btn btn-success" style="
                            position: inherit;
                            margin-top: 91%;
                        " disabled data-toggle="modal" data-target="#exampleModal1">Completed</button></div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>';
        }
        return $card_html;
    }

    public function getSubscribedPlan(Request $data)
    {
        $res = DB::table('subscribed_plans')->where('user_id', auth()->user()->id)->first();
        $card_html = '
        <div class="day container mb-3">
                <h1 class="mt-3" style="text-align:center;">Monday</h1>
                <div class="row mt-2 mb-4">
                <div class="container m-4">
                <div class="row" >';

                    
        $card_html .= $this->getPlanRecipe($res->id, $res->mon1, "Monday", "Breakfast");
        $card_html .= $this->getPlanRecipe($res->id, $res->mon2, "Monday", "Lunch");
        $card_html .= $this->getPlanRecipe($res->id, $res->mon3, "Monday", "Dinner");
        $card_html .='
        </div>
        </div>
        </div>
        </div>';
        $card_html .= '
        <div class="day container mb-3">
                <h1 class="mt-3" style="text-align:center;">Tuesday</h1>
                <div class="row mt-2 mb-4">
                <div class="container m-4">
                <div class="row" >';

        $card_html .= $this->getPlanRecipe($res->id, $res->tues1, "Tuesday", "Breakfast");
        $card_html .= $this->getPlanRecipe($res->id, $res->tues2, "Tuesday", "Lunch");
        $card_html .= $this->getPlanRecipe($res->id, $res->tues3, "Tuesday", "Dinner");
        $card_html .='
        </div>
        </div>
        </div>
        </div>';
        $card_html .= '
        <div class="day container mb-3">
                <h1 class="mt-3" style="text-align:center;">Wednesday</h1>
                <div class="row mt-2 mb-4">
                <div class="container m-4">
                <div class="row" >';

        $card_html .= $this->getPlanRecipe($res->id, $res->wed1, "Wednesday", "Breakfast");
        $card_html .= $this->getPlanRecipe($res->id, $res->wed2, "Wednesday", "Lunch");
        $card_html .= $this->getPlanRecipe($res->id, $res->wed3, "Wednesday", "Dinner");
        $card_html .='
        </div>
        </div>
        </div>
        </div>';
        $card_html .= '
        <div class="day container mb-3">
                <h1 class="mt-3" style="text-align:center;">Thursday</h1>
                <div class="row mt-2 mb-4">
                <div class="container m-4">
                <div class="row" >';

        $card_html .= $this->getPlanRecipe($res->id, $res->thur1, "Thursday", "Breakfast");
        $card_html .= $this->getPlanRecipe($res->id, $res->thur2, "Thursday", "Lunch");
        $card_html .= $this->getPlanRecipe($res->id, $res->thur3, "Thursday", "Dinner");
        $card_html .='
        </div>
        </div>
        </div>
        </div>';
        $card_html .= '
        <div class="day container mb-3">
                <h1 class="mt-3" style="text-align:center;">Friday</h1>
                <div class="row mt-2 mb-4">
                <div class="container m-4">
                <div class="row" >';

        $card_html .= $this->getPlanRecipe($res->id, $res->fri1, "Friday", "Breakfast");
        $card_html .= $this->getPlanRecipe($res->id, $res->fri2, "Friday", "Lunch");
        $card_html .= $this->getPlanRecipe($res->id, $res->fri3, "Friday", "Dinner");
        $card_html .='
        </div>
        </div>
        </div>
        </div>';
        $card_html .= '
        <div class="day container mb-3">
                <h1 class="mt-3" style="text-align:center;">Saturday</h1>
                <div class="row mt-2 mb-4">
                <div class="container m-4"><div class="row" >';

        $card_html .= $this->getPlanRecipe($res->id, $res->sat1, "Saturday", "Breakfast");
        $card_html .= $this->getPlanRecipe($res->id, $res->sat2, "Saturday", "Lunch");
        $card_html .= $this->getPlanRecipe($res->id, $res->sat3, "Saturday", "Dinner");
        $card_html .='
        </div>
        </div>
        </div>
        </div>';
        $card_html .= '
        <div class="day container mb-3">
                <h1 class="mt-3" style="text-align:center;">Sunday</h1>
                <div class="row mt-2 mb-4">
                <div class="container m-4">
                <div class="row" >';

        $card_html .= $this->getPlanRecipe($res->id, $res->sun1, "Sunday", "Breakfast");
        $card_html .= $this->getPlanRecipe($res->id, $res->sun2, "Sunday", "Lunch");
        $card_html .= $this->getPlanRecipe($res->id, $res->sun3, "Sunday", "Dinner");
        $card_html .='
        </div>
        </div>
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