//https://kursphp.com/nauka-php-online/
<?php
//rodział 3
function wyswietl_powitanie() // deklaracja funkcji
{
   print "Witam serdecznie!";  // ciało funkcji, czyli
   print "Proszę się zarejestrować.";  // instrukcje do wykonania
}

wyswietl_powitanie();

function tresc_powitania() // deklaracja funkcji
{
   $tekst = "Witam wszystkich!";
   return $tekst;
}

$powitanie = tresc_powitania();
print $powitanie;

function oblicz()
{
   $zm1 = 3;
   $zm1 = $zm1 + 5;
   $zm1 = $zm1 + 1;
   return $zm1;
}

$wynik = oblicz();

if ($wynik > 5)
   print "Funkcja zwraca wartość większą od 5";
else
   print "Wartość zwracana przez funkcję jest mniejsza od 6";

//Funkcja przyjmująca wartość
function przywitaj($zmienna_z_imieniem)
{
   print 'Witaj '.$zmienna_z_imieniem.'!';
}

$imie = "Marcin";

przywitaj($imie);


// Tablice

$tablica = array();
$tablica[] = 1;    // przypisanie
$tablica[] = 4;    // wartości
$tablica[] = 1;    // kolejnym
$tablica[] = 0;    // indeksom

for ($i = 0; $i <= 3; $i++) // wyświetlenie każdego
   print $tablica[$i];  // indeksu za pomocą

$pewna_zmienna = 20; // gdzie X to dowolna wartość

$j = 0; // zmienna pomocnicza
$i = 0; // zmienna iteracyjna

while($i <= $pewna_zmienna) // warunek kontynuacji pętli
{
   if($i % 4 == 0) // jeśli podzielna przez 4
   {
      $tablica[$j] = $i;  // dodaj kolejny element do tablicy
      $j = $j + 1; // zwiększ indeks o 1
   }
   $i = $i + 1; // zwiększamy $i o 1, aż przekroczymy $pewna_zmienna
}

for ($i = 0; $i < $j; $i++) // wyświetlenie wszystkich
   print $tablica[$i]."<br/>"; // elementów tablicy

// Tablice wielowymiarowe

$tablica_ucznia = array();
$tablica_ucznia[0] = "Janek";
$tablica_ucznia[1] = "Kowalski";
$tablica_ucznia[2] = "14-10-1995";

$tablica_klasy = array();
$tablica_klasy[] = $tablica_ucznia;

$tablica_ucznia = array();
$tablica_ucznia[0] = "Krzysiek";
$tablica_ucznia[1] = "Nowak";
$tablica_ucznia[2] = "24-12-1994";

$tablica_klasy[] = $tablica_ucznia;

$tablica_ucznia = array();
$tablica_ucznia[0] = "Ewa";
$tablica_ucznia[1] = "Kowalska";
$tablica_ucznia[2] = "17-03-1996";

$tablica_klasy[] = $tablica_ucznia;

print $tablica_klasy[1][0]; // powinno wyświetlić
                           // Krzysiek
echo "<br>";
//Tablice asocjacyjne

  $uczen = array();
  $uczen['imie'] = "Janek";
  $uczen['nazwisko'] = "Kowalski"; 
  $uczen['dataUrodzenia'] = "14-10-1995";

    $classroom = array();
    $student = array();
    $student['firstName'] = 'Janek';
    $student['lastName'] = 'Kowalski';
    $student['birthday'] = '15-08-2000';
    $classroom[] = $student;
    $student['firstName'] = 'Mirek';
    $student['lastName'] = 'Nowak';
    $student['birthday'] = '2-11-2001';
    $classroom[] = $student;
    $student['firstName'] = 'Marcin';
    $student['lastName'] = 'Wesel';
    $student['birthday'] = '19-05-1989';
    $classroom[] = $student;

// Petle foreach
$numbers = array();
// wypełnij dane przy pomocy pętli for
for($i = 0; $i < 10; $i++)
{
    $numbers[$i] = $i;
}
// użycie pętli foreach na tablicy
foreach($numbers as $number)
{
    // w każdym kolejnym przebiegu następny element tablicy 
    // jest przechowywany w zmiennej $number
    print $number;
    echo "<br>";
}

$student = array();
$student['firstName'] = 'Marcin';
$student['lastName'] = 'Wesel';
$student['birthday'] = '19-05-1989';
foreach ($student as $data)
{
    echo "Wartość atrybutu: $data";
    echo "<br>";
}

$student = array();
$student['firstName'] = 'Marcin';
$student['lastName'] = 'Wesel';
$student['birthday'] = '19-05-1989';
foreach ($student as $key => $data)
{
    echo "Wartość dla indeksu: $key to: $data";
    echo "<br>";
}
echo "<br>";
//break i continue

$data = array(1, 2, 3, 1, 2, -3, 2, 2, 1, 3, 4, 5);
$sum = 0;
for ($i = 0; $i < count($data); $i++)
{
    if ($data[$i] < 0)
    {
        break;
    }
    $sum += $data[$i];
}

echo "<br>";
echo "<br>";

$data = array(1, 2, 3, 1, 2, -3, 2, 2, 1, 3, 4, 5);
$sum = 0;
for ($i = 0; $i < count($data); $i++)
{
    if ($data[$i] < 0)
    {
        continue;
    }
    $sum += $data[$i];
}

echo "<br>";
echo "<br>";

$data = array(1, 2, -3, -1, 2, -3, 2, 2, 1, 3, 4, 5, -2, 4);
$sum = 0;
$negativeNumbers = 0;
for ($i = 0; $i < count($data); $i++)
{
    if ($data[$i] < 0)
    {
        $negativeNumbers++;
        if ($negativeNumbers > 2)
        {
            break;
        }
        continue;
    }
    $sum += $data[$i];
    if ($sum > 10)
    {
        break;
    }
}

//data i czas

$data=date("Y-m-d");
$czas=date("H:i");

echo "Stronę wyświetlono dnia $data o godzinie $czas";


echo "<br>";
$data=date("Y-m-d, H:i", mktime (0,0,0,10,15,1985));

echo $data;

?>