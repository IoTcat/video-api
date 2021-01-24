<?php

include './functions.php';

header('Access-Control-Allow-Origin:*');



//header('content-type: video/mp4');

$path = $_REQUEST['path'];


if($path){

    returnVideo($path);
}


yimian__log("log_api", array("api" => "video", "timestamp" => date('Y-m-d H:i:s', time()), "ip" => ip2long(getIp()), "_from" => get_from(), "content" => $path)); 




function returnVideo($path){
    if($path == '404.pm4'){
        header("Location: https://cdn.yimian.xyz/video/404.mp4");
        return;
    }
    $url = getVideo($path);
    header("Location: $url");
}
