<?php 
    
    function converter($text){
        $lowercase = strtolower($text);
       return $replace_text = str_replace("brown","red",$lowercase);
    }
    $text = "The quick brown fox jumps over the lazy dog.";
    echo converter($text);
   
?>