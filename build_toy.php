<?php
    // Write your PHP code from here
/*
Problem Statement
Suppose, you work in a toy car workshop, and your job is to build toy cars from a collection of parts. 
Each toy car needs 4 wheels, 1 car body, and 2 figures of people to be placed inside. 
Write a program which will calculate how many complete toy cars can be made, given the total number of wheels, car bodies and figures available.
Input: 43 15 87
Output: 10

*/
    function buildToyCar($wheels,$body,$figures){
        if($wheels<4){
            echo 0;
        }
        else
        {
            $wheelCal=intval($wheels/4);
            $bodyCal=intval($body);
            $figureCal=intval($figures/2);

            if($figureCal<$wheelCal && $figureCal<$bodyCal)
            {
                echo $figureCal;
            }
            else if($wheelCal<=$bodyCal && $wheelCal<=$figureCal){
                echo $wheelCal;
            }
        }
       
        
    }

     fscanf(STDIN, "%d %d %d\n",$a,$b,$c);
    buildToyCar($a,$b,$c);
?>
