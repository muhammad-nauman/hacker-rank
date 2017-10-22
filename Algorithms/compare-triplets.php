<?php
/*
 * Alice and Bob each created one problem for HackerRank. A reviewer rates the two challenges, awarding points on a scale from  to  for three categories: problem clarity, originality, and difficulty.

We define the rating for Alice's challenge to be the triplet , and the rating for Bob's challenge to be the triplet .

Your task is to find their comparison points by comparing  with ,  with , and  with .

If , then Alice is awarded  point.
If , then Bob is awarded  point.
If , then neither person receives a point.
Comparison points is the total points a person earned.

Given  and , can you compare the two challenges and print their respective comparison points?

Input Format

The first line contains  space-separated integers, , , and , describing the respective values in triplet .
The second line contains  space-separated integers, , , and , describing the respective values in triplet .

Constraints

Output Format

Print two space-separated integers denoting the respective comparison points earned by Alice and Bob.

Sample Input

5 6 7
3 6 10
Sample Output

1 1

*** Tweaking the input formats as array. so, two arrays will be passed as parameter
 */

function solve($aliceArray, $bobArray) : array {
    $points = [0 , 0];
    $countArrays = count($bobArray);
    for($index = 0; $index < $countArrays; $index++)
    {
        if($aliceArray[$index] < $bobArray)
        {
           $points[1] += 1;
        }
        if($aliceArray[$index] > $bobArray)
        {
            $points[0] += 1;
        }
    }
    return $points;
}

echo implode(" ", solve([6, 8, 12] , [7, 9, 15]))."\n";