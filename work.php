<?php     


    $name=['marko',
    'petar',
    'nikola',
    'davor',
    'klicko'
];


$randomName=$name[array_rand($name)];
$marko=1;
$nikola=1;
if($randomName=='marko'){
    $marko+=1;
}elseif($randomName=='nikola'){
    $nikola++;
}

$poruka="";

foreach ($name as $key ) {
    $poruka.=$key.' ';
   
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

    <h1>Ovo su sva imena:    <?= $poruka ?>   </h1>
    
        <form>
            <input type="text" name="ime" value="<?= $randomName ?>">
            <button type="submit">Promeni ime</button>
        </form>

        <p><?= $marko ?></p>
        <p><?= $nikola ?></p>

    </body>
</html>