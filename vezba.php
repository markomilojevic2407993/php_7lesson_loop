<?php   

$car=[
    'BMW',
    'audi',
    'mercede'
];

foreach($car as $keyCar){
    if($keyCar=='BMW'){
        continue;

    }
        echo "<br>".$keyCar; 
    
    
}