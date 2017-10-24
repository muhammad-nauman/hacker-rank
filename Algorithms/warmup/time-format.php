<?php
/**
 * Created by PhpStorm.
 * User: Muhammad Nauman
 * Date: 10/23/2017
 * Time: 5:18 PM
 *
 * Given a time in -hour AM/PM format, convert it to military (-hour) time.

Note: Midnight is  on a -hour clock, and  on a -hour clock. Noon is  on a -hour clock, and  on a -hour clock.

Input Format
A single string containing a time in -hour clock format (i.e.:  or ), where  and .

Output Format
Convert and print the given time in -hour format, where .

Sample Input

07:05:45PM
Sample Output

19:05:45
 */

function timeConversion($timeString) {
    return date('H:i:s', strtotime($timeString));
}
echo timeConversion('07:05:45PM');