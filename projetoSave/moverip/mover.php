<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado IP</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<p><a href="../index.html">Inicio</a></p>
    <header>
        <h1>Resultado Mover IP</h1>
    </header>
    <main>
        <?php 
            $n = $_GET["nomeambiente"];
            $inf = $_GET["idnodefonte"];
            $ind = $_GET["idnodedestino"];
            $ipm = $_GET["ipmigrado"];
            $token = $_GET["token"];


            echo("https://app.jelastic.saveincloud.net/1.0/environment/binder/rest/swapextips?envName=$n&session=$token&sourceNodeId=$inf&targetNodeId=$ind&ips=$ipm");
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>