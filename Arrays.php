<?php
$person = [
    'Serggeevich',
    'name' => 'Victor',
    'age' => 18,
    'hobby' => 'swimming',
    'isMarried' => true,
    'petName' => 'Barsik'
];
$personVictor = [
    'name' => 'Victor',
    'age' => 34,
    'hobby' => 'running',
    'isMarried' => false,
    'petName' => 'Sharik'
];
$personElena = [
    'name' => 'Elena',
    'age' => 16,
    'hobby' => 'reading',
    'isMarried' => false,
    'petName' => 'Murka'
];
//echo $person;
print_r($person[0] . "\n");
print_r($personVictor);
print_r($personElena);
echo $person['name'] . "\n", $person['age'] . "\n", $person['hobby'] . "\n", $person['isMarried'] . "\n", $person['petName'];
echo "\n" . $personVictor['name'] . "\n", $personVictor['age'] . "\n", $personVictor['hobby'] . "\n", $personVictor['isMarried'] . "\n", $personVictor['petName'];
echo "\n" . $personElena['name'] . "\n", $personElena['age'] . "\n", $personElena['hobby'] . "\n", $personElena['isMarried'] . "\n", $personElena['petName'];

