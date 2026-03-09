//https://kursphp.com/nauka-php-online/

<?php

define("NR_TELL","666258147");
$nr_tel = "792297792";

?>

<html>
<head>
  <title>buba</title>
</head>
<body>
<?php
//--------------------------------------------------------
echo "zmienne i stale";

echo "<br>";
echo "<br>";
echo NR_TELL;
echo "<br>"; 
echo $nr_tel;
echo "<br>";
//--------------------------------------------------------
echo "<br> operatory";

echo "<br>";
echo "<br>";
$a = 5;
$b = 10;
echo $a + $b; // Wynik: 15
echo "<br>";
echo $b % $a; // Wynik: 0
echo "<br>";

$c = 5;
$d = "5";
var_dump($c == $d); // bool(true)
echo "<br>";
var_dump($c === $d); // bool(false)
echo "<br>";

$uzytkownik = "admin";
$tryb = "pilny";
if ($uzytkownik == "admin" || $tryb == "pilny") 
{ 
  echo "Dostęp możliwy!";
}
else
{ 
  echo "Brak dostępu!";
}
echo "<br>";
echo "<br>";
//--------------------------------------------------------
echo "komentarze";
echo "<br>";
 /* 
takie komentarz
wieloliniowy
spoczko
 */

// koemntarz jednoliniowy też fajny
echo "<br>";
//--------------------------------------------------------
echo "debugowanie";
echo "<br>";
$e = "2ab23c";
$f = 12;
$g = $e * $f;
var_dump($g);

//--------------------------------------------------------!!!!!!!!!!!!!!!!!!!!!!!!!!
echo "<br>";
echo "<br>";
echo "ROZDZIAŁ 2";
echo "<br>";
echo "<br>";
//--------------------------------------------------------!!!!!!!!!!!!!!!!!!!!!!!!!!
echo "warunek if";
echo "<br>";
echo "<br>";
$h = 7; // przypisujemy wartość zmiennej $h
if ($h%2 > 0) // reszta z dzielenia przez 2
{
  echo "Liczba nieparzysta";
}
if ($h%2 == 0) // brak reszty z dzielenia przez 2
{
  echo "Liczba parzysta";
}
echo "<br>";
echo "<br>";
$i = 7; // przypisujemy wartość zmiennej $i
if ($i > 0 && $i < 10) // $i jest większa niż 0 I jest mniejsza niż 10 - oba warunki muszą zostać spełnione
  echo "Liczba między 0 a 10";

if ($i < 0 || $i > 10) // $i jest mniejsza niż 0 LUB jest większa niż 10 - jeden z warunków musi zostać spełniony
  echo "Liczba mniejsza od 0 lub większa niż 10";
echo "<br>";
echo "<br>";
$j = 7; // przypisujemy wartość zmiennej $j
if ($j%2 > 0) // reszta z dzielenia przez 2
  echo "Liczba nieparzysta";
if ($j%2 == 0) // brak reszty z dzielenia przez 2
  echo "Liczba parzysta";
  echo "<br>";
echo "<br>";
//-------------------------------------------
echo "warunek if else";
echo "<br>";
echo "<br>";
$k = 7; // przypisujemy wartość zmiennej $k
if ($k%2 > 0) // reszta z dzielenia przez 2
{
  echo "Liczba nieparzysta";
}
else // brak reszty z dzielenia przez 2
{
  echo "Liczba parzysta";
}
echo "<br>";
echo "<br>";
//--------------------------------------------------
  echo "alternatywa else if";
echo "<br>";
echo "<br>";
$l = 34; // przypisujemy wartość zmiennej $l

if ($l%8 == 0) // liczba podzielna przez osiem
  echo "Liczba podzielna przez osiem";

elseif ($l%4 == 0) // liczba podzielna przez cztery
  echo "Liczba podzielna przez 4, ale nie przez 8";

elseif ($l%2 == 0) // liczba podzielna przez dwa
  echo "Liczba podzielna przez 2, ale nie przez 4";

else // żadna z powyższych
  echo "Liczba nieparzysta";
  echo "<br>";
echo "<br>";
//-----------------------------------------------
echo "instrukcja switch";
echo "<br>";
echo "<br>";
$m = 72; // przypisujemy wartość zmiennej $m

switch ($m) 
{
case 1:
  echo "Wartość zmiennej a to 1";
  break;

case 2:
  echo "Wartość zmiennej a to 2";
  break;

case 3:
  echo "Wartość zmiennej a to 3";
  break;

case 72:
  echo "Wartość zmiennej a to 72";
  break;

default:
  echo "Żadna z powyższych";
  break;
}
echo "<br>";
echo "<br>";
//----------------------------------------------
echo "petla while";
echo "<br>";
echo "<br>";
$zmienna = 32;
echo "<br>";
echo "<br>";
if($zmienna < 101)
{
  echo $zmienna;
  $zmienna++;
}
if($zmienna < 101)
{
  echo $zmienna;
  $zmienna++;
}
if($zmienna < 101)
{
  echo $zmienna;
  echo "-";
  $zmienna++;
} 
echo "<br>";
echo "<br>";
$zmienna2 = 67;
while($zmienna2 < 101) // warunek kontynuacji pętli
{
  echo $zmienna2;
  echo "-";
  $zmienna2++;
} 
echo "<br>";
echo "<br>";
$zmienna3 = 67;
while($zmienna3 < 101) // warunek kontynuacji pętli
{
  echo $zmienna3;
  echo "-";
  $zmienna3 += 10; // zmienna może się zmieniać szybciej/wolniej/wcale
} 
echo "<br>";
echo "<br>";
$zmienna4 = 67;
$inna = 21;
while($zmienna4 < 101 && $inna > 100) // warunek kontynuacji pętli
{
  echo $zmienna4;
  echo "-";
  echo $inna;
  echo ".";
  $zmienna4 += 10; // zmienna może się zmieniać szybciej/wolniej/wcale
  $inna -= 5; // sprawdzanych może być wiele zmiennych
} 
echo "<br>";
echo "<br>";
//----------------------------------------------
echo "petla do while";
echo "<br>";
echo "<br>";
$zmienna5 = 200;
do // instrukcje do wykonania
{
  echo $zmienna5;
  $zmienna5++;
} 
while($zmienna5 < 101);// warunek kontynuacji pętli
echo "<br>";
echo "<br>";
$zmienna6 = -10;
do // instrukcje do wykonania
{
  echo $zmienna6;
  $zmienna6--;
} 
while($zmienna6 > 0); // warunek kontynuacji pętli
echo "<br>";
echo "<br>";
//---------------------------------------------------------------
echo "petla for";
echo "<br>";
echo "<br>";
// for($n=0;$n<10;$n++)
// {
//   // instrukcje
// }

// // ten sam efekt z użyciem funkcji while
// $n=0
// while($n < 10)
// {
//   $n++;
// }
//-------------------------------------------------------------
echo "operator warunkowy";
echo "<br>";
echo "<br>";
$o = 5; // przypisujemy wartość zmiennej $o
$odpowiedz = ($o>5) ? 'Większa od 5' : 'Mniejsza, bądź równa 5';

echo $odpowiedz;
echo "<br>";
echo "<br>";
$p = 5; // przypisujemy wartość zmiennej $p
echo ($p>5) ? 'Większa od 5' : 'Mniejsza, bądź równa 5';

echo "<br>";
echo "<br>";
//-------------------------------------------------------
echo"powtorka rozdzail 2";
echo "<br>";
echo "<br>";
$ilosc = -8; // przypisujemy dowolną wartość zmiennej $ilosc

// zmienna $kontynuacja sprawdza, czy $ilosc jest zerem
$kontynuacja = ($ilosc == 0) ? 0 : 1;

// jeśli nie jest, możemy kontynuować
if($kontynuacja == 1)
{
    if($ilosc > 0) // wyświetlamy ciągi od 0 do 20
        while($ilosc > 0) // musimy wypisać $ilosc ciągów
        {
            for($i=0;$i<21;$i++) // 20 liczb za pomocą for
                echo $i, "-";
            $ilosc--; // zmniejszamy, aż dojdzie do 0
            echo "<br/>"; // przejście do kolejnej linijki
        }
    else // $ilosc jest ujemna, wyswietlamy od 20 do 0
        while($ilosc < 0) // wypisujemy -$ilosc ciągów
        {
            for($i=20;$i>=0;$i--) // 20 liczb za pomocą for
                echo $i, "-";
            $ilosc++; // zwiększamy, aż dojdzie do 0
            echo "<br/>"; // przejście do kolejnej linijki
        }               
}
else // jeśli kontynuacja wynosi 0
  echo "Brak ciągów liczb";

echo "<br>";
echo "<br>";

for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {

        $wynik = $i * $j;

        if ($wynik % 2 == 0) {
            echo "<span style='color:blue;'>$wynik</span> ";
        } else {
            echo "<span style='color:green;'>$wynik</span> ";
        }

    }
    echo "<br>";
}

echo "<br>";
echo "<br>";

$potega = 3; // zmień na 2, 3 lub 4

switch ($potega) {

    case 2:
        for ($x = 1; $x <= 10; $x++) {
            echo ($x * $x) . "<br>";
        }
        break;

    case 3:
        for ($x = 1; $x <= 10; $x++) {
            echo ($x * $x * $x) . "<br>";
        }
        break;

    case 4:
        for ($x = 1; $x <= 10; $x++) {
            echo ($x * $x * $x * $x) . "<br>";
        }
        break;

    default:
        echo "Wybierz potęgę 2, 3 lub 4";
}
?>
</body>
</html>