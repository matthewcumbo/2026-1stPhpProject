<?php include "templates/header.php"; ?>

<h1>Arrays</h1>
<h2>Basics</h2>

<?php
$numbers = [0,5,10,67,420];
print_r($numbers);

echo "<br/>";

$numbers2 = array(1,2,3,4);
print_r($numbers2);

echo "<br/>";

$first = $numbers[0];
echo $first;

echo "<br/>";

$last = $numbers[4];
echo $last;

echo "<br/>";

$count = count($numbers);
echo $count;

echo "<br/>";

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

$next = next($numbers);
echo "<p>Next: " . $next . "</p>";
$next = next($numbers);
echo "<p>Next: " . $next . "</p>";

$previous = prev($numbers);
echo "<p>Previous: " . $previous . "</p>";
$previous = prev($numbers);
echo "<p>Previous: " . $previous . "</p>";

$last = end($numbers);
echo "<p>Last: " . $last . "</p>";

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