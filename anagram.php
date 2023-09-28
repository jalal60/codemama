<?php
/*
You are given two strings A and B. Your task is check whether the string B is anagram of string A or not.
An anagram of a string is another string that contains the same characters, only the order of characters can be different. 
For example, “abcd” and “dabc” are an anagram of each other whereas "abcd" and "aabc" are not.
The input consists of two strings A and B in two lines containing only lowercase English letters.
strings contains only lowercase (a−z) English letters.
Input:
abcd
dabc
Output:
YES
*/
function is_anagram($string_1, $string_2)
{
    if (count_chars($string_1, 1) == count_chars($string_2, 1))
        return 'YES';
    else
        return 'NO';
}
fscanf(STDIN, "%s", $a);
fscanf(STDIN, "%s", $b);
echo is_anagram($a, $b);
