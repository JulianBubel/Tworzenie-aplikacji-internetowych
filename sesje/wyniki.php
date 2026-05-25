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

if (!isset($_SESSION['user']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}

$sql = "SELECT u.login, d.imie, d.nazwisko, d.email, d.data_dodania
        FROM uzytkownicy_dane d
        JOIN uzytkownicy u ON d.user_id = u.id";
$result = mysqli_query($conn, $sql);

echo "<table border='1'>
<tr><th>Login</th><th>Imię</th><th>Nazwisko</th><th>Email</th><th>Data dodania</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['login']}</td>
            <td>{$row['imie']}</td>
            <td>{$row['nazwisko']}</td>
            <td>{$row['email']}</td>
            <td>{$row['data_dodania']}</td>
          </tr>";
}
echo "</table>";