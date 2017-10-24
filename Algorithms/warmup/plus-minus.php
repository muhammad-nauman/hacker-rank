<?php
/**
 * Created by PhpStorm.
 * User: Muhammad Nauman
 * Date: 10/23/2017
 * Time: 1:13 AM
 *
 *Given an array of integers, calculate which fraction of its elements are positive, which fraction of its elements are negative, and which fraction of its elements are zeroes, respectively. Print the decimal value of each fraction on a new line.

Note: This challenge introduces precision problems. The test cases are scaled to six decimal places, though answers with absolute error of up to  are acceptable.

Input Format

The first line contains an integer, , denoting the size of the array.
The second line contains  space-separated integers describing an array of numbers .

Output Format

You must print the following  lines:

A decimal representing of the fraction of positive numbers in the array compared to its size.
A decimal representing of the fraction of negative numbers in the array compared to its size.
A decimal representing of the fraction of zeroes in the array compared to its size.
Sample Input

6
-4 3 -9 0 4 1
Sample Output

0.500000
0.333333
0.166667
 */

function plusMinus($number, $array)
{
    $positive = $negative = $zeros = 0;
    for($index = 0; $index < $number; $index++)
    {
        if($array[$index] > 0)
        {
            $positive++;
        }
        elseif($array[$index] < 0)
        {
            $negative++;
        }
        else{
            $zeros++;
        }
    }
    $positive = round($positive/$number, 6);
    $negative = round($negative/$number, 6);
    $zeros = round($zeros/$number, 6);
    return $positive. "\n".$negative. "\n".$zeros;
}

echo plusMinus(6, [-4, 3, -9, 0, 4, 1]);
