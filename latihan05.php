<?php
//model 1
    //$age=array("peter"=>35, "ben"=>37, "joe"=>43);
//model 2
$age["mangtri"]="30";
$age["diantari"]="35";
$age["mahima"]="40";
$age["epik"]="20";
$age["lisa"]="50";



    header("content-type: application/json");
    echo json_encode($age);
