<?php
/**
 * Created by PhpStorm.
 * User: Muhammad Nauman
 * Date: 10/23/2017
 * Time: 4:03 PM
 *
 *Colleen is turning  years old! Therefore, she has  candles of various heights on her cake, and candle  has height . Because the taller candles tower over the shorter ones, Colleen can only blow out the tallest candles.

Given the  for each individual candle, find and print the number of candles she can successfully blow out.

Input Format

The first line contains a single integer, , denoting the number of candles on the cake.
The second line contains  space-separated integers, where each integer  describes the height of candle .

Constraints
~ 1 <= n <= 10^5
~ 1 <= height <= 10^7
Output Format

Print the number of candles Colleen blows out on a new line.

Sample Input 0

4
3 2 1 3
Sample Output 0

2
 */

function birthdayCakeCandles($n, $ar) {
    $count = $max = 0;
    rsort($ar);
    for($index = 0; $index < $n; $index++)
    {
        if($max != 0 && $max == $ar[$index])
        {
            $count++;
        }
        if($ar[$index] > $max)
        {
            $max = $ar[$index];
            $count++;
        }
    }
    return $count;
}
echo birthdayCakeCandles(5, [3, 4, 5, 1, 5]);