<?php include "templates/header.php"; ?>

<div class="border rounded mb-5">
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
</div>


<div class="border rounded">
    <h1>Advanced String Functions</h1>

    <?php 
        $shoppingList = "bread,milk,apples";
        $shoppingListArray = explode(",",$shoppingList);
        print_r($shoppingListArray);

        $listOutput = implode(", ",$shoppingListArray);
        // echo "<p>".$listOutput."</p>";
        echo "<p>{$listOutput}</p>";
    ?>
</div>


<?php include "templates/footer.php"; ?>