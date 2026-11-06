<?php include "templates/header.php"; ?>

<div class="border rounded">
    <h1>Conditions</h1>

    <?php
        // If Condition 
        // Code within the code block (between curly brackets) is only executed if the condition (inside the round brackets) is true
        $awake = false;
        if ($awake === true){
            echo "<p>Yay I'm awake</p>";
        }


        // If..Else Conditions
        // If the condition is false, we can have an alternate code block for that case
        $num1 = 30;
        $num2 = 40;
        if($num1 > $num2){
            echo "<p>Num 1 is greater</p>";
        }
        else{
            echo "<p>Num 2 is greater</p>";
        }

        // If..ElseIf..Else Condition
        // We can add many more conditions for varying outputs based on different possible values of the same variable
        $time = date("H");
        echo $time;
        if($time < "9"){
            echo "<p>Good Morning :)</p>";
        }
        elseif($time == "12"){
            echo "<p>It's High Noon!</p>";
        }
        elseif($time < "20"){
            echo "<p>Have a nice day.</p>";
        }
        else{
            echo "<p>Good Night</p>";
        }

        // Switch Statement
        // Works similar to an If..ElseIf..Else, but is structurally easier to read and can be faster (depending on how complex the condition is)
        $favcol = "green";
        switch($favcol){
            case "red":
                echo "<p>You are passionate</p>";
                break;
            case "blue":
                echo "<p>You are cool</p>";
                break;
            case "green":
                echo "<p>You are relaxed</p>";
                break;
            default:
                echo "<p>Your colour is weird</p>";
                break;
        }


        // Logical Operators (AND, OR, NOT)
        // Variables need to satisfy both conditions
        if ($awake === true && $num1 < $num2){
            echo "<p>I'm awake and num1 is smaller than num2</p>";
        }
        // Variables need to satisfy at least 1 condition
        if($favcol == "blue" || $favcol == "green"){
            echo "<p>You like cooler colors</p>";
        }
        // Condition must result in false
        if($awake !== true){
            echo "<p>Wakey Wakey!! It's not 8am anymore.</p>";
        }


        // The following are the same 
        if($awake === true){}
        if($awake){}

        // The following are all the same as well
        if ($awake === false){}
        if ($awake !== true){}
        if (!$awake){}


    ?>
</div>

<?php include "templates/footer.php"; ?>