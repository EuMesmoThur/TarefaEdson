<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="body">
    <?php
    session_start();
    if (isset($_SESSION['nome']) == true) {
        echo "<div>";
        echo "<a href='cadastro.php'><h1>Cadastrar</h1></a>";
        echo "<a href='dados.php'<h1>Dados</p></h1>";
        echo "</div>";
    }else {
        echo "<a href='cadastro.php'><h1>Cadastrar</h1></a>";
    }
    ?>
</body>
</html>