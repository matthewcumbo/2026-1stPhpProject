<?php include 'templates/header.php'; ?>

<div class="container m-2 border border-black rounded">
    <div class="row">
        <div class="col">
            <h1>Forms</h1>
        </div>
    </div>
    <div class="row">
        <div class="col m-3 border rounded">
            <h2>For Loop</h2>
            <?php  
                // For loops can be used to execute the same code block for a predetermined number of times
                for($i = 0; $i < 10; $i++){
                    echo "<p>{$i}</p>";
                }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col m-3 border rounded">
            <h2>For Loop over Array</h2>
            <?php 
                // Loops are useful for iterating over an array using its index 
                $members = ["John","Jane","Steve","Angela"];

                for($i = 0; $i < count($members); $i++){
                    echo "<p>{$members[$i]}</p>";
                }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col m-3 border rounded">
            <h2>Foreach Loop</h2>
            <?php 
            // Foreach Loops iterate over arrays, irrespective of its size
                foreach($members as $m){
                    echo "<p>{$m}</p>";
                }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col m-3 border rounded">
            <h2>Foreach over Associative Array</h2>
            <?php 
                $heroes = [
                    "Tony Stark" => "Iron Man",
                    "Bruce Banner" => "The Hulk",
                    "Steve Rogers" => "Captain America",
                ];

                // Loops can also use key-value-pairs of an associative array
                // each element in the array will follow the same structure
                foreach($heroes as $key => $value){
                    echo "<p>{$key} is {$value}.</p>";
                }
            ?>
            <!-- 
                Home Exercise
                --------------
                While Loops
            -->
    
        </div>
    </div>
</div>


<?php include 'templates/footer.php'; ?>