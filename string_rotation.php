<?php
   /*
   Write a program to create a function that checks if one string is a rotation of another. 
   For example, "waterbottle" is a rotation of "erbottlewat" because you can rotate it to get the original string.
   Input: waterbottle erbottlewat
   Output: True
   */
     fscanf(STDIN, "%s %s", $str1,$str2);
    echo isRotationalString($str1,$str2)?'True':'False';

function isRotationalString($str1,$str2){
    $len = strlen($str1); 
    if($str1 === $str2){
        return true;
    } else {
        if($len == strlen($str2)) {
    
            $stringMatchedArr1 = $stringMatchedArr2 = [];
            for($i=0; $i<$len; $i++) {
                $substr = substr($str1,$i );
                $pos = strpos($str2, $substr);
                if($pos !== false) {
                    $stringMatchedArr1[] = $substr;
                }
            }
        
            for($j=1; $j <= $len; $j++) {
                $substr = substr($str1, 0, $j );
                $pos = strpos($str2, $substr);
                if($pos !== false) {
                    $stringMatchedArr2[] = $substr;
                }
            }
        
            foreach($stringMatchedArr2 as  $string1) {
                foreach($stringMatchedArr1 as $string2) {
                    if($string1.$string2 == $str1)
                         return true;
                }
            }
       
        }
    }
}
    
?>
