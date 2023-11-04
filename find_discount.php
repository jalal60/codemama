
<?php
  /*
  Problem Statement: Write a program to create a function that takes two arguments: 
  the original price and the discount percentage as integers and returns the final price after the discount.
  Input : 50 20
  Output: Price: 40.00
  */
    // Write your PHP code from here
    function findDiscount($price,$discount){
        $result=$price-($price * ($discount / 100));
        $result=number_format((float)$result, 2, '.', '');
        echo  "Price: ".$result;
    }
    fscanf(STDIN, "%d %d\n",$a,$b);
    findDiscount($a,$b);
    
?>
