<?php

function wypisz_dzien_tygodnia($data)
{
   $dzien = date("w", mktime(0,0,0,$data['miesiac'],$data['dzien'],$data['rok']));

   switch($dzien)
   {
      case 0: echo "Niedziela"; break;
      case 1: echo "Poniedziałek"; break;
      case 2: echo "Wtorek"; break;
      case 3: echo "Środa"; break;
      case 4: echo "Czwartek"; break;
      case 5: echo "Piątek"; break;
      case 6: echo "Sobota"; break;
   }
}

function oblicz_dni($data)
{
  // 60 sekund to 1 minuta, 60 minut to 1 godzina, 
  // 24 godziny to 1 dzień
  $czas = (time() - mktime (0,0,0,$data['miesiac'],
  $data['dzien'],$data['rok']))/60/60/24;
  return $czas;
}

function sprawdz_pelnoletnosc($data)
{
   $rok_teraz = date("Y");
   $wiek = $rok_teraz - $data['rok'];

   if($wiek >= 18)
      echo "<br>Użytkownik jest pełnoletni.";
   else
      echo "<br>Użytkownik jest niepełnoletni.";
}

function dni_matki()
{
   $dni = array();

   for($i = 0; $i < 10; $i++)
   {
      $timestamp = mktime(0,0,0,5,26+$i,date("Y"));
      $nr_dnia = date("w",$timestamp);

      switch($nr_dnia)
      {
         case 0: $dni[] = "Niedziela"; break;
         case 1: $dni[] = "Poniedziałek"; break;
         case 2: $dni[] = "Wtorek"; break;
         case 3: $dni[] = "Środa"; break;
         case 4: $dni[] = "Czwartek"; break;
         case 5: $dni[] = "Piątek"; break;
         case 6: $dni[] = "Sobota"; break;
      }
   }

   return $dni;
}

$data['dzien'] = $_GET['dzien'];
$data['miesiac'] = $_GET['miesiac'];
$data['rok'] = $_GET['rok'];

echo "Dzień tygodnia: ";
wypisz_dzien_tygodnia($data);

echo "<br>Liczba dni od urodzenia: ";
echo oblicz_dni($data);

sprawdz_pelnoletnosc($data);

echo "<br><br>Dni tygodnia dla 10 kolejnych dni od Dnia Matki:<br>";

$tab = dni_matki();

foreach($tab as $d)
{
   echo $d."<br>";
}

?>