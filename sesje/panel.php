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

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $imie = mysqli_real_escape_string($conn, $_POST['imie']);
    $nazwisko = mysqli_real_escape_string($conn, $_POST['nazwisko']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO uzytkownicy_dane (user_id, imie, nazwisko, email) VALUES ($user_id, '$imie', '$nazwisko', '$email')";
    mysqli_query($conn, $sql);

    $_SESSION['formularz_wyslany'] = true;

    echo "<p>Dane zostały zapisane.</p>";
}
?>

<form method="POST">
    Imię: <input type="text" name="imie" required><br>
    Nazwisko: <input type="text" name="nazwisko" required><br>
    Email: <input type="email" name="email" required><br>
    <button type="submit">Wyślij</button>
</form>

<form action="logout.php" method="POST">
    <button type="submit">Wyloguj</button>
</form>