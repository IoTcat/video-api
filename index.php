<?php

include './functions.php';

header('Access-Control-Allow-Origin:*');



//header('content-type: video/mp4');

$path = $_REQUEST['path'];
$isProxy = $_REQUEST['isProxy'];

if($path){

    returnVideo($path);
}


yimian__log("log_api", array("api" => "video", "timestamp" => date('Y-m-d H:i:s', time()), "ip" => ip2long(getIp()), "_from" => get_from(), "content" => $path)); 




function returnVideo($path){
    if($isProxy == "true"){
        header("Location: https://proxy.yimian.xyz/get/?url=".base64_encode($url)."");
    }
    $url = getVideo($path);
    header("Location: $url");
}
