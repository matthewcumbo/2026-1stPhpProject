<?php include "templates/header.php" ?>

<div class="border rounded">
    <h1>Associative Arrays</h1>

    <?php
    $students = [
        "Interactive Media" => 8,
        "Game Art" => 5,
        "Graphic Design" => 15
    ];
    print_r($students);

    echo "<p>There are {$students['Interactive Media']} students in Interactive Media.<p>";

    $students['Graphic Design'] = 1;
    $students['Media'] = 10;

    print_r($students);
    
    /*
        Home Research: 
            array_key_exists()
            array_keys()
            array_values()
    */

    ?>
</div>

<?php include "templates/footer.php" ?>