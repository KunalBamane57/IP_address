<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Next Page</title>
</head>
<body>
    <div class="container">
        <?php
        // Retrieve user data from query parameters
        $userIp = $_GET['ip'];
        $userId = $_GET['userId'];
        $password = $_GET['password'];

        // Display user information
        echo "<h2>User Information:</h2>";
        echo "<p>User ID: $userId</p>";
        echo "<p>Password: $password</p>";
        echo "<p>User IP Address: $userIp</p>";
        ?>
    </div>
</body>
</html>
