<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "mieszkania";

$dsn = "mysql:host=$host;dbname=$db;";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);

    $sql = "SELECT id_mieszkania, ulica, nr_klatki, nr_mieszkania, metraz 
            FROM adres 
            WHERE metraz > 100 AND ulica LIKE 'K%' 
            ORDER BY metraz DESC";

    $stmt = $pdo->query($sql);
    $rows = $stmt->fetchAll();

    if ($rows) {
        echo "<table border='1' bgcolor='lightgrey'>
                <tr>
                    <th>ID</th>
                    <th>ulica</th>
                    <th>klatka</th>
                    <th>nr mieszkania</th>
                    <th>metraż (m2)</th>
                </tr>";

        foreach ($rows as $row) {
            echo "<tr>
                    <td>" . htmlspecialchars($row["id_mieszkania"]) . "</td>
                    <td>" . htmlspecialchars($row["ulica"]) . "</td>
                    <td>" . htmlspecialchars($row["nr_klatki"]) . "</td>
                    <td>" . htmlspecialchars($row["nr_mieszkania"]) . "</td>
                    <td>" . htmlspecialchars($row["metraz"]) . "</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "nie ma takich mieszkań";
    }

} catch (PDOException $e) {
    echo "błąd połączenia lub zapytania: " . $e->getMessage();
}

$pdo = null; 
?>
