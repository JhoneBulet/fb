<?php

$jsonObject = [
    "ftg" => true,
    "status" => true,
    "su" => "http://playervip.me:80",
    "sc" => "",
    "ndd" => ""
];

echo '{"ftg":true,"status":true,"su":"http://170.39.193.122:8080,http://neohellastv.com:80,http://kytv.xyz,http://playervip.me:80","sc":"","ndd":""}';
header("Location: http://localhost");
exit();
?>
