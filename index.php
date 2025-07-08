<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color List</title>
</head>
<body>
    <?php
    // Connect to MySQL
    $connect = mysqli_connect('localhost', 'root', '', 'colors');

    // Check connection
    if (!$connect) {
        die("Failing Connection " . mysqli_connect_error());
    }

    // Query to fetch all colors
    $query = 'SELECT * FROM colors';
    $colors = mysqli_query($connect, $query);

if ($colors) {
    while ($row = mysqli_fetch_array($colors)) {
        echo "<div style='background:" . $row['Hex'] . "; color:white;'>";
        echo $row['Name'];
        echo "</div>";
    }
} else {
    echo "No data found.";
}

    ?>
</body>
</html>
