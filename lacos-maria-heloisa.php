<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laços</title>
</head>
<body>
    <?php
    $array=[
        "Agropecuaria" => [
            "Maria" => [
                "Solo"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ],
                "Sementes"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ],
                "Plantio"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ]
                ],
            "Heloisa" => [
                "Solo"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ],
                "Sementes"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ],
                "Plantio"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ]
                ],
            "Ana" => [
                "Solo"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ],
                "Sementes"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ],
                "Plantio"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ]
                ],
            "João" => [
                "Solo"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ],
                "Sementes"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ],
                "Plantio"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ]
            ]
        ],
        "Informática" => [
            "Maria" => [
                "ASW"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ],
                "BD"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ],
                "PSW"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ]
                ],
            "Heloisa" => [
                "ASW"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ],
                "BD"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ],
                "PSW"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ]
                ],
            "Ana" => [
                "ASW"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ],
                "BD"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ],
                "PSW"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ]
                ],
            "João" => [
                "ASW"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ],
                "BD"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ],
                "PSW"=>[
                    "Nota1"=> 4.5,
                    "Nota2" => 5
                ]
            ]
        ]
    ];
    foreach($array as $valor => $cursos){
        echo $valor;
        echo "<pre>";
        foreach($cursos as $Nvalor => $alunos){
            echo $Nvalor;
            echo "<pre>";
            foreach($alunos as $fvalor => $disciplina){
                echo $fvalor;
                echo "<pre>";
                foreach($disciplina as $xvalor => $notas){
                    echo $xvalor;
                    echo "<pre>";
                    echo $notas;
                    echo "<pre>";
                }
            }
        }
    }
    ?>
</body>
</html>
