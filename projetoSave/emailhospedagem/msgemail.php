<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem e-mail</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<p><a href="../index.html">Inicio</a></p>
    <header>
        <h1>Copie o texto abaixo: </h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nomecliente"];
            $ip1 = $_GET["ip1"];
            $ip2 = $_GET["ip2"];
            $dominio = $_GET["dominio"];
            $usuario = $_GET["usuario"];
            $senha = $_GET["senha"];
            $end1 = $_GET["end1"];
            $end2 = $_GET["end2"];
            $dns1 = $_GET["dns1"];
            $dns2 = $_GET["dns2"];
            $host = $_GET["host"];
        ?>
        <a href="  " target="_blank">
            <button type="button">Copiar</button>
        <p><a href="javascript:history.go(-1)">Voltar a página anterior</a></p>
    </main>
</body>
</html>