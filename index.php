<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Converta um valor</h1> 

    <form action="">
    <label for="">Insira o valor a ser convertido em dólares</label>
    <input type="" name="valor">

        <?php
            if (isset($_GET["valor"]))
            {
            $usd = $_GET["valor"];
            $usd = $usd * 5.01;
            }
            echo $usd;
        ?>

    </form>

    <h1>Calcule seu IMC</h1>
    
    <form action="" type="get">
        <label for="peso">Insira seu peso (em kg)</label>
        <input type="number" name="peso">
        
        <label for="altura">Insira sua altura (em metros)</label>
        <input type="number" name="altura" step="0.01">
        
        <input type="submit" value="Calcular IMC">
    </form>

    <?php
    if (isset($_GET["peso"]) && isset($_GET["altura"])) {
        $peso = $_GET["peso"];
        $altura = $_GET["altura"];

        if ($altura > 0) {
            $imc = $peso / ($altura * $altura);
            echo "Seu IMC é: " . $imc;
       
        }
    }
        ?>
    </form>

</body>
</html>