<?php 
       function generatePassword($length){
        $password = "";
        $lowercase = "abcdefghijklmnopqrstuvwxyz";
        $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $numbers = "0123456789";
        $special_characters = "(!@#$%^&*()_+)";
        $string =  str_shuffle($lowercase.$uppercase.$numbers.$special_characters);
        for($i=1; $i<=$length; $i++){
            $password .=  $string[$i];
        }
        return $password;
    }
    
    echo generatePassword(12);
?>