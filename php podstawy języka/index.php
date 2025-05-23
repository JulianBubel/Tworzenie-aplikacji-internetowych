<?php
// first comment
echo 'siea';

echo'<br>';

const LANGUAGE = 'PHP';
echo LANGUAGE;

echo'<br>';

$isVisible = true;
var_dump($isVisible);echo'<br>';

$age = 18;
var_dump($age); // result: int(18)echo'<br>';

$price = 19.99;
var_dump($price);echo'<br>';

$title = 'PHPDevs';
var_dump($title);echo'<br>';

$user = null;
var_dump($user);

echo'<br>';

$motherAge = 42;
$dadAge = 39;
$familyAge = $motherAge + $dadAge;
echo $familyAge; echo'<br>';

$money = 10;
echo $money - 2.99; echo'<br>';

$sideA = 6;
$sideB = 3;
$rectangleArea = $sideA * $sideB;
echo $rectangleArea; echo'<br>';

echo 5 * 4 - 3; // result: 17
echo 5 * (4 - 3); // result: 5 
echo'<br>';

$candies = 16;
$people = 4;
echo $candies / $people; echo'<br>';

$number = 10 % 3;
echo $number;  echo'<br>';

echo 4 ** 2; echo'<br>';

$year = 2017;
echo $year; echo'<br>';

$name = $user = 'Jan';
echo $name; // result: Jan
echo $user; // result: Jan
echo'<br>';

$day = 20;
$day += 7;
echo $day; // result: 27
echo'<br>';

$price = 2.99;
echo $price -= 0.39; // result: 2.6
echo'<br>';

$candies = 10;
$people = 3;
$candies *= $people;
echo $candies; // result: 30
echo'<br>';

$apples = 40;
echo $apples /= 5; // result: 8
echo'<br>';

$users = 10;
echo $users %= 4; // result: 2
echo'<br>';

$number = 3;
echo $number **= 3; // result: 27
echo'<br>';

$logo1 = 'PHP';
$logo2 = 'Devs';
echo $logo1 . $logo2;
echo'<br>';

$logo = 'PHP';
$logo .= 'Devs';
echo $logo;
echo'<br>';

$count = 0;
echo $count++; // result: 0
echo $count; // result: 1
echo'<br>';

$count = 0;
echo ++$count; // result: 1
echo'<br>';

$count = 10;
echo $count--; // result: 10
echo --$count; // result: 8
echo'<br>';

var_dump(4 == 4); // result: bool(true)
var_dump(4 == 2); // result: bool(false)
var_dump('PHP' == 'PHPDevs'); // result: bool(false)
echo'<br>';

var_dump(4 === 4); // result: bool(true)
var_dump(4 === 2); // result: bool(false)
echo'<br>';

var_dump(4 != 4); // result: bool(false)
var_dump(4 != 2); // result: bool(true)
var_dump('PHP' != 'PHPDevs'); // result: bool(true)
echo'<br>';

var_dump(4 !== 4); // result: bool(false)
var_dump(4 !== '4'); // result: bool(true)
var_dump(4 !== 2); // result: bool(true)
echo'<br>';

var_dump(4 > 7); // result: bool(false)
var_dump(4 > 4); // result: bool(false)
var_dump(4 > 2); // result: bool(true)
echo'<br>';

var_dump(4 >= 7); // result: bool(false)
var_dump(4 >= 4); // result: bool(true)
var_dump(4 >= 2); // result: bool(true)
echo'<br>';

var_dump(4 < 7); // result: bool(true)
var_dump(4 < 4); // result: bool(false)
var_dump(4 < 2); // result: bool(false)
echo'<br>';

var_dump(4 <= 7); // result: bool(true)
var_dump(4 <= 4); // result: bool(true)
var_dump(4 <= 2); // result: bool(false)
echo'<br>';

var_dump(4 <=> 4); // result: int(0)
var_dump(4 <=> 7); // result: int(-1)
var_dump(4 <=> 2); // result: int(1)
echo'<br>';

echo `pwd`;
echo'<br>';

$version = 8;
echo "PHP {$version}!";
echo'<br>';

$person1 = 'Jan';
$person2 = 'Piotr';
$person3 = 'Adrian';
$person4 = 'Marek';
$person5 = 'Adam';
echo'<br>';

$people = ['Jan', 'Piotr', 'Adrian', 'Marek', 'Adam'];
echo'<br>';

$people = [
    'Jan',
    'Piotr',
    'Adrian',
    'Marek',
    'Adam'
];
echo'<br>';

$people = array('Jan', 'Piotr', 'Adrian', 'Marek', 'Adam');
echo'<br>';

$people = ['Jan', 'Piotr', 'Adrian', 'Marek', 'Adam'];
var_dump($people);
echo'<br>';

$people = ['Jan', 'Piotr', 'Adrian', 'Marek', 'Adam'];
echo $people[1]; // result: Piotr
echo $people[4]; // result: Adam
echo'<br>';

$people = ['Jan', 'Piotr', 'Adrian', 'Marek', 'Adam'];
echo $people[2]; // result: Adrian
$people[2] = 'Andrzej';
echo $people[2]; // result: Andrzej
echo'<br>';

$people = [2 => 'Jan', 'Piotr', 'Adrian', 'Marek', 'Adam'];
echo'<br>';

$people = [
    3 => 'Jan',
    7 => 'Piotr',
    5 => 'Adrian',
    0 => 'Marek',
    2 => 'Adam'
];
echo'<br>';

$people = ['Jan', 'Piotr', 'Adrian', 'Marek', 'Adam'];
$people[] = 'Arkadiusz';
echo'<br>';

$people = ['Jan', 'Piotr', 'Adrian', 'Marek', 'Adam'];
$people[7] = 'Arkadiusz';
echo'<br>';

$person = [
    'name' => 'Jan',
    'age' => 26,
    'address' => 'Kwiatowa 1',
    'email' => 'jan@example.com'
];
echo'<br>';

echo $person['address']; 
echo'<br>';

$person = [
    'name' => 'Jan',
    4 => 26,
    null => 'Kwiatowa 1',
    2.8 => 'jan@example.com'
];
var_dump($person);
echo'<br>';

echo $person['address']; // nie dziala bo u góry nie jest zdefiniowane address, jest null
echo'<br>';

$person['surname'] = 'Kowalski';
echo $person['name'] . ' ' . $person['surname'];
echo'<br>';

$people = [
    'Jan' => [
        'age' => 26,
        'address' => 'Kwiatowa 1',
        'email' => 'jan@example.com'
    ],
    'Piotr' => [
        'age' => 32,
        'address' => 'Ogrodowa 8',
        'email' => 'piotr@example.com'
    ]
];
echo'<br>';
echo $people['Piotr']['age']; // result: 32
echo'<br>';

var_dump(...['Jan', 'Piotr', 'Marek']);
echo'<br>';

$oldPeople = ['Jan', 'Piotr'];
$people = ['Arkadiusz', ...$oldPeople, 'Marek'];
var_dump($people);
echo'<br>';