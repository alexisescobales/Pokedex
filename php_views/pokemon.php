<!DOCTYPE html>
<html>

<head>
    <title>Formulario Pokedex</title>
    <link rel="stylesheet" href="../bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <script src="../bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
    <?php include '../style/formulario.css';
    ?>
    </style>
</head>

<body>

    <div class="card">
        <div class="card-header">
            <img class="" src="../media/pokeball.png" alt="" width="50" height="50" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <form name="Formulario" method="post">

                <!----------------------------------NUMERO----------------------------------------->
                <div class="row mb-3">
                    <label for="numero" class="col-sm-1 col-form-label">Numero</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="numero" name="numero" maxlength="3"
                            placeholder="Número de pokemon">
                    </div>
                </div>
                <!----------------------------------NUMERO----------------------------------------->



                <!----------------------------------NOMBRE----------------------------------------->
                <div class="row mb-3">
                    <label for="nombre" class="col-sm-1 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre de pokemon">
                    </div>
                </div>
                <!----------------------------------NOMBRE----------------------------------------->




                <!----------------------------------REGION----------------------------------------->
                <div class="row mb-3">
                    <label for="region" class="col-sm-1 col-form-label">Region</label>
                    <div class="col-sm-10">
                        <select name="region" id="region" class="form-select" aria-label="Default select example">
                            <option value="kanto">Kanto</option>
                            <option value="jotho">Jotho</option>
                            <option value="hoenn">Hoenn</option>
                            <option value="sinnoh">Sinnoh</option>
                            <option value="teselia">Teselia</option>
                        </select>
                    </div>
                </div>

                <!----------------------------------REGION----------------------------------------->



                <!----------------------------------TIPO------------------------------------------->
                <fieldset>
                    <label for="tipo">Tipo</label>
                    <!--Veneno-->
                    <input type="checkbox" id="veneno" name="veneno" value="veneno">
                    <label for="veneno">Veneno</label>
                    <!--Fuego-->
                    <input type="checkbox" id="fuego" name="fuego" value="fuego">
                    <label for="fuego">Fuego</label>
                    <!--Volador-->
                    <input type="checkbox" id="volador" name="volador" value="volador">
                    <label for="volador">Volador</label>
                    <!--Agua-->
                    <input type="checkbox" id="agua" name="agua" value="agua">
                    <label for="agua">Agua</label>
                    <!--Eléctrico-->
                    <input type="checkbox" id="electrico" name="electrico" value="electrico">
                    <label for="electrico">Eléctrico</label>
                    <!--Hada-->
                    <input type="checkbox" id="hada" name="hada" value="hada">
                    <label for="hada">Hada</label>
                    <!--Lucha-->
                    <input type="checkbox" id="lucha" name="lucha" value="lucha">
                    <label for="lucha">Lucha</label>
                    <!--Psíquico-->
                    <input type="checkbox" id="psiquico" name="psiquico" value="psiquico">
                    <label for="psiquico">Psíquico</label>
                </fieldset>
                <!----------------------------------TIPO------------------------------------------->




                <!----------------------------------ALTURA------------------------------------------->
                <fieldset>
                    <label for="altura">Altura</label>
                    <input type="number" name="altura" min="1" max="1000" step="0.1">
                </fieldset>
                <!----------------------------------ALTURA------------------------------------------->




                <!----------------------------------PESO-------------------------------------------->
                <fieldset>
                    <label for="peso">Peso</label>
                    <input type="number" name="peso" min="0" max="1000" step="0.01">
                </fieldset>
                <!----------------------------------PESO-------------------------------------------->




                <!----------------------------------EVOLUCION------------------------------------------->
                <fieldset>
                    <label for="evolucion">Evolución</label>

                    <input type="radio" id="sin_evolucionar" name="sin_evolucionar" value="sin_evolucionar">
                    <label for="sin_evolucionar">Sin evolucionar</label>

                    <input type="radio" id="primera_evolucion" name="primera_evolucion" value="primera_evolucion">
                    <label for="primera_evolucion">Primera Evolucion</label>

                    <input type="radio" id="otra_evolucion" name="otra_evolucion" value="otra_evolucion">
                    <label for="otra_evolucion">Otras Evoluciones</label>
                </fieldset>
                <!----------------------------------EVOLUCION------------------------------------------->


                <!----------------------------------IMAGEN/SUBMINT------------------------------------------------>
                <fieldset>
                    <label for="imagen">Imagen</label>
                    <input type="file" id="imagen" name="imagen" accept="image/png, image/jpeg">
                </fieldset>
                <!----------------------------------IMAGEN/SUBMINT------------------------------------------------>


                <!----------------------------------SUBMINT------------------------------------------------>

                <fieldset>
                    <input type="submit" value="Aceptar">
                    <input type="submit" class="link-button" value="Cancelar" />
                </fieldset>
                <!----------------------------------SUBMINT------------------------------------------------>

            </form>
        </div>
    </div>

</body>

</html>