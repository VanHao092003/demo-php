<?php
    $courses = array();
    $courses [] = "hao";
    $courses[] = "new";

    echo"<pre>";
    print_r($courses);
    echo"<pre>";

    foreach($courses as $key => $value){
        echo $value;
    }
?>