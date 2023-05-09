<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $listaOrdenada = [
        [
            'id'=> 3,
            'idade'=> 16,
            'nome'=> 'maria'
        ],
        [
            'id'=> 2,
            'idade'=> 40,
            'nome'=> 'jeovana'
        ],
         [
            'id'=> 1,
            'idade'=> 50,
            'nome'=> 'heloisa'
        ]
         ];
    foreach($listaOrdenada as $key => $value){
        echo $key;
        echo "<pre>";
        print_r($value);
        echo "</pre>";
    }
    foreach($listaOrdenada as $chave => $valor){
        foreach($valor as $Nchave => $Nvalor){
        echo $Nchave;
        echo "<pre>";
        echo $Nvalor;
        echo "</pre>";
    }
}
    ?>
</body>
</html>