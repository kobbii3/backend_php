<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Digite la siguiente info:</h1>
    Nombre:
    <form action="04_metodo_post.php" method="post">
        <input type="text" name="nombre"/>
        <br>
        Fecha:
        <input type="date" name="fecha"/>
        <br>
        Observacion:
        <input type="text" name="obs"/>
        <br>
        <input type="submit" value="Enviar"/>
    </form>
    <h2>Informacion enviada es:</h2>
    <?php
    print_r($_POST);

    ?>
</body>
</html>