

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<style>
     h1{
        text-align: center;
        font-family: 'Share Tech Mono', monospace;
     }
     #calculadora{
background: #1c4670;
text-align: center;
width: 450px;
display: flex;
border-radius: 10px;
padding: 10px;
margin: 30px auto;
     }
#display{
    
    text-align: center;
    
    padding: 10px;
    margin: 15px;
    font-family: 'Share Tech Mono', monospace;
}
#results{
    border-radius: 10px;
    background: #ccc;
    text-align: right;
    height: 100px;
    font-size: 24px;
    padding: 30px 10px 10px 10px;
}
#keyboard{
    margin: 15px;
    

}
#i1{
    margin-top:10px;
}
</style>
</head>
<body>
    <div class="container">
        <h1>Calculadora</h1>
        <div id="calculadora">
<form action="" method="POST">
    <div id="display">
        <div id="results">
            Resultado:
            
            <?php
if(isset($_POST['acao'])):
$n1 = str_replace(',','.', $_POST['n1']);
$n2 = str_replace(',','.', $_POST['n2']);
$tipo =  $_POST['tipo'];
if($tipo=='+'):
    $calcular = $n1 + $n2;
    elseif($tipo =='-'):
        $calcular = $n1 - $n2;
    elseif($tipo =='*'):
        $calcular = $n1 * $n2;
    else:
        $calcular = $n1 / $n2;
    endif;
    $calcular = str_replace(',','.', $calcular);
    echo $calcular;
    
endif;
?>
        </div>
        <div id="keyboard">
            <div class="row">
<div class="col-12">
    <input type="text" name="n1" class="form-control" required>
</div>
<div class="col-12">
    <select name="tipo" class="form-select mb-3 bg-info" required id="i1">
        <option selected>Selecione um operador</option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
</div>
<div class="col-12">
    <input type="text" name="n2" class="form-control mb-3" placeholder="Digite um número" required>
</div>
<div class="col-12">
    <button type="submit" class="btn btn-danger" name="acao">=</button> 
</div>
            </div>
        </div>
    </div>
</form>
        </div>
    </div>

   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>