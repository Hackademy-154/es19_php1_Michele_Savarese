esercizio 4

Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere
es.

$users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
  ...
  ...
];

<?php

$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
    ['name' => 'Claretta', 'surname' => 'Barletta', 'gender' => 'F'],
    ['name' => 'Giacomone', 'surname' => 'Pelandrone', 'gender' => 'M'],
    ['name' => 'Giansen', 'surname' => 'Sfavillanti', 'gender' => 'Trans'],

];

foreach ($users as $key => $user)
{
if ($user['gender'] == "M") {
    echo"Buongiorno Sig. ". $user['name'] . " " . $user['surname']  . "\n";
} elseif ($user['gender'] == "F") {
    echo"Buongiorno Sig.Ra ". $user['name'] . " " . $user['surname']  . "\n";
} else {
    echo"Buongiorno ". $user['name'] . " " . $user['surname']  . "\n";

}


}


?>
