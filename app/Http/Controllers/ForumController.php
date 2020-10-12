<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\VarDumper;

class ForumController extends Controller
{
    public function getAllQuestions()
    {
        date_default_timezone_set('Asia/Karachi');
        // dd(date("Y-m-d G:i:s"));
        $ques = DB::table('questions')->get();
        $card_html ='';
        $flag =0;
        if(count($ques)>0){
            $y =0;
            foreach($ques as $que){
                $y++;
                
                $date1 = date("Y-m-d G:i:s");
                $date2 = $que->posted_at;
                if ($y==3)
                {
                    //dd($date1,$date2);
                }
                // Declare and define two dates 
                $date1 = strtotime($date1);  
                $date2 = strtotime($date2);  
                // dd($date2,$date1);
                // var_dump($date2);
                
                // Formulate the Difference between two dates 
                $diff = abs($date2 - $date1);  
                
                
                // To get the year divide the resultant date into 
                // total seconds in a year (365*60*60*24) 
                $years = floor($diff / (365*60*60*24));  
                
                
                // To get the month, subtract it with years and 
                // divide the resultant date into 
                // total seconds in a month (30*60*60*24) 
                $months = floor(($diff - $years * 365*60*60*24) 
                                            / (30*60*60*24));  
                
                
                // To get the day, subtract it with years and  
                // months and divide the resultant date into 
                // total seconds in a days (60*60*24) 
                $days = floor(($diff - $years * 365*60*60*24 -  
                            $months*30*60*60*24)/ (60*60*24)); 
                
                
                // To get the hour, subtract it with years,  
                // months & seconds and divide the resultant 
                // date into total seconds in a hours (60*60) 
                $hours = floor(($diff - $years * 365*60*60*24  
                    - $months*30*60*60*24 - $days*60*60*24) 
                                                / (60*60));  
                
                
                // To get the minutes, subtract it with years, 
                // months, seconds and hours and divide the  
                // resultant date into total seconds i.e. 60 
                $minutes = floor(($diff - $years * 365*60*60*24  
                        - $months*30*60*60*24 - $days*60*60*24  
                                        - $hours*60*60)/ 60);  
                
                
                // To get the minutes, subtract it with years, 
                // months, seconds, hours and minutes  
                $seconds = floor(($diff - $years * 365*60*60*24  
                        - $months*30*60*60*24 - $days*60*60*24 
                                - $hours*60*60 - $minutes*60));  
                
                // Print the result 
                // printf("%d years, %d months, %d days, %d hours, "
                //     . "%d minutes, %d seconds", $years, $months, 
                //             $days, $hours, $minutes, $seconds);  
                $timeArr = [$years,$months, $days, $hours, $minutes, $seconds];
                $lablesArr = ["years","months", "days", "hours", "minutes", "seconds"];
                $x = 0;
                while($timeArr[$x]==0){
                    $x++;
                }
                $timePassed = strval(intval($timeArr[$x]))." ".strval($lablesArr[$x])." ago";
                
                if($flag%2==0)
                {
                $card_html .= '<article  style="
                border-radius: 23px;
                margin-top: 49px;
                background: #e0efe0 !important;
                "
                class="question shadow question-type-normal question_author_yes post-279 type-question status-publish hentry question-category-wordpress question_tags-php question_tags-wordpress"
                id="post-279" itemscope="" itemtype="http://schema.org/Article">
                <h2 itemprop="name"><a itemprop="url"
                        href="http://localhost:8000/ForumAnswer/'.$que->id.'"
                        title="'.$que->title.'" rel="bookmark">'.$que->title.'</a></h2> <span class="question-type-main question-statistic tooltip-s"
                    data-original-title="Answers"><a
                        href="http://localhost:8000/ForumAnswer/'.$que->id.'">1
                    </a></span> <span class="question-report question-statistic tooltip-s"
                    data-original-title="Votes">
                    <span class="single-question-vote-result question_vote_result">0</span> </span>
                <div class="question-author"> <a href="http://localhost:8000/ForumAnswer/'.$que->title.'"
                        data-original-title="Emily Cooper" class="question-author-img tooltip-n"> <span></span> <img
                            alt="Emily Cooper"
                            src="https://fluentthemes.com/wp/knowledge/wp-content/uploads/2017/02/emily-image-2-83x83.jpg"
                            data-lazy-src="https://fluentthemes.com/wp/knowledge/wp-content/uploads/2017/02/emily-image-2-83x83.jpg"
                            class="lazyloaded" data-was-processed="true"><noscript><img alt="Emily Cooper"
                                src="https://fluentthemes.com/wp/knowledge/wp-content/uploads/2017/02/emily-image-2-83x83.jpg"></noscript>
                    </a></div>
                <div class="question-inner">
                    <div class="q-meta"> <span class="question-date" itemprop="datePublished"><i
                                class="icon-time"></i>'.$timePassed.'</span> <span class="question-view"><i class="icon-eye-open"></i>'.$que->views.' views</span>
                    </div>
                    <div class="clearfix"></div>
                    <div class="question-desc"> '.$que->description.'
                    </div>
                    <div class="question-tags"><a
                            href="https://fluentthemes.com/wp/knowledge/question-tag/php/">technical</a>
                        <a href="https://fluentthemes.com/wp/knowledge/question-tag/wordpress/">website bug</a>
                    </div>
                    <meta itemprop="interactionCount" content="UserAnswers: 1">
                    <div class="clearfix"></div>
                </div>
                </article>';
                }
                else
                {
                    $card_html .= '<article shadow style="
                    border-radius: 23px;
                    margin-top: 49px;
                    background: #edf1e9  !important;
                    "
                    class="question shadow question-type-normal question_author_yes post-279 type-question status-publish hentry question-category-wordpress question_tags-php question_tags-wordpress"
                    id="post-279" itemscope="" itemtype="http://schema.org/Article">
                    <h2 itemprop="name"><a itemprop="url"
                            href="http://localhost:8000/ForumAnswer/'.$que->id.'"
                            title="'.$que->title.'" rel="bookmark">'.$que->title.'</a></h2> <span class="question-type-main question-statistic tooltip-s"
                        data-original-title="Answers"><a
                            href="http://localhost:8000/ForumAnswer/'.$que->id.'">1
                        </a></span> <span class="question-report question-statistic tooltip-s"
                        data-original-title="Votes">
                        <span class="single-question-vote-result question_vote_result">0</span> </span>
                    <div class="question-author"> <a href="http://localhost:8000/ForumAnswer/'.$que->title.'"
                            data-original-title="Emily Cooper" class="question-author-img tooltip-n"> <span></span> <img
                                alt="Emily Cooper"
                                src="https://fluentthemes.com/wp/knowledge/wp-content/uploads/2017/02/emily-image-2-83x83.jpg"
                                data-lazy-src="https://fluentthemes.com/wp/knowledge/wp-content/uploads/2017/02/emily-image-2-83x83.jpg"
                                class="lazyloaded" data-was-processed="true"><noscript><img alt="Emily Cooper"
                                    src="https://fluentthemes.com/wp/knowledge/wp-content/uploads/2017/02/emily-image-2-83x83.jpg"></noscript>
                        </a></div>
                    <div class="question-inner">
                        <div class="q-meta"> <span class="question-date" itemprop="datePublished"><i
                        class="icon-time"></i>'.$timePassed.'</span> <span class="question-view"><i class="icon-eye-open"></i>'.$que->views.' views</span>
                        </div>
                        <div class="clearfix"></div>
                        <div class="question-desc"> '.$que->description.'
                        </div>
                        <div class="question-tags"><a
                                href="https://fluentthemes.com/wp/knowledge/question-tag/php/">technical</a>
                            <a href="https://fluentthemes.com/wp/knowledge/question-tag/wordpress/">website bug</a>
                        </div>
                        <meta itemprop="interactionCount" content="UserAnswers: 1">
                        <div class="clearfix"></div>
                        </div>
                    </article>';
                }
                $flag++;
            }
        }
        echo json_encode( $card_html);
    }
    public function getAnswer(Request $data)
    {
        date_default_timezone_set('Asia/Karachi');
        $ans = DB::table('answers')->find($data->id);
        
        $ques = DB::table('questions')->find($data->id);
        $views = $ques->views;
        $views ++;
        DB::table('questions')
        ->updateOrInsert(
            ['id' => $data->id],
            ['user_id' => $ques->user_id, 'description' => $ques->description, 'views' => $views, 'posted_at' => $ques->posted_at ]
        );
        
        $ques = DB::table('questions')->find($data->id);
        
        $user = DB::table('users')->find($ques->user_id);
        $date1 = date("Y-m-d G:i:s");
        $date2 = $ques->posted_at;
        // Declare and define two dates 
        $date1 = strtotime($date1);  
        $date2 = strtotime($date2);  
        // dd($date2,$date1);
        // var_dump($date2);
        
        // Formulate the Difference between two dates 
        $diff = abs($date2 - $date1);  
        
        
        // To get the year divide the resultant date into 
        // total seconds in a year (365*60*60*24) 
        $years = floor($diff / (365*60*60*24));  
        
        
        // To get the month, subtract it with years and 
        // divide the resultant date into 
        // total seconds in a month (30*60*60*24) 
        $months = floor(($diff - $years * 365*60*60*24) 
                                    / (30*60*60*24));  
        
        
        // To get the day, subtract it with years and  
        // months and divide the resultant date into 
        // total seconds in a days (60*60*24) 
        $days = floor(($diff - $years * 365*60*60*24 -  
                    $months*30*60*60*24)/ (60*60*24)); 
        
        
        // To get the hour, subtract it with years,  
        // months & seconds and divide the resultant 
        // date into total seconds in a hours (60*60) 
        $hours = floor(($diff - $years * 365*60*60*24  
            - $months*30*60*60*24 - $days*60*60*24) 
                                        / (60*60));  
        
        
        // To get the minutes, subtract it with years, 
        // months, seconds and hours and divide the  
        // resultant date into total seconds i.e. 60 
        $minutes = floor(($diff - $years * 365*60*60*24  
                - $months*30*60*60*24 - $days*60*60*24  
                                - $hours*60*60)/ 60);  
        
        
        // To get the minutes, subtract it with years, 
        // months, seconds, hours and minutes  
        $seconds = floor(($diff - $years * 365*60*60*24  
                - $months*30*60*60*24 - $days*60*60*24 
                        - $hours*60*60 - $minutes*60));  
        
        // Print the result 
        // printf("%d years, %d months, %d days, %d hours, "
        //     . "%d minutes, %d seconds", $years, $months, 
        //             $days, $hours, $minutes, $seconds);  
        $timeArr = [$years,$months, $days, $hours, $minutes, $seconds];
        $lablesArr = ["years","months", "days", "hours", "minutes", "seconds"];
        $x = 0;
        while($timeArr[$x]==0){
            $x++;
        }
        $timePassed = strval(intval($timeArr[$x]))." ".strval($lablesArr[$x])." ago";
        $card_html ='';
        $card_html = '<div id="wrap" class=" wrap-nicescroll">
                    <div class="container main-content page-right-sidebar">
                        <div class="row">
                                <div class="col-lg-12">
                                    <article style="
            /* border-radius: 23px; */
            margin-top: 49px;
            /* background: #e0efe0 !important; */
            " class="question question-type-normal question_author_yes post-279 type-question status-publish hentry question-category-wordpress question_tags-php question_tags-wordpress"
                                        id="post-279" itemscope="" itemtype="http://schema.org/Article">
                                        <h2 itemprop="name">'.$ques->title.'</h2> 
                                            <span class="question-report question-statistic tooltip-s"
                                            data-original-title="Votes">
                                            <span class="single-question-vote-result question_vote_result">'.$ques->votes.'</span>
                                        </span>
                                        <div class="question-author"> <a
                                                data-original-title="'.$user->name.'"
                                                class="question-author-img tooltip-n"> <span></span> <img
                                                    alt="'.$user->name.'"
                                                    src="https://fluentthemes.com/wp/knowledge/wp-content/uploads/2017/02/emily-image-2-83x83.jpg"
                                                    data-lazy-src="https://fluentthemes.com/wp/knowledge/wp-content/uploads/2017/02/emily-image-2-83x83.jpg"
                                                    class="lazyloaded" data-was-processed="true"><noscript><img
                                                        alt="'.$user->name.'"
                                                        src="https://fluentthemes.com/wp/knowledge/wp-content/uploads/2017/02/emily-image-2-83x83.jpg"></noscript>
                                            </a></div>
                                        <div class="question-inner">
                                            <div class="q-meta"> <span class="question-date"
                                                    itemprop="datePublished"><i class="icon-time"></i>'.$timePassed.'</span> <span class="question-view"><i
                                                        class="icon-eye-open"></i>'.$ques->views.' views</span>
                                            </div>
                                            <div class="clearfix"></div>
                                            <p class="question-desc"> '.$ques->description.'
                                            </p>
                                            <div class="question-tags"><a
                                                    href="https://fluentthemes.com/wp/knowledge/question-tag/php/">technical</a>
                                                <a
                                                    href="https://fluentthemes.com/wp/knowledge/question-tag/wordpress/">website
                                                    bug</a>
                                            </div>
                                            <meta itemprop="interactionCount" content="UserAnswers: 1">
                                            <div class="clearfix"></div>
                                        </div>
                                    </article>
                                    <div id="commentlist" class="page-content ">
                                        <div class="thread-reply">
                                            <h2>Reply</h2>
                                        </div>';
                                        if (!$ans)
                                        {

                                            $card_html.='<div class="alert alert-danger" role="alert">
                                            No Reply yet!
                                            </div>';
                                        }
                                        else{
                                            $card_html.='<ol class="commentlist clearfix">
                                            <li class="comment byuser comment-author-umar even thread-even depth-1 comment " id="li-comment-10">
                                                <div id="comment-10" class="shadow comment-body clearfix" rel="post-279" style="background: #b8dcb6;">
                                                    <div class="avatar-img"> <img alt="'.$user->name.'" src="https://fluentthemes.com/wp/knowledge/wp-content/uploads/2017/02/umar-image-1-65x65.jpg" data-lazy-src="https://fluentthemes.com/wp/knowledge/wp-content/uploads/2017/02/umar-image-1-65x65.jpg" class="lazyloaded" data-was-processed="true"><noscript><img alt="'.$user->name.'"
                                                                src="https://fluentthemes.com/wp/knowledge/wp-content/uploads/2017/02/umar-image-1-65x65.jpg"></noscript>
                                                    </div>
                                                    <div class="comment-text">
                                                        <div class="author clearfix">
                                                            <div class="comment-author">
                                                                <div class="fnone">'.$user->name.' </div>
                                                            </div>
                                                            <div class="comment-meta">
                                                                <div class="date"><i class="icon-time"></i>'.$timePassed.'</div>
                                                            </div>
                                                            <div class="comment-reply"> <a class="question_r_l comment_l report_c" href="#"><i class="icon-flag"></i>Report</a>
                                                            </div>
                                                        </div>
                                                        <div class="text">
                                                            
                                                            <div class="timeline-content">
                                                                <p>'.$ans->description.'</p>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="loader_3"></div>
                                                        <div class="text">
                                                            <div class="comment-vote">
                                                                <ul class="single-question-vote">
                                                                    <li class="loader_3"></li>
                                                                    <li><a href="#" class="single-question-vote-up comment_vote_up vote_not_user" title="Like"><i class="icon-thumbs-up"></i></a></li>
                                                                    <li><a href="#" class="single-question-vote-down comment_vote_down vote_not_user" title="Dislike"><i class="icon-thumbs-down"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="no_vote_more"></div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>';
                                        }

                                    $card_html.='</div>
                                    <div class="pagination comments-pagination"></div>
                                    <div class="post-next-prev clearfix">
                                        <p class="prev-post"> <a
                                                href="https://fluentthemes.com/wp/knowledge/questions/change-navbar-color-in-twitter-bootstrap-3/"
                                                rel="prev"><i class="icon-angle-left"></i>&nbsp;Previous
                                                question</a></p>
                                        <p class="next-post"></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                    </div>
                </div>';
        echo json_encode( $card_html);
    }
}