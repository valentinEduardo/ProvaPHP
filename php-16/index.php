<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="post">
         <div>
        <label for="user">Digite um nome</label>
        <input type="text" name="user" value="" required>
    </div>
    <div>
        <label for="email">Digite seu email</label>
        <input type="email" name="email" value="" required>
    </div>

    <div>
        <input type="submit" value="Cadastrar">
    </div>
    </form>

<div>
    <a href="list.php"><button>Listagem</button></a>
</div>
<div>
    <a href="updtade.php"><button>Atualizar</button></a>
</div>
   
</body>
</html>