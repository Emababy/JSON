<?php 

    $json = '["HTML" , "CSS]';
    var_dump($json);

    $phpArray = json_decode($json, true); // convert json to array 
    var_dump($phpArray);


    $Array = array("HTML" , "CSS");
    var_dump($Array);

    $JsonObject = json_encode($Array); // covert array to json 
    var_dump($JsonObject);
?>