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
    $array=[
        "Agropecuaria" => [
            "Maria" => [
                "Solo"=>[
                    "Nota1"=> 4,
                    "Nota2" => 5
                ],
                "Sementes"=>[
                    "Nota1"=> 3,
                    "Nota2" => 4
                ],
                "Plantio"=>[
                    "Nota1"=> 5,
                    "Nota2" => 2
                ]
                ],
            "Heloisa" => [
                "Solo"=>[
                    "Nota1"=> 1,
                    "Nota2" => 2
                ],
                "Sementes"=>[
                    "Nota1"=> 6,
                    "Nota2" => 3
                ],
                "Plantio"=>[
                    "Nota1"=> 4,
                    "Nota2" => 3
                ]
                ],
            "Ana" => [
                "Solo"=>[
                    "Nota1"=> 4,
                    "Nota2" => 1
                ],
                "Sementes"=>[
                    "Nota1"=> 3,
                    "Nota2" => 2
                ],
                "Plantio"=>[
                    "Nota1"=> 7,
                    "Nota2" => 3
                ]
                ],
            "João" => [
                "Solo"=>[
                    "Nota1"=> 3,
                    "Nota2" => 2
                ],
                "Sementes"=>[
                    "Nota1"=> 5,
                    "Nota2" => 5
                ],
                "Plantio"=>[
                    "Nota1"=> 4,
                    "Nota2" => 4
                ]
            ]
        ],
        "Informática" => [
            "Matheus" => [
                "ASW"=>[
                    "Nota1"=> 5,
                    "Nota2" => 5
                ],
                "BD"=>[
                    "Nota1"=> 3,
                    "Nota2" => 3
                ],
                "PSW"=>[
                    "Nota1"=> 2,
                    "Nota2" => 2
                ]
                ],
            "Carol" => [
                "ASW"=>[
                    "Nota1"=> 4,
                    "Nota2" =>4 
                ],
                "BD"=>[
                    "Nota1"=> 6,
                    "Nota2" => 1
                ],
                "PSW"=>[
                    "Nota1"=> 3,
                    "Nota2" => 2
                ]
                ],
            "Jeovana" => [
                "ASW"=>[
                    "Nota1"=> 2,
                    "Nota2" => 1
                ],
                "BD"=>[
                    "Nota1"=> 5,
                    "Nota2" => 5
                ],
                "PSW"=>[
                    "Nota1"=> 3,
                    "Nota2" => 1
                ]
                ],
            "Fernando" => [
                "ASW"=>[
                    "Nota1"=> 9,
                    "Nota2" => 0
                ],
                "BD"=>[
                    "Nota1"=> 0,
                    "Nota2" => 0
                ],
                "PSW"=>[
                    "Nota1"=> 3,
                    "Nota2" => 1
                ]
            ]           
        ]
    ];
    echo "<h1>"."Impressão Disciplinas:"."</h1>";
    foreach($array as $chave => $cursos){
        echo $chave;
        echo "<pre>";
    };
    echo "<h1>"."Impressão do total de alunos:"."</h1>";
    foreach($array as $chave => $cursos){
        foreach($cursos as $Nchave => $alunos){
            echo $Nchave;
            echo "<pre>";
        }
    }
    echo "<h1>"."Impressão Alunos por Curso:"."</h1>";
    foreach($array as $chave => $cursos){
        echo $chave;
        echo "<pre>";
        foreach($cursos as $Nchave => $alunos){
            echo $Nchave;
            echo "<pre>";
        }
    }
    echo "<h1>"."Alunos com nota maior que 5:"."</h1>";
    foreach($array as $chave => $cursos){
        foreach($cursos as $Nchave => $alunos){
            foreach($alunos as $fchave => $disciplina){
                foreach($disciplina as $xchave => $notas){
                    echo $notas["nota1"];
                    echo "<pre>";
                    }
                }
            }
        }
    ?>
</body>
</html>