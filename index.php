<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  

<hr>
<?php
    $email = '';
    $nome = '';
    if (isset($_POST['enviar'])) {
        if (empty($_POST['email'])) {
            echo "informe o e-mail <br>";
        } else {
            $email = $_POST['email'];
        }
        if (empty($_POST['nome'])) {
            echo "informe o nome <br>";
        } else {
            $nome = $_POST['nome'];
        }
      
    }
   
?>
<form method="POST">
    <input type="text" name="email" value="<?php echo $email ?>">
    <input type="text" name="nome" value="<?php echo $nome ?>">
    <input type="submit" value="enviar" name="enviar">
</form>
</body>

</html>