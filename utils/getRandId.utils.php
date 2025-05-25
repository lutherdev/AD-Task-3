<?php
function getRandId($min, $max){
    $randId = rand($min, $max);
    echo "Your random number: ". $randId;
    return $randId;
}

?>