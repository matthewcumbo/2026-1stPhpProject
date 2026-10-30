<?php include "templates/header.php"; ?>

<h1>String Functions</h1>

<?php 
    $fullName = "Matthew Cumbo";

    $fullNameLength = strlen($fullName);
    echo "<p>The name: Matthew Cumbo is " . $fullNameLength . " characters long.</p>";


    $firstName = substr($fullName, 0, 7);
    echo "<p>First Name: ".$firstName."</p>";

    $lastName = substr($fullName, 8);
    echo "<p>Last Name: ".$lastName."</p>";

    

?>


<?php include "templates/footer.php"; ?>