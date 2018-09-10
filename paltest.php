<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function pal($str) {


    $conArr = array();

    foreach (str_split(strtolower($str)) as $k) {

        if (key_exists($k, $conArr)) {
            unset($conArr[$k]);
        } else {
            $conArr[$k] = NULL;
        }
    }

    //echo count($conArr).'<br>';

    if (count($conArr) > 1) {
        return FALSE;
    }

    return TRUE;
}


//place this before any script you want to calculate time
$time_start = microtime(true); 
echo pal("aasseerrttqqwweerrttaassddffggzzxxccvvbbaasseerrttqqwweerrttaassddffggzzxxccvvbbaasseerrttqqwweerrttaassddffggzzxxccvvbbaasseerrttqqwweerrttaassddffggzzxxccvvbbaasseerrttqqwweerrttaassddffggzzxxccvvbbaasseerrttqqwweerrttaassddffggzzxxccvvbb") ? 'Yes it is some weird palindrome!!' : 'No I am knowing it is not a palindrome!!!';
$time_end = microtime(true);

//dividing with 60 will give the execution time in minutes otherwise seconds
$execution_time = ($time_end - $time_start)/60;

//execution time of the script
echo '<b>Total Execution Time:</b> '.$execution_time.' Mins';
// if you get weird results, use number_format((float) $execution_time, 10)







function pal2($str) {

    $arr = count_chars($str, 1);

    $co = 0;

    foreach ($arr as $v) {
        
        $co += ($v % 2) ? 1 : 0;

        if ($co > 1) {
            return FALSE;
        }
    }
     return TRUE;   
}

echo '<br><br><br>';
//place this before any script you want to calculate time
$time_start = microtime(true); 
echo pal2("aasseerrttqqwweerrttaassddffggzzxxccvvbbaasseerrttqqwweerrttaassddffggzzxxccvvbbaasseerrttqqwweerrttaassddffggzzxxccvvbbaasseerrttqqwweerrttaassddffggzzxxccvvbbaasseerrttqqwweerrttaassddffggzzxxccvvbbaasseerrttqqwweerrttaassddffggzzxxccvvbb") ? 'Yes it is some weird palindrome!!' : 'No I am knowing it is not a palindrome!!!';
$time_end = microtime(true);

//dividing with 60 will give the execution time in minutes otherwise seconds
$execution_time = ($time_end - $time_start)/60;

//execution time of the script
echo '<b>Total Execution Time:</b> '.$execution_time.' Mins';
// if you get weird results, use number_format((float) $execution_time, 10)