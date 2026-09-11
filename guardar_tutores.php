<?php include '../Modelo/conexion.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Formulario Tutores</title>
  <link rel="stylesheet" href="../Recursos/Diseño/estilo_forms.css" />
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


<div class="formulario-contenedor">
  <h2 class="text-center">Formulario Tutores</h2>

  <form action="../Controlador/agregar_tutor.php" method="post">
    <div class="campo">
      <label>Nombre Completo</label>
      <input type="text" name="nombre_completo" maxlength="100" required />
    </div>
    <div class="campo">
      <label>Relación</label>
      <input type="text" name="relacion" maxlength="50" required />
    </div>
    <div class="campo">
      <label>Dirección</label>
      <textarea name="direccion" rows="3" required></textarea>
    </div>
    <div class="campo">
      <label>Teléfono</label>
      <input type="text" name="telefono" maxlength="15" required />
    </div>
    <div class="campo">
      <label>Correo</label>
      <input type="email" name="correo" maxlength="50" required />
    </div>
    <button type="submit" class="btn-enviar">Guardar</button>
  </form>
</div>

<footer>
  <p>© 2025 - Todos los derechos reservados</p>
</footer>

</body>
</html>
