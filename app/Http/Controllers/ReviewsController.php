<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function AddReview(Request $data)
    {
        DB::table('reviews')->insert(
            ['user_id' =>	$data->user_id,
            "recipe_id" =>	$data->recipe_id,
            "plan_id"=> $data->plan_id,
            "day" => $data->day,
            "time" =>	$data->time,
            "ratting" => $data->ratting]
        );
        return "data inserted Successfully!";
    }
}
