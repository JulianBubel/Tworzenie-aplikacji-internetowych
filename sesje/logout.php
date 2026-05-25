<?php
session_start();

$host = 'localhost';
$db   = 'sesje';
$user = 'root';
$pass = '';
$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Błąd połączenia: " . mysqli_connect_error());
}

if (isset($_SESSION['user_id'])) {
    $formularz = $_SESSION['formularz_wyslany'] ? 'tak' : 'nie';
    $user_id = $_SESSION['user_id'];

    mysqli_query($conn, "UPDATE logi SET formularz_wyslany='$formularz' WHERE user_id=$user_id ORDER BY id DESC LIMIT 1");
}

session_destroy();
header("Location: login.php");
exit;