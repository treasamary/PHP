<?php
$number = 324; // enter any number of your choice here
if ($number > 0) // condition for positive numbers
{
    echo $number . " is a positive number";
} else if ($number < 0) // condition for negative number
{
    echo $number . " is a negative number ";
} else if ($number == 0) // condition for zero
{
    echo "You have entered zero";
} else {
    echo " please enter a numeric value";
}
