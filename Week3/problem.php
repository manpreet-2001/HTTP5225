<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo & Magic Number Game</title>
</head>
<body>
    <?php
    echo "Problem 1: <br>"; 

    date_default_timezone_set('UTC');
    $currentHour = rand(0, 23);
    echo "Simulated Hour: {$currentHour}<br>";

    $meal = "";
    $food = "";

    if ($currentHour >= 5 && $currentHour < 9) {
        $meal = "Breakfast";
        $food = "Bananas, Apples, and Oats";
        echo "It's time for {$meal}! The animals will eat: {$food}";
    } elseif ($currentHour >= 12 && $currentHour < 14) {
        $meal = "Lunch";
        $food = "Fish, Chicken, and Vegetables";
        echo "It's time for {$meal}! The animals will eat: {$food}";
    } elseif ($currentHour >= 19 && $currentHour < 21) {
        $meal = "Dinner";
        $food = "Steak, Carrots, and Broccoli";
        echo "It's time for {$meal}! The animals will eat: {$food}";
    } else {
        echo "It's not feeding time for the animals.";
    }

    // Problem 2
    echo "<br><br>Problem 2: <br>";

    $inputNumber = rand(1, 10);
    echo "Random Number: {$inputNumber}<br>";

    if ($inputNumber % 3 === 0 && $inputNumber % 5 === 0) {
        echo "FizzBuzz";
    } elseif ($inputNumber % 3 === 0) {
        echo "Fizz";
    } elseif ($inputNumber % 5 === 0) {
        echo "Buzz";
    } else {
        echo $inputNumber;
    }
    ?>
</body>
</html>
