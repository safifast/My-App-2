<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class WeekPlanController extends Controller
{
    public function subcribePlan(Request $data)
    {
        $plan = DB::table('week__plans')->find($data->id);
        DB::table('subscribed_plans')->updateOrInsert(
            ['user_id' => $data->user_id],
            ['user_id' =>	$data->user_id,
            'plan_id' =>	$plan->id,
            "name" =>	$plan->name,
            "mon1"=> $plan->mon1,
            "mon2"=> $plan->mon2,
            "mon3"=> $plan->mon3,
            "tues1"=> $plan->tues1,
            "tues2"=> $plan->tues2,
            "tues3"=> $plan->tues3,
            
            "wed1"=> $plan->wed1,
            "wed2"=> $plan->wed2,
            "wed3"=> $plan->wed3,
            
            "thur1"=> $plan->thur1,
            "thur2"=> $plan->thur2,
            "thur3"=> $plan->thur3,
            
            "fri1"=> $plan->fri1,
            "fri2"=> $plan->fri2,
            "fri3"=> $plan->fri3,
            
            "sat1"=> $plan->sat1,
            "sat2"=> $plan->sat2,
            "sat3"=> $plan->sat3,
            
            "sun1"=> $plan->sun1,
            "sun2"=> $plan->sun2,
            "sun3"=> $plan->sun3,
            ]
        );
        return "data inserted Successfully!";
    }

    public function getCalories($id)
    {
        $res = DB::table('recipes')->find($id);
        return [floatval($res->proteins),floatval($res->carbs),floatval($res->fats)];
    }
    public function getPlanRecipe($plain_id, $id, $day, $time)
    {
        $res = DB::table('recipes')->find($id);
        
        $card_html ='';
            $card_html = '
            <div class="col-lg-4 col-md-6 mx-auto wow bounceIn">
                <div class="gallery-single fix mx-auto wow bounceIn">
                    <img mx-auto wow bounceIn src="http://localhost:8000/storage/img/recipe1.png" class="img-fluid" alt="Image">
                    <div style=" position: absolute;    float: left;    padding: 21px;    width: 100%;">
                        <h5 style="color: white;">'. $time .'</h5>
                    </div>
                    <div class="row why-text">
                        <div class="col-lg-6  pl-5">
                            <h4 style="color: #0a561e;"><strong> '. $res->title .'</strong></h4>
                            <p style="color: #0a561e;">' . $res->description .'.</p>
                            <button style="margin-top:70px;" data-toggle="modal" data-target="#exampleModal"
                                onclick="exploreRecipe(1)" class="btn btn-outline-success">View Recipe</button>
                        </div>
                        <div class="col-lg-6" style="
                        text-align: -webkit-center;
                        margin-top: 8px;
                    ">
                        <div><h6 style="color: #0a561e; text-align:center; " >Calories Chart</h6></div>
                        <div id="chart_'.$day.'_'.$time. '" class=""></div>
                        
                        </div>
                    </div>
                </div>
            </div>';            
        return $card_html;
    }
    public function getPlan(Request $data)
    {
        $res = DB::table('week__plans')->find($data->id);

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
    public function getAllPlans()
    {
        $res = DB::table('week__plans')->get();
        $plan = DB::table('subscribed_plans')->where('user_id', auth()->user()->id)->get();
        $plan = $plan[0];
        $card_html = '';
        foreach($res as $r){
            
            $card_html .= '<div class="mealplan-display">
                <h3>'.$r->name.'
                </h3>
                <div class="mealplan-excerpt kd-text-section kd-text-section-left">
                    <p>'.$r->description.'.</p>
                    <p> <a href="http://localhost:8000/explore_plan/'.$r->id.'"
                            title="'.$r->name.'" class="more-link">Full meal plan →</a></p>
                </div><a href="http://localhost:8000/explore_plan/'.$r->id.'"
                    title="'.$r->name.'">
                    <ul class="preview-list grid columns-week format-image mealplan carousel-dual-orientation orientation-horizontal"
                        data-cols="week">';
                        for ($x = 0; $x < 7; $x++) {
                            $card_html .= '<li
                            class="preview-item orientation-vertical format-image kd_recipe show-header-always light lighter ">
                            <div class="inner"><span><img width="150" height="225"
                                        class="main-image size-sidebar-size-half-vt wp-image-1295724 lazy loaded lazy-fade-in"
                                        sizes="(max-width: 319px) 33vw, (min-width: 1200px) 300px, 20vw"
                                        alt="" title=""
                                        src="';

                                        switch ($x) {
                                        case 0:
                                            $card_html .= $r->mon_pic;
                                            $card_html .='"
                                        data-was-processed="true"><span class="header"
                                        title=""><span class="preview-item-tag">Mon</span></span></span></div></li>';
                                            break;
                                        case 1:
                                            $card_html .= $r->tues_pic;
                                            $card_html .='"
                                        data-was-processed="true"><span class="header"
                                        title=""><span class="preview-item-tag">Tue</span></span></span></div></li>';
                                            break;
                                        case 2:
                                            $card_html .= $r->wed_pic;
                                            $card_html .='"
                                        data-was-processed="true"><span class="header"
                                        title=""><span class="preview-item-tag">Wed</span></span></span></div></li>';
                                            break;
                                        case 3:
                                            $card_html .= $r->thur_pic;
                                            $card_html .='"
                                        data-was-processed="true"><span class="header"
                                        title=""><span class="preview-item-tag">Thu</span></span></span></div></li>';
                                        break;
                                        case 4:
                                            $card_html .= $r->fri_pic;
                                            $card_html .='"
                                        data-was-processed="true"><span class="header"
                                        title=""><span class="preview-item-tag">Fri</span></span></span></div></li>';
                                        break;
                                        case 5:
                                            $card_html .= $r->sat_pic;
                                            $card_html .='"
                                        data-was-processed="true"><span class="header"
                                        title=""><span class="preview-item-tag">Sat</span></span></span></div></li>';
                                        break;
                                        case 6:
                                            $card_html .= $r->sun_pic;
                                            $card_html .='"
                                        data-was-processed="true"><span class="header"
                                        title=""><span class="preview-item-tag">Sun</span></span></span></div></li>';
                                        break;
                                        }
                                        
                        }
                    $card_html .='</ul>
                </a>
            </div>';
            if ($plan->plan_id == $r->id){
                $card_html .='<button onclick="subcribePlan('.$r->id.')" class="btn btn-outline-success">Subcribe</button>
            <div class="hr"></div>';
            }
            else{
                $card_html .='<button onclick="subcribePlan('.$r->id.')" disabled class="btn btn-success">Subcribed</button>
            <div class="hr"></div>';
            }
            
        }
        return $card_html;

    }
    
}