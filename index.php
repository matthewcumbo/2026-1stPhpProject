<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1st PHP Project | Home </title>

    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
</head>
<body>
    <h1>Hello World</h1>
    
    <!-- The following it the opening tag for PHP code -->
    <?php  
        // The echo function simply outputs text into the compiled HTML page
        echo "This is a simple echo";

        // To maintain valid HTML, this output should be placed within HTML
        echo "<p>This paragraph is built in PHP</p>";

        // Variables are created starting with a $ (dollar sign)
        $firstName = "Joe";
        $lastName = "Borg";

        echo $firstName;
        // The . notation can be used to concatenate multiple strings into a single one
        echo "<p>" . $firstName . " " . $lastName . "</p>";

    ?>



    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
</body>
</html>