<?php 
    $studentList = array(
        'Student1' => array('Math' => 80, 'English' => 94, 'Science' => 70),
        'Student2' => array('Math' => 68, 'English' => 85, 'Science' => 50),
        'Student3' => array('Math' => 75, 'English' => 60, 'Science' => 78)
    );
    function getAvg($studentList){
        foreach ($studentList as $key => $value) {
            $avg = round(array_sum($value) / count($value));
            
            $grade = getGrade($avg);
            
            echo "{$key} got {$grade}".PHP_EOL;
        }
    }
    
    function getGrade($score){
        if($score >= 80){
            return "A+";
        }elseif($score >=70 && $score<80){
            return "A";
        }elseif($score >=60 && $score<70){
            return "B";
        }elseif($score >=50 && $score<60){
            return "C";
        }elseif($score >=40 && $score<50){
            return "D";
        }else{
            return "F";
        }
    }
    
    getAvg($studentList);
    

?>