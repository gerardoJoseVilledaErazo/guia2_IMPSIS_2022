<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Libro</title>
</head>
<body>
    <form method="POST" action="../controllers/LibroController.php" >
        <label>Código:              </label><input type="number" name="codigo" placeholder="Digite el Código" required />
        <br><br>
        <label>Título:              </label><input type="text" name="titulo" placeholder="Digite el Título" required />
        <br><br>
        <label>Año de Publicación:  </label><input type="number" name="anioPublicacion" placeholder="Digite el Año de Publicación" required />
        <br><br>
        <label>Estado de Publicación:  </label><input type="boolval" name="estadoPrestamo" placeholder="Digite 1 ó 0, true or false" required />
        <br><br>

        <input type="submit" value = "Enviar" />
    </form>
</body>
</html>