<?php
    $mhs=array( 

        array("ardika","2201010377","denpasar"),
        array("wahyu","2201010355","magelang"),
        array("samsul","2201010323","mataram"),
        array("zizi","2201010324","manado"),
    );
    header("content-type: application/json");
    echo json_encode($mhs);