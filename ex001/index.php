<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dados do servidor</h1>
    <?php 
    $nome = "João Victor";
    echo "O meu nome é $nome <br> ";
    
    //date_default_timezone_set("America/Sao_Paulo");
    echo "<br> Hoje é dia ".date ("d/M/Y");
    echo "<br> E a hora atual é : " .date("G:i:s T");

    ?>
</body>
</html>