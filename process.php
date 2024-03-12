<?php
// Connect to MongoDB
// $mongoClient = new MongoDB\Driver\Manager("mongodb://localhost:27017");

// // Get user inputs
// $userId = $_POST['userId'];
// $password = $_POST['password'];

// // Get original user IP address
// if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
//     $userIp = $_SERVER['HTTP_X_FORWARDED_FOR'];
// } elseif (!empty($_SERVER['HTTP_CLIENT_IP'])) {
//     $userIp = $_SERVER['HTTP_CLIENT_IP'];
// } else {
//     $userIp = $_SERVER['REMOTE_ADDR'];
// }

// // Extract the first IP address if multiple addresses are present
// $userIp = explode(',', $userIp)[0];

// // Insert data into MongoDB
// $bulk = new MongoDB\Driver\BulkWrite;
// $bulk->insert(['userId' => $userId, 'password' => $password, 'ipAddress' => $userIp]);
// $mongoClient->executeBulkWrite('abc.abc', $bulk);

// // Redirect to a welcome page
// header("Location: next_page.php?userId=$userId");
// exit();
?>

<?php
// Get user inputs
$userId = $_POST['userId'];
$password = $_POST['password'];

// Get original user IP address
if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $userIp = $_SERVER['HTTP_X_FORWARDED_FOR'];
} elseif (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $userIp = $_SERVER['HTTP_CLIENT_IP'];
} else {
    $userIp = $_SERVER['REMOTE_ADDR'];
}

// Extract the first IP address if multiple addresses are present
$userIp = explode(',', $userIp)[0];

// Redirect to the next page with user IP address
header("Location: next_page.php?ip=$userIp&userId=$userId&password=$password");
exit();
?>
