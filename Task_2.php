<?php 
    $numbers = [1,2,3,4,5,6,7,8,9,10];
    function removeEven($numbers){
        if($numbers % 2==1){
            return $numbers;
        }
    }
    
    $result = array_filter($numbers,'removeEven');
    print_r($result);
 
?>