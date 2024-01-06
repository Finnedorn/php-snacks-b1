<?php
// gli array in php sono un poco differenti da quelli in js
// in php gli array hanno chiavi
// se non si sfecificano le chiavi di base con un nome, il sistema le catalogherà con un numero da 0 in poi
// in questo caso avendo dichiarato per ogni valore una key 
// chiameremo questo array un array associativo!

$matches = [
    [
        'team(home)' => 'Bologna- Virtus',
        'team(guest)' => 'Milano- Armani',
        'score(home)' => '30',
        'score(guest)' => '50'
    ],
    [
        'team(home)' => 'Napoli- Frittatina',
        'team(guest)' => 'Firenze- Lampredotto',
        'score(home)' => '45',
        'score(guest)' => '65'
    ],
    [
        'team(home)' => 'Molisnt',
        'team(guest)' => 'Perugia',
        'score(home)' => '57',
        'score(guest)' => '42'
    ]
]
?>