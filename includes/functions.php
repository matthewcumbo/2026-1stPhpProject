<?php 
    // Functions can require variables to function. 
    // These are called parameters, and are setup in the brackets of the function
    // They will only be usable within the scope of the function, i.e. between the curly brackets
    function sum($num1, $num2){
        $sum = $num1+$num2;
        echo "<p>The sum is {$sum}.</p>";
    }

    // When a function needs to provide a result to the code where it is being called, we use the return keyword
    function full_name($first_name, $last_name){
        return "{$first_name} {$last_name}";
    }

?>