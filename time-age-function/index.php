<?php 
date_default_timezone_set('Asia/Dhaka');
function timeAgo($timestamp){
    // return $timestamp;
     $timestampNum = strtotime($timestamp);
     $currentTime = time();
     $timeDifferent = $currentTime - $timestampNum;

     //time ago unit
    $sec = $timeDifferent;
    $min = round($timeDifferent / 60);   
    $hour = round($timeDifferent / 3660);
    $day = round($hour / 24);
    $week = round($day / 7);
    $month = round($day / 30);
    $year = round($day / 12);

    if($sec <=10){
        echo "Just now";
    }else if($sec >10 && $sec <60){
        echo "{$sec} second ago";
    }else if($min <60){
        echo "{$min} minutes ago";
    }else if($hour<24){
        echo "{$hour} hours ago";
    }else if($day <7){
        echo "{$day} days ago";
    }else if($week <4){
        echo "{$week} weeks ago";
    }else if($month <12){
        echo "{$month} months ago";
    }else if($year <4){
        echo "{$year} years ago";
    }
    
}
echo timeAgo("2024-08-07,16:49:00" );

// echo date('h:i:s');