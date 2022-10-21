<?php include ('../php_librarys/library.php'); ?>
<style>
<?php include '../style/css_datos_maestros.css';
?>
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Maestros</title>
    <link rel="stylesheet" href="../bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <script src="../bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body class="background">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../media/pokedex.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Pokedex
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Datos Maestros
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../php_views/pokemon_list.php">Pokemons</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-6 g-4">
            <div class="col p-3">
                <div class="card border-secondary h-100 ">
                    <img src="../media/001.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">001 - Bulbasur</h5>
                        <span class="badge bg-success text-dark">Planta</span>
                        <span class="badge bg-warning text-dark">Veneno</span>
                        <p class="card-text"></p>
                    </div>
                    <div class="card-footer ">
                        <form>
                            <div class="position-absolute bottom-0 end-0">
                                <button type="button" class="btn btn-outline-danger">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                                <button type="button" class="btn btn-outline-primary">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col p-3">
                <div class="card border-secondary h-100">
                    <img src="../media/002.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">002 - Ivysaur</h5>
                        <span class="badge bg-success text-dark">Planta</span>
                        <span class="badge bg-warning text-dark">Veneno</span>
                        <p class="card-text"></p>
                    </div>
                    <div class="card-footer">
                        <form>
                            <div class="position-absolute bottom-0 end-0">
                                <button type="button" class="btn btn-outline-danger">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                                <button type="button" class="btn btn-outline-primary">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



            <div class="col p-3">
                <div class="card border-secondary h-100">
                    <img src="../media/003.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">003 - Charmander</h5>
                        <span class="badge bg-warning text-dark">Fuego</span>
                        <p class="card-text"></p>
                    </div>
                    <div class="card-footer">
                        <form>
                            <div class="position-absolute bottom-0 end-0">
                                <button type="button" class="btn btn-outline-danger">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                                <button type="button" class="btn btn-outline-primary">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



            <div class="col p-3">
                <div class="card border-secondary h-100">
                    <img src="../media/004.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">004- Squirtle</h5>
                        <span class="badge bg-primary text-dark">Agua</span>
                        <p class="card-text"></p>
                    </div>
                    <div class="card-footer">
                        <form>
                            <div class="position-absolute bottom-0 end-0">
                                <button type="button" class="btn btn-outline-danger">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                                <button type="button" class="btn btn-outline-primary">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



            <div class="col p-3">
                <div class="card border-secondary h-100">
                    <img src="../media/006.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">005 - Jigglypuff</h5>
                        <span class="badge bg-secondary text-dark">Normal</span>
                        <span class="badge bg-warning text-dark">Hada</span>
                        <p class="card-text"></p>
                    </div>
                    <div class="card-footer">
                        <form>
                            <div class="position-absolute bottom-0 end-0">
                                <button type="button" class="btn btn-outline-danger">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                                <button type="button" class="btn btn-outline-primary">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



            <div class="col p-3">
                <div class="card border-secondary h-100">
                    <img src="../media/007.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">005 - Jigglypuff</h5>
                        <span class="badge bg-secondary text-dark">Normal</span>
                        <span class="badge bg-warning text-dark">Hada</span>
                        <p class="card-text"></p>
                    </div>
                    <div class="card-footer">
                        <form>
                            <div class="position-absolute bottom-0 end-0 ">
                                <button type="button" class="btn btn-outline-danger">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                                <button type="button" class="btn btn-outline-primary">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="plus">
            <a href="../php_views/pokemon.php" title="Website name"><i class="bi bi-plus-circle"></i></a>
            </div>



        </div>
    </div>

</body>

</html>