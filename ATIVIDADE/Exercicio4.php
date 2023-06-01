<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>
<body>
    <form action="" method="post">
    
<label for="">Preencha a caixa</label> <br>
<input type="checkbox" name="Caixa" id="">


<input type="submit" value="Enviar">


</form>
</body>
</html>



<?php

foreach ($_POST as $key => $value) {

    echo "$key - $value <br>";

} 


if ($value == null) {
    echo "A caixa não foi preenchida";
}

?>