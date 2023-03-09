<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloc de Notas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css\styles.css">



</head>
<body>

    <div>
    <nav class="navbar navbar-expand fixed-top bg-black">
        <div class="container-fluid">
            <a class="navbar-brand" id="navbar-color" href="#">NOTEPAD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" id="nave" href="#">Made by María Zambrano</a>
        </li>
            </ul>
        </div>
    </div>
</nav>
    </div>

    <form action="php/crearArchivos.php" method="POST">
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Título de la Nota</label>
    <input type="text" class="form-control" name="asunto" placeholder="Inserte el titulo">
</div>
    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-labe">Contenido de la Nota</label>
    <textarea class="form-control" name="contenido" rows="5"></textarea>
</div>
    <input class="btn btn-outline-dark" type="submit" value="Guardar nota">
    <a class="btn btn-outline-dark" href="abrir.php" role="button">Abrir/ leer nota</a>
    <a class="btn btn-outline-dark" href="directorios.php" role="button">Crear Carpeta</a>
    </form>

    <br><br>

</body>
</html>


