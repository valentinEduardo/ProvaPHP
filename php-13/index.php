<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET['action'])){
        echo "Você Clicou!";
    }
    
    ?>
    <form action="" method="get">
        <button type="submit" name="action">ENVIAR</button>
    </form>
</body>
</html>