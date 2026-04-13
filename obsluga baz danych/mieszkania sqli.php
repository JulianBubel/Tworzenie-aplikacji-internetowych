<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "mieszkania";

$conn = new mysqli($host, $user, $pass, $db);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("błąd połączenia: " . $conn->connect_error);
}

$sql = "SELECT id_mieszkania, ulica, nr_klatki, nr_mieszkania, metraz 
        FROM adres 
        WHERE metraz > 100 AND ulica LIKE 'K%' 
        ORDER BY metraz DESC";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {

    echo "<table border='1' bgcolor='lightgrey';>
            <tr>
                <th>ID</th>
                <th>ulica</th>
                <th>klatka</th>
                <th>nr mieszkania</th>
                <th>metraż (m2)</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id_mieszkania"] . "</td>
                <td>" . $row["ulica"] . "</td>
                <td>" . $row["nr_klatki"] . "</td>
                <td>" . $row["nr_mieszkania"] . "</td>
                <td>" . $row["metraz"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {

    if ($conn->error) {
        echo "złe zapytanie" . $conn->error;
    } else {
        echo "nie ma takich mieszkań";
    }
}

$conn->close();
?>
