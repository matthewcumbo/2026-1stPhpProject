<?php 
    include "templates/header.php"; 
    include "includes/functions.php";
?>

<div class="border rounded">
    <h1>Using Functions</h1>

    <?php
        function shout(){
            echo "<p>Let it all out!</p>";
        }

        shout();
        shout();
        shout();    
        shout();
        shout();

        sum(2,7);
        $full_name = full_name("Matthew", "Cumbo");
        echo "<p>Full name: {$full_name}</p>";

    ?>


</div>

<?php include "templates/footer.php"; ?>