<?php  


$broj=[9, 22, 53, 36, 46, 13];

$rezultat=0;


    
    

    foreach($broj as $keyBroj){

        
     $sum=array_sum($keyBroj);


    if($keyBroj%9==0){
        continue;
    }
    

    
    $rezultat+=$keyBroj;
}





?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>


            <h1><?= $rezultat ?></h1>


    </body>
</html>