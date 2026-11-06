<?php include "templates/header.php"; ?>

<h1>Arrays</h1>
<h2>Basics</h2>

<?php
// Arrays are created using sqaure brackets, like other programming languages
// Keep in mind that the first element will always be position 0
$numbers = [2,5,10,67,420];
// The print_r function simply outputs the array, including its structure and contents
// This is not to be used in a finished page, but helpful in debugging
print_r($numbers);

echo "<br/>";

// Arrays can be created in the following way as well. The result is the same
$numbers2 = array(1,2,3,4);
print_r($numbers2);

echo "<br/>";

// Elements in an array can be accessed using its position within the array (starting at 0), using square brackets
$first = $numbers[0];
echo $first;

echo "<br/>";

$last = $numbers[4];
echo $last;

echo "<br/>";

// The count function counts the number of elements in an array
$count = count($numbers);
echo $count;

echo "<br/>";

// We can add a new element easily by setting a value to a position that does not exist
$numbers[5] = 100;
print_r($numbers);

echo "<br/>";

$numbers[5] = 99;
print_r($numbers);

echo "<br/>";

$count = count($numbers);
$numbers[$count] = 1111;
print_r($numbers);


?>

<h2>Advanced Array Functions</h2>

<?php

// Arrays have an internal pointer which 'points' at a particular position within the array for access
// This pointer starts at position 0 by default

// The next function moves the pointer forward by 1 position, then gets the value of the position currently pointed at by the array pointer
$next = next($numbers);
echo "<p>Next: " . $next . "</p>";
$next = next($numbers);
echo "<p>Next: " . $next . "</p>";

// The prev (previous) function does the same, but moves the pointer back 1 position
$previous = prev($numbers);
echo "<p>Previous: " . $previous . "</p>";
$previous = prev($numbers);
echo "<p>Previous: " . $previous . "</p>";

// The end function moves the pointer to the last position and gets the value there
$last = end($numbers);
echo "<p>Last: " . $last . "</p>";

// The reset function moves the pointer to the first position and gets the value there
$first = reset($numbers);
echo "<p>First: " . $first . "</p>";

/*
    Home Research (Stacking and Queueing):
    --------------------------------------
    - array_push()
    - array_pop()
    - array_unshift()
    - array_shift()
    - array_merge()
    - sort()
    - rsort()
    - array_slice()
    - array_splice()
*/



?>

<?php include "templates/footer.php"; ?>