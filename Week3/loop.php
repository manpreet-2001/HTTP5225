<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
// Function to fetch user data from the JSONPlaceholder API
function getUsers() {
    $url = "https://jsonplaceholder.typicode.com/users";
    $data = file_get_contents($url);
    return json_decode($data, true);
}

// Get the list of users
$users = getUsers();

// Display only the first 10 users
echo "<h2>List of Users (First 10)</h2>";

// $limit = min(10, count($users)); // Ensures no out-of-bounds error

for ($i = 0; $i < count($users); $i++) {
            $user = $users[$i];
            echo "<li>";
            echo "<strong>" . htmlspecialchars($user['name']) . "</strong><br>";
            echo "Username: " . htmlspecialchars($user['username']) . "<br>";
            echo "Email: " . htmlspecialchars($user['email']) . "<br>";
            echo "City: " . htmlspecialchars($user['address']['city']) . "<br>";
            echo "Company: " . htmlspecialchars($user['company']['name']);
            echo "</li><br>";
        }
?>

</body>
</html>