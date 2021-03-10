<?php

$eleve = [

    'prenom' => 'Simon',
    'nom' => 'Ecoffet',
    'age' => 30 ,
    'note' => [15, 20, 16]
];

$long=count($eleve['note']);
$total =0;
function moyene(){
    global $eleve;
    global $long;
    global $total;
    for($i = 0; $i < $long ; $i++){
      
        $total=$total+$eleve['note'][$i];
    }
    $total=$total/$long;
};
moyene($eleve['note']);


echo 'Bonjour je m\'apelle'. " " .$eleve['nom'] .' '.$eleve['prenom'] ." " . 'j\'ai'." ". $eleve['age']." ".'ans et j\'ai'." ".$total." ".'de moyene';

?>