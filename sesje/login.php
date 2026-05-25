<?php

session_start();

$host = 'localhost';
$db   = 'test';
$user = 'root';
$pass = '';
$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Błąd połączenia: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = mysqli_real_escape_string($conn, $_POST['login']);
    $haslo = sha1($_POST['haslo']);

    $sql = "SELECT id, haslo, rola FROM uzytkownicy WHERE login = '$login'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        if ($haslo === $row['haslo']) {
            $_SESSION['user'] = $login;
            $_SESSION['role'] = $row['rola'];
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['formularz_wyslany'] = false;

            $user_id = $row['id'];
            mysqli_query($conn, "INSERT INTO logi (user_id, data_logowania, formularz_wyslany) VALUES ($user_id, NOW(), 'nie')");

            header("Location: panel.php");
            exit;
        } else {
            $error = "Złe hasło.";
        }
    } else {
        $error = "Nie znaleziono użytkownika.";
    }
}
?>

<form method="POST">
    Login: <input type="text" name="login" required><br>
    Hasło: <input type="password" name="haslo" required><br>
    <button type="submit">Zaloguj</button>
</form>
<?php if(isset($error)) echo "<p>$error</p>"; ?>