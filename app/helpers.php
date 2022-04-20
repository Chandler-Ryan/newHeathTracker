<?php
function AddTime(Array $durations) 
{
    $total_time    = 0;
    foreach($durations as $duration) {  
        sscanf($duration, "%d:%d:%d", $hours, $minutes, $seconds);
        $total_time += isset($seconds) ? $hours * 3600 + $minutes * 60 + $seconds : $hours * 60 + $minutes;
    }    
    return sprintf('%02d:%02d:%02d', ($total_time/3600),($total_time/60%60), $total_time%60);;
}