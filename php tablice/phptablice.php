<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>tablice php</title>
</head>
<body>

<?php
$dane_bazowe = [7, 3, 1, 6, 9, 5, 4, 10, 2, 2];

echo "wartosc 5 komórki tablicy: ";
echo $dane_bazowe[4]."<br>";

$dane_bazowe[6] = 12;

$tablica_kopia = [];
for ($i = 0; $i < count($dane_bazowe); $i++) {
    $tablica_kopia[$i] = $dane_bazowe[$i];
}

$tablica_sum = [];
for ($i = 0; $i < count($dane_bazowe); $i++) {
    $tablica_sum[$i] = $dane_bazowe[$i] + $tablica_kopia[$i];
}

$tablica_kopia = [];
for ($i = count($dane_bazowe) - 1; $i >= 0; $i--) {
    $tablica_kopia[] = $dane_bazowe[$i];
}

echo "tab 1:   ";
print_r($dane_bazowe);
echo "<br>odwrócona tab 2 :   ";
print_r($tablica_kopia);
echo "<br>suma tab 3 :   ";
print_r($tablica_sum);
?>

</body>
</html>