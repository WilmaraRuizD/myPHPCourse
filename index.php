<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h1>Practicas con formularios</h1>  
<form action="procesarFormulario.php" method="POST" enctype="multipart/form-data">
<label >Nombre
<input type="text" name="nombre">
</label>
<br>
<label >Edad
<input type="number" name="edad">
</label>
<br>
<p>Sexo:</p>
<label >
<input type="radio" name="sexo" value="Masculinos">
Masculinos
</label>
<label >
<input type="radio" name="sexo" value="Femenino">
Femenino</label>
<br>
<p>Roles:</p>
<label >
<br>
<select name="estudio" >
  <option value="Primaria">Primaria</option>
  <option value="Primaria">Segundario</option>
</select>
<br>
<input type="checkbox" name="roles[]" value="Administrado">
Administrado</label>
<label >
<input type="checkbox" name="roles[]" value="Editor">
Editor</label>
<label >
<input type="checkbox" name="roles[]" value="Moderador">
Moderador</label>
<br>
<label for="mensaje">Mensaje</label>
<br>
<textarea name="mensaje" id="" cols="30" rows="10"></textarea>
<br>
<label >
  Image:
  <br>
<input type="file" name="image">
</label>
<br>
<br>
<button type="submit">Enviar</button>


</form>
</body>
</html>