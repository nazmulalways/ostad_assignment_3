<?php 
    $grades = [85, 92, 78, 88, 95];
    function getMaxValue($grades){
         arsort($grades);
        return $grades;
    }
    
    $result = getMaxValue($grades);
    print_r($result);
    
 
?>