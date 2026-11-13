<?php include 'templates/header.php'; ?>

<div class="container border border-black rounded">
    <div class="row">
        <div class="col m-2 border rounded">
            <h1>Get</h1>
        </div>
    </div>
    <div class="row">
        <div class="col m-2 border rounded">
            <h2>Choose Color</h2>
            <?php 
                $colors = ["red","green","blue"];
                foreach($colors as $c){
                    echo "<p><a href='get.php?color={$c}'>{$c}</a></p>";
                }
            ?>
        </div>
    </div>

    <?php if(isset($_GET['color'])){ ?>
        <div class="row">
            <div class="col m-2 border rounded">
                <h2>Chosen Color</h2>
                <?php 
                    $chosen = $_GET['color'];
                    echo "<p>You chose {$chosen}.</p>";
                ?>
            </div>
        </div>
    <?php } ?>
</div>

<?php include 'templates/footer.php'; ?>