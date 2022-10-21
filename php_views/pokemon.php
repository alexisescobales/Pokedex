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
                <div class="row mb-3">
                    <label for="region" class="col-sm-1 col-form-label">Tipo</label>
                    <div class="col-sm-10">
                        <!----------------------------------VENENO------------------------------------------->
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="veneno" name="veneno" value="veneno">
                            <label class="form-check-label" for="veneno"></label>
                            <img src="../media/veneno.PNG">
                        </div>
                        <!----------------------------------FUEGO------------------------------------------->
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="fuego" name="fuego" value="fuego">
                            <label class="form-check-label" for="fuego"></label>
                            <img src="../media/fuego.PNG">
                        </div>
                        <!----------------------------------VOLADOR------------------------------------------->
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="volador" name="volador" value="volador">
                            <label class="form-check-label" for="volador"></label>
                            <img src="../media/volador.PNG">
                        </div>
                        <!----------------------------------AGUA------------------------------------------->
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="agua" name="agua" value="agua">
                            <label class="form-check-label" for="agua"></label>
                            <img src="../media/agua.PNG">
                        </div>
                        <!----------------------------------ELECTRICO------------------------------------------->
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="electrico" name="electrico"
                                value="electrico">
                            <label class="form-check-label" for="electrico"></label>
                            <img src="../media/electrico.PNG">
                        </div>
                        <!----------------------------------HADA------------------------------------------->
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="hada" name="hada" value="hada">
                            <label class="form-check-label" for="hada"></label>
                            <img src="../media/hada.PNG">
                        </div>
                        <!----------------------------------LUCHA------------------------------------------->
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="lucha" name="lucha" value="lucha">
                            <label class="form-check-label" for="lucha"></label>
                            <img src="../media/lucha.PNG">
                        </div>
                        <!----------------------------------PSIQUICO------------------------------------------->
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="psiquico" name="psiquico"
                                value="psiquico">
                            <label class="form-check-label" for="psiquico"></label>
                            <img src="../media/psiquico.PNG">
                        </div>
                        <!----------------------------------PLANTA------------------------------------------->
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="planta" name="planta" value="planta">
                            <label class="form-check-label" for="planta"></label>
                            <img src="../media/planta.PNG">
                        </div>

                        <!----------------------------------2 COLUMNA EN TIPOS------------------------------------------->
                        <div class="col-sm-10">
                            <!----------------------------------BICHO------------------------------------------->
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="bicho" name="bicho" value="bicho">
                                <label class="form-check-label" for="bicho"></label>
                                <img src="../media/bicho.PNG">
                            </div>
                            <!----------------------------------DRAGON------------------------------------------->
                            <div class="dragon">
                                <!-- div ya que checkbox dragon no estaba bien centrado-->
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="dragon" name="dragon"
                                        value="dragon">
                                    <label class="form-check-label" for="dragon"></label>
                                    <img src="../media/dragon.PNG">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!----------------------------------ALTURA------------------------------------------->
                <div class="row mb-3">
                    <label for="altura" class="col-sm-1 col-form-label">Altura</label>
                    <div class="col-sm-10">
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" name="altura" min="1" max="1000" step="0.1"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2">cm</span>
                        </div>
                    </div>
                </div>
                <!----------------------------------ALTURA------------------------------------------->




                <!----------------------------------PESO-------------------------------------------->
                <div class="row mb-3">
                    <label for="peso" class="col-sm-1 col-form-label">Peso</label>
                    <div class="col-sm-10">
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" name="peso" min="0" max="1000" step="0.01"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2">kg</span>
                        </div>
                    </div>
                </div>
                <!----------------------------------PESO-------------------------------------------->




                <!----------------------------------EVOLUCION------------------------------------------->
                <div class="row mb-3">
                    <label for="evolucion" class="col-sm-1 col-form-label">Evolución</label>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="sin_evolucion" name="inlineRadioOptions"
                                value="sin_evolucion">
                            <label class="form-check-label" for="sin_evolucion">Sin evolución</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="primera_evolucion"
                                name="inlineRadioOptions" value="primera_evolucion">
                            <label class="form-check-label" for="primera_evolucion">Primera Evolución</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="otras_evoluciones"
                                name="inlineRadioOptions" value="otras_evoluciones">
                            <label class="form-check-label" for="otras_evoluciones">Otras Evoluciones</label>
                        </div>
                    </div>
                </div>
                <!----------------------------------EVOLUCION------------------------------------------->


                <!----------------------------------IMAGEN/SUBMINT------------------------------------------------>
                <div class="row mb-3">
                    <label for="numero" class="col-sm-1 col-form-label">Imagen</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="imagen" name="imagen"
                            accept="image/png, image/jpeg" placeholder="Elige La Imagen Del Pokemon">
                    </div>
                </div>
                <!----------------------------------IMAGEN/SUBMINT------------------------------------------------>


                <!----------------------------------SUBMINT------------------------------------------------>

                <fieldset>
                    <input type="submit" value="Aceptar">
                    <input type="submit" class="link-button" value="Cancelar"/>
                </fieldset>
                <!----------------------------------SUBMINT------------------------------------------------>

            </form>
        </div>
    </div>

</body>

</html>