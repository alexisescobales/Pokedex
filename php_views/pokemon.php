<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<form name="Formulario" method="post">

<!----------------------------------NUMERO----------------------------------------->
<fieldset>
<label for="numero">Numero</label>
<input type="text" id="numero" name="numero" maxlength="3" placeholder="Número de pokemon">
</fieldset> 
<!----------------------------------NUMERO----------------------------------------->



<!----------------------------------NOMBRE----------------------------------------->
<fieldset>
<label for="nombre">Numero</label>
<input type="text" id="nombre" name="nombre" placeholder="Nombre de pokemon">
</fieldset>
<!----------------------------------NOMBRE----------------------------------------->




<!----------------------------------REGION----------------------------------------->
<fieldset>
<label for="region">Region</label>
<select name="region" id="region">
    <option value="kanto">Kanto</option>
    <option value="jotho">Jotho</option>
    <option value="hoenn">Hoenn</option>
    <option value="sinnoh">Sinnoh</option>
    <option value="teselia">Teselia</option>
</select>
</fieldset>
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
</fieldset> <!--Región-->
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
</fieldset> <!--Peso-->
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
</fieldset> <!--Peso-->
<!----------------------------------IMAGEN/SUBMINT------------------------------------------------>


<!----------------------------------SUBMINT------------------------------------------------>

<fieldset>
<input type="submit" value="Aceptar">
<input type="url" id="cancel" name="cancel">
</fieldset> <!--Peso-->
<!----------------------------------SUBMINT------------------------------------------------>

</form>

</body>
</html>