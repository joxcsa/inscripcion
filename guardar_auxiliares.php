<?php
include '../Modelo/conexion.php'; 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Auxiliares</title>
    <link rel="stylesheet" href="../Recursos/Diseño/estilo_forms.css"> <!-- Asegúrate de incluir tu archivo CSS aquí -->
</head>
<body>

<header>

  <div class="logo">
    <img src="../Recursos/Imagenes_Escuela/logo.png" alt="Logo CETis 23">
    <h1>CETis No. 23</h1>
  </div>
  <nav>
    <a href="Pagina_Principal.html">Inicio</a>
    <div class="dropdown">
      <button class="dropbtn">Formularios</button>
      <div class="dropdown-content">
        <a href="../Vista/guardar_alumno.php">Alumnos</a>
        <a href="../Vista/guardar_administrativo.php">Administrativo</a>
        <a href="../Vista/guardar_aulas.php">Aulas</a>
        <a href="../Vista/guardar_auxiliares.php">Auxiliares</a>
        <a href="../Vista/guardar_boleta.php">Boleta</a>
        <a href="../Vista/guardar_carreras.php">Carreras</a>
        <a href="../Vista/guardar_documentos.php">Documentos</a>
        <a href="../Vista/guardar_grado.php">Grado</a>
        <a href="../Vista/guardar_grupos.php">Grupo</a>
        <a href="../Vista/guardar_historial_academico.php">Historial Academico</a>
        <a href="../Vista/guardar_historial_disciplina.php">Historial Disciplina</a>
        <a href="../Vista/guardar_materias.php">Materias</a>
        <a href="../Vista/guardar_profesor.php">Profesor</a>
        <a href="../Vista/guardar_turno.php">Turno</a>
        <a href="../Vista/guardar_tutores.php">Tutores</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Mostrar</button>
      <div class="dropdown-content">
        <a href="../Mostrar/mostrar_tabla_alumno.php">Alumnos</a>
        <a href="../Mostrar/mostrar_tabla_administrativo.php">Administrativo</a>
        <a href="../Mostrar/mostrar_tabla_aula.php">Aulas</a>
        <a href="../Mostrar/mostrar_tabla_auxiliar.php">Auxiliares</a>
        <a href="../Mostrar/mostrar_tabla_boleta.php">Boleta</a>
        <a href="../Mostrar/mostrar_tabla_carrera.php">Carreras</a>
        <a href="../Mostrar/mostrar_tabla_documentos.php">Documentos</a>
        <a href="../Mostrar/mostrar_tabla_grado.php">Grado</a>
        <a href="../Mostrar/mostrar_tabla_grupo.php">Grupo</a>
        <a href="../Mostrar/mostrar_tabla_historial_academico.php">Historial Academico</a>
        <a href="../Mostrar/mostrar_tabla_historial_disciplina.php">Historial Disciplina</a>
        <a href="../Mostrar/mostrar_tabla_materia.php">Materias</a>
        <a href="../Mostrar/mostrar_tabla_profesor.php">Profesor</a>
        <a href="../Mostrar/mostrar_tabla_turno.php">Turno</a>
        <a href="../Mostrar/mostrar_tabla_tutor.php">Tutores</a>
      </div>
    </div>
    <a href="Pagina_carreras.html">Carreras</a>
    <a href="#">Perfil</a>
  </nav>  
</header>

<section class="banner">
  <img src="../Recursos/Imagenes_Escuela/banner.png" alt="Entrada del CETis 23">
</section>

<!-- Formulario -->
<div class="formulario-contenedor">
    <h2 class="text-center">Datos del Auxiliar</h2>
    <form action="../Controlador/agregar_auxiliar.php" method="post">
        <div class="campo">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" required maxlength="25">
        </div>
        <div class="campo">
            <label for="apellido1">Apellido Paterno</label>
            <input type="text" id="apellido1" name="apellido1" required maxlength="25">
        </div>
        <div class="campo">
            <label for="apellido2">Apellido Materno</label>
            <input type="text" id="apellido2" name="apellido2" required maxlength="25">
        </div>
        <div class="campo">
            <label for="rfc">RFC</label>
            <input type="text" id="rfc" name="rfc" required maxlength="13">
        </div>
        <div class="campo">
            <label for="sexo">Sexo</label>
            <select name="sexo" id="sexo" required>
                <option value="">Selecciona...</option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
                <option value="Otro">Otro</option>
            </select>
        </div>
        <div class="campo">
            <label for="telefono">Teléfono</label>
            <input type="text" id="telefono" name="telefono" required maxlength="20">
        </div>
        <div class="campo">
            <label for="experiencia">Años de Experiencia</label>
            <input type="number" id="experiencia" name="experiencia" required min="0" max="99">
        </div>
        <div class="campo">
            <label for="cuenta_bancaria">Cuenta Bancaria</label>
            <input type="text" id="cuenta_bancaria" name="cuenta_bancaria" required maxlength="25">
        </div>
        <div class="campo">
            <label for="direccion">Dirección</label>
            <textarea id="direccion" name="direccion" rows="3" required maxlength="200"></textarea>
        </div>
        <button type="submit" class="btn-enviar">Guardar</button>
    </form>
</div>

</body>
</html>
