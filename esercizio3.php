//esercizio 3

Dati i seguenti array:
$words1 = [
    'vostro', 67, 'essere', 'colle', 'mi', 'sempre', [
        'oscura', 'era', 89, ['mezzo', 'E'],
        'ritrovai', 'per'
    ],
    'diritta'
];
$words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'possa',
    'elemento3' => [
        'Virgilio',
        'Favore',
        'favore',
        ['Fortuna']
    ],
    'fine'=>'!'
];
Crea una variabile di tipo Stringa chiamata $results che stampi a terminare il seguente testo, attraverso l’accesso agli array sopra: “E possa la Fortuna essere sempre a vostro favore!“.
HINT:

Non tutti gli elementi all’interno dell’array sono utili, e alcuni elementi mancano proprio. Scegli come risolvere il problema nel modo piu' opportuno: nuove variabili, concatenamenti, ecc ecc.


<?php
$words1 = [
    'vostro', 67, 'essere', 'colle', 'mi', 'sempre', [
        'oscura', 'era', 89, ['mezzo', 'E'],
        'ritrovai', 'per'
    ],
    'diritta'
];
$words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'possa',
    'elemento3' => [
        'Virgilio',
        'Favore',
        'favore',
        ['Fortuna']
    ],
    'fine'=>'!'
];

// $results= $words1[6][3][1];
// $results= $words2['elemento2'];

$results= $words1[6][3][1] . " " . $words2['elemento2'] . " la " . $words2['elemento3'][3][0] . " " . $words1[2] . " " . $words1[5] . " al " . $words1[0] . " " . $words2['elemento3'][2] . "!";

var_dump($results)
?>
