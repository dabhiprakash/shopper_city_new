<?php
ob_start();
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Define database connection parameters for local and live environments
$local_hostname = "localhost";
$server = $_SERVER['SERVER_NAME'];

if ($server == "localhost") {
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $db = "shoppercity_live";
} else {
    $hostname = "localhost";
    $username = "shopercity_user";
    $password = "nCq53z~4";
    $db = "shopercity_db";
}

$conn = mysqli_connect($hostname, $username, $password, $db);
if (!$conn == true) {
    echo "database not connected";
}
// // Determine if the environment is local or live
// if ($_SERVER['SERVER_ADDR'] == $local_hostname || $_SERVER['SERVER_NAME'] == 'localhost') {
//     // Local environment
//     $conn = mysqli_connect($local_hostname, "root", "", "shoppercity_live");
//     if (!$conn) {
//         echo "database not connected";
//     }
// } else {
//     // Live environment
//     $conn = mysqli_connect($local_hostname, $username, $password, $db);
//     if (!$conn) {
//         echo "database not connected";
//     }
// }
?>