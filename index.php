<?php

include './functions.php';

header('Access-Control-Allow-Origin:*');



//header('content-type: video/mp4');

$url = $_REQUEST['url'];
$isProxy = $_REQUEST['isProxy'];

if($url){

    returnVideo($url);
}


yimian__log("log_api", array("api" => "video", "timestamp" => date('Y-m-d H:i:s', time()), "ip" => ip2long(getIp()), "_from" => get_from(), "content" => $url)); 




function returnVideo($url){
    if(true || $isProxy == "true"){
        header("Location: https://proxy.yimian.xyz/get/?url=".base64_encode($url)."");
        return;
    }
    $url = getVideo($url);
    header("Location: $url");
}
