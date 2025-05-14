<?php

// traditional array

// $giture = 'vala';
// $giture = 'Explorer';
// $giture = 'Strat'; Not good

$gitures = ['Vala','Explorer','Strat'];

// print_r($gitures);

// if(isset($gitures[3])){
//     echo $gitures[3];
// }else{
//     echo 'Guiter does not exist';
// }

// associative array
$gitures2 = [
    'prs' => 'Vela',
    'gibson' => 'Explorer',
    'fender' => 'Strat',
    'Prs' => 'Single Cut'
];
print_r($gitures2);
if(isset($gitures2['Prs'])){
    echo $gitures2['Prs'];
}else{
    echo 'Giter dose not exist';
}