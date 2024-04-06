<?php 

$ravens = [
    'pilot_name' => 'BB',
    '<br>',
    'ac_name' => 'Tyrant',
    '<br>',
    'series' => 'AC3',
    '<br>'
];

foreach($ravens as $raven){
    echo $raven;
}

foreach($ravens as $key => $value){
    echo $key.' is '.$value;
    "<br>";
}

$links = [
    'Rosental' => [
        'Leo' => 'Nobris',
        '<br>',
        'zero'=> 'sun',
        '<br>',
        'kal' => 'sin',
        '<br>'
    ],
    'GA' => [
        'Maria' => 'light',
        '<br>',
        'takafumi' =>'raiden',
        '<br>',
        'rodie'=>'rock',
        '<br>'
    ]
    ];

    foreach($links as $pilots){
        foreach($pilots as $pilot){
            echo $pilot;
        }
    }

?>