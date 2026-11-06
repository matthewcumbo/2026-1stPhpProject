<?php 
    include "templates/header.php"; 
    include "includes/functions.php";
?>

<div class="border rounded">
    <h1>Using Functions</h1>

    <?php
        // This is how create our own custom functions
        // They are reusable chunks of code that we can use elswher in the same page
        function shout(){
            echo "<p>Let it all out!</p>";
        }

        // Calling the function by its name and brackets executes the code within that function
        shout();
        shout();
        shout();    
        shout();
        shout();

        // Ideally fuunctions are not created in pages, as that would create clutter 

        // If a function requires parameters to weork, they supplied in the brackets after its name
        sum(2,7);

        // If a function returns a value, we can capture that value in a avariable to manipulate it later
        $full_name = full_name("Matthew", "Cumbo");
        echo "<p>Full name: {$full_name}</p>";
    ?>


</div>

<?php include "templates/footer.php"; ?>