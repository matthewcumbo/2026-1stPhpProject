<?php include "templates/header.php"; ?>

<div class="border rounded mb-5">
<h1>String Functions</h1>

<?php 
    $fullName = "Matthew Cumbo";

    // The strlen (string length) function simply counts how many characters are in a string and returns that value into a variable
    $fullNameLength = strlen($fullName);
    echo "<p>The name: Matthew Cumbo is " . $fullNameLength . " characters long.</p>";

    // The substr (substring) function extracts part of a string into a new one
    // In this case, it starts from the first letter, and extracts 7 letters
    $firstName = substr($fullName, 0, 7);
    echo "<p>First Name: ".$firstName."</p>";

    $lastName = substr($fullName, 8);
    echo "<p>Last Name: ".$lastName."</p>";
?>
</div>


<div class="border rounded">
    <h1>Advanced String Functions</h1>

    <?php 
        $shoppingList = "bread,milk,apples";

        // The explode function splits a string into an array, using part of the string as the separator
        $shoppingListArray = explode(",",$shoppingList);
        print_r($shoppingListArray);

        // The implode function creates a string based on an array, adding a separator between each element in the array
        $listOutput = implode(", ",$shoppingListArray);
        // echo "<p>".$listOutput."</p>";
        echo "<p>{$listOutput}</p>";
    ?>
</div>


<?php include "templates/footer.php"; ?>