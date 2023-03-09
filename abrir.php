
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
            <a class="nav-link" id="nave" href="#">Made by Maria Zambrano</a>
        </li>
            </ul>
        </div>
    </div>
</nav>
    </div>

    <form action="#" method="POST">
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Presione la nota que desea abrir</label>
    </div>
    
    <?php

$carpeta="notas/";

    if($handler=opendir($carpeta)){
        while(false !==($archivo=readdir($handler))){
            if($archivo !="." && $archivo != ".."){
                echo "<ul> <li style='margin-left: 115px;'><a style='color:black; font-family:'Century Gothic'; font-size: 25px; margin-bottom: 10px; list-style-type: circle;' href='notas/$archivo'target='_self'>$archivo<br></a></li></ul>";
            }
        }
        closedir($handler);
    }


?>
    <a class="btn btn-outline-dark" href="index.php" role="button" style="margin-top:25px;">Volver</a>
    </form>

    </body>
</html>





