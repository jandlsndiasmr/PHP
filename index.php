<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula-14-05</title>
    <link rel="stylesheet" href="style.css">
</head>
    <h1>array-laços</h1>
    <h2>impressão com echo</h2>
    <?php
    $var = array(1,2,3,4);
    ?>
        <?php
        $A1 = array("antônio", "luíz", "josé", "joão");
        echo"$A1[0]";
        echo"<br>";
        echo"$A1[1]";
        ?>

    <h2>impressão com for</h2>
        <?php
            for ($x=0; $x<=3; $x++){
                echo"na posição $x o valor é: $A1[$x]";
                echo"<br>";

            }

        ?>

    <h2>Impressão com foreach</h2>
    <?php
        foreach ($A1 as $dados)
        echo"$dados";
        echo"<br>";
    ?>

    <h2>impressão com print</h2>

    <?php
        print_r($var);

    ?>

    <h2>array multidimensional</h2>
    <?php
    $aluno = array ("Maria" =>
                        array ("idade" => "54",
                            "sexo" => "feminino",
                            "endereço" => "GBI"),
                    "José" =>
                        array ("idade" => "59",
                               "sexo" => "masculino",
                               "endereço" => "CNN")      
                    );

    print_r($aluno["Maria"] ["sexo"]);
    ?>

</body>
</html>