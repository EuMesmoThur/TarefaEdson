<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Tarefa</title>
</head>
<body class="body">
    <div class="container">
    <?php
        session_start();
        session_destroy();
        echo "<div>";
        echo "<h1>Cadastro Excluido.</h1>";
        echo "<a href='index.php'><h3>Home</h3></a>";
        echo "<div>";
    ?>  
    </div>  
</body>
</html>
