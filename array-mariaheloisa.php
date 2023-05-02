<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY</title>
</head>
<body>
    <?php
    $aluno=[
    'disciplinas' => [
        'psw'=> [
            'avaliação'=> 3,
            'trabalho'=> 3,
            'atividades'=> 4
        ],
        'bd'=> [
            'avaliação'=> 2.5,
            'trabalho'=> 2.3,
            'atividades'=> 3.3
        ],
        'redes'=> [
            'avaliação'=> 3,
            'trabalho'=> 3,
            'atividades'=> 4
        ],
        'asw'=> [
            'avaliação'=> 2.8,
            'trabalho'=> 2.5,      
            'atividades'=> 3.8
        ]
        ]
    ];
 //como imprimir todos:
//    echo '<pre>'; 
//       print_r($aluno);
//     echo '</pre>';

//como imprimir so redes:
//    echo '<pre>'; 
//       print_r($aluno['disciplinas']['redes']) ;
//     echo '</pre>';

//nota final das disciplinas

    echo "Nota final de redes:";
    echo '<pre>'; 
    print_r($aluno['disciplinas']['redes']['avaliação']+$aluno['disciplinas']['redes']['atividades']+$aluno['disciplinas']['redes']['trabalho']) ;
    echo '</pre>';
    echo "Nota final de psw:";
    echo '<pre>'; 
    print_r($aluno['disciplinas']['psw']['avaliação']+$aluno['disciplinas']['psw']['atividades']+$aluno['disciplinas']['psw']['trabalho']) ;
    echo '</pre>';
    echo "Nota final de asw:";
    echo '<pre>'; 
    print_r($aluno['disciplinas']['asw']['avaliação']+$aluno['disciplinas']['asw']['atividades']+$aluno['disciplinas']['asw']['trabalho']) ;
    echo '</pre>';
    echo "Nota final de bd:";
    echo '<pre>'; 
    print_r($aluno['disciplinas']['bd']['avaliação']+$aluno['disciplinas']['bd']['atividades']+$aluno['disciplinas']['bd']['trabalho']) ;
    echo '</pre>';
    ?>
</body>
</html>