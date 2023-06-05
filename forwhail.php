<?php   

$name=['marko',
'petar',
'nikola',
'davor',
'klicko'
];


for ($i=0; $i <count($name) ; $i++) { 
    echo $name[$i].':';
}

for ($i=0; $i <10 ; $i++) { 
    echo 'Ispisi ovo bre'."<br>";
}


$x=0;
while($x < count($name)){
    echo $name[$x]."<br>";
    $x++;
}



$a=11;
do {
    echo 'ispis';
} while ($a <= 10);

$a++;


?>