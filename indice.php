<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : "";
    $hora = isset($_POST['hora']) ? $_POST['hora'] : "";
    $ocupación = isset($_POST['ocupación']) ? $_POST['ocupación'] : "";
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $Nacionalidad = isset($_POST['Nacionalidad']) ? $_POST['Nacionalidad'] : "";
    $ingles_name = isset($_POST['ingles_name']) ? $_POST['ingles_name'] : '';
    $ingles_name = is_array($ingles_name) ? implode(', ', $ingles_name) : $ingles_name;
    $Progra = isset($_POST['Progra']) ? (is_array($_POST['Progra']) ? implode(', ', $_POST['Progra']) : $_POST['Progra']) : "";
    $data_list = isset($_POST['data_list']) ? $_POST['data_list'] : "";
    $Habilidades = isset($_POST["habilidades"]) ? implode(", ", $_POST["habilidades"]) : "";
    $texx = isset($_POST['texx']) ? $_POST['texx'] : "";

    $conn = new mysqli('localhost', 'root', '', 'formulario');
    if ($conn->connect_error) {
        die('coneccion fallada : ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO formulario(nombre, apellido, hora, ocupación, telefono, email, Nacionalidad, ingles_name, Progra, data_list, Habilidades, texx) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssssss", $nombre, $apellido, $hora, $ocupación, $telefono, $email, $Nacionalidad, $ingles_name, $Progra, $data_list, $Habilidades, $texx);

        if ($stmt->execute()) {
            echo "Funcionó";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
}
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Formulario</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class="Caja">
    <div class="Titulo">
      <h1>FORMULARIO</h1>
    </div>
    <div class="Formulario">
      <form method="post">
        <label for="nombre">Nombres:</label>
        <br>
        <input type="text" id="nombre" name="nombre" placeholder="Nombre(s)" required><br>
        <label for="apellido">Apellidos:</label>
        <input type="text" id="apellido" name="apellido"placeholder="Apellido(s)" required><br>
        <label for="hora">Fecha de Nacimiento:</label>
        <input type="date" id="hora" name="hora" required><br>
        <label for="ocupación">Ocupación:</label>
        <input type="text" id="ocupación" name="ocupación" placeholder="Ocupación" required><br>
	<label for="telefono">Teléfono:</label>
	<input type="tel" id="telefono" name="telefono" placeholder="Teléfono" required><br>
	<label for="email">Email:</label>
	<input type="email" id="email" name="email" placeholder="Email" required><br>
        <label for="Nacionalidad">Nacionalidad:</label>
        <br>
        <select id="Nacionalidad" name="Nacionalidad" size="5" required>
          <option value="Español">Español</option>
          <option value="Arabe">Arabe</option>
          <option value="Portugues">Portugues</option>
          <option value="Chino">Chino</option>
          <option value="Otro">Otro</option>
        </select>
        <br>
        <label for="ingles_name">Nivel de ingles</label>
        <br>
        <input type="radio" id="basico" name="ingles_name" value="Basico">
        <label for="basico">Basico</label>
        <input type="radio" id="intermedio" name="ingles_name" value="Intermedio">
        <label for="intermedio">Intermedio</label>
        <input type="radio" id="avanzado" name="ingles_name" value="Avanzado">
        <label for="avanzado">Avanzado</label>
        <input type="radio" id="fluido" name="ingles_name" value="Fluido">
        <label for="fluido">Fluido</label>
        <br>
        <label for="Progra">Lenguajes de Programación:</label>
        <br>
        <select multiple="multiple" name="Progra[]" id="Progra">
          <option value="C">C</option>
          <option value="C++">C++</option>
          <option value="Python">Python</option>
          <option value="Java">Java</option>
        </select>
        <br>
        <label for="data_list">Aptitudes</label>
        <br>
        <input list="data_list" id="data_list" name="data_list">
        <datalist id="data_list">
          <option value="Responsabilidad">Responsabilidad</option>
          <option value="Honestidad">Honestidad</option>
          <option value="Respetuoso">Respetuoso</option>
          <option value="Capaz">Capaz</option>
          <option value="Liderazgo"></option>
        </datalist>
	<br>
        <input type="checkbox" id="Habilidades" name="Habilidades[]" value="Trabajo en equipo">
        <label for="Habilidades"> Trabajo en equipo</label><br>
        <input type="checkbox" id="Habilidades2" name="Habilidades[]" value="Resilencia">
        <label for="Habilidades2"> Resilencia</label><br>
        <input type="checkbox" id="Habilidades3" name="Habilidades[]" value="Oratoria">
        <label for="Habilidades3"> Oratoria</label><br>
        <input type="checkbox" id="Habilidades4" name="Habilidades[]" value="Puntualidad">
        <label for="Habilidades4">Puntualidad</label><br>
        <label for="texx">Perfil:</label>
        <br>
        <textarea id="texx" name="texx" rows="4" cols="50" required>
        Información del perfil de la persona
        </textarea>
        <br>
        <button type="submit" value="Submit">Submit</button>
        <button type="reset" value="Reset">Reset</button>
        </form>
      </form>
    </div>
  </div>
</body>

</html>