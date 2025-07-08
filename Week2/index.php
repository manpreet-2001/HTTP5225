<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2</title>
</head>
<body>
    <!-- Learnin Echo -->
    <?php 
    echo "<h1> Hello World! </h1>";
    echo "<p> My Name is Manpreet Singh. </p>";
    ?>

    <hr>

    <!-- Learning Variables -->
    <?php 
    $fname = "Manpreet";
    $lname = "Singh";
    
    echo "<h1> Hello " . "$fname " . "$lname";
    ?>

    <?php
    $people = array(
            'Hopper',
            'Billie',
            'Himan');
    $person['first'] = 'Armaan';
    $person['last'] = 'Malik';
    
   // Display the people array
    echo "<h1>People:</h1>";
      foreach ($people as $p) {
    echo "<p>$p</p>";
}

    ?>


</body>
</html>