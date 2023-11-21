<?php
    # Write your PHP code from here
 function lexicographicallyAtEnd($str) {
    $chars = str_split($str); // Split the string into an array of characters
    rsort($chars); // Sort the characters in reverse order (lexicographically at the end)
    return implode('', $chars); // Concatenate the characters to form a string
}

    fscanf(STDIN, "%s",$myString);
    $lexicographicallylast = lexicographicallyAtEnd($myString);
    echo $lexicographicallylast;
?>
