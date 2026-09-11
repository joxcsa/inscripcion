<?php include '../Modelo/conexion.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Historial Académico</title>
    <link rel="stylesheet" href="../Recursos/Diseño/estilo_forms.css"> <!-- Aquí está tu CSS neumórfico -->
    <link href="../Recursos/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
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
    <h2 class="text-center">Formulario Historial Académico</h2>

    <form action="../Controlador/agregar_historial_academico.php" method="post">
        <div class="mb-3">
            <label for="buscar_ncontrol">Numero de Control del Alumno</label>
            <input type="search" class="form-control" id="buscar_ncontrol" placeholder="Escribe el número de control">
            <input type="hidden" name="id_alumno" id="id_alumno">
            <div id="sugerencias" class="list-group mt-2" style="max-height: 150px; overflow-y: auto;"></div>
          </div>
        
           <?php
            // Consulta para obtener grupos
            $seleccion = "SELECT * FROM materias ORDER BY nombre";
            $consulta = mysqli_query($conectar, $seleccion);
        ?>

        <div class="campo">
          <label class="form-label">Materia</label>
          <select name="materia" id="materia" class="form-select" required>
                <option value="">Seleccione una materia</option>
                <?php while ($renglon = mysqli_fetch_array($consulta)) { ?>
                    <option value="<?php echo $renglon['id_materia']; ?>"> 
                        <?php echo $renglon['nombre']; ?>
                    </option>
                <?php } ?>
            </select>
        </div>


        <div class="campo">
            <label>Calificación</label>
            <input type="number" name="calificacion" required>
        </div>
        <div class="campo">
            <label>Asistencia</label>
            <input type="number" name="asistencia" required>
        </div>
        <div class="campo">
            <label>Observaciones</label>
            <textarea name="observaciones" rows="3"></textarea>
        </div>
        <button type="submit" class="btn-enviar">Guardar</button>
    </form>
</div>

<footer>
    <p>© 2025 - Todos los derechos reservados</p>
</footer>
<script>
  const alumnos = <?php
  $consulta = mysqli_query($conectar, "SELECT * FROM alumno");
  $alumnos_array = [];
  while ($row = mysqli_fetch_assoc($consulta)) {
    $alumnos_array[] = [
      'id_alumno' => $row['id_alumno'],
      'n_control' => $row['n_control']
    ];
  }
  echo json_encode($alumnos_array);
?>;

const input = document.getElementById('buscar_ncontrol');
const sugerencias = document.getElementById('sugerencias');
const hiddenIdAlumno = document.getElementById('id_alumno');

input.addEventListener('input', () => {
  const query = input.value.trim().toUpperCase();
  sugerencias.innerHTML = '';
  
  // Limpiar el id_alumno cuando se modifica el input
  hiddenIdAlumno.value = '';
  
  if (query.length === 0) return;
  
  const resultados = alumnos.filter(alumno => 
    alumno.n_control.toUpperCase().includes(query)
  );
  
  resultados.forEach(alumno => {
    const item = document.createElement('button');
    item.type = 'button';
    item.className = 'list-group-item list-group-item-action';
    item.textContent = alumno.n_control;
    
    item.addEventListener('click', () => {
      input.value = alumno.n_control;
      hiddenIdAlumno.value = alumno.id_alumno; // ESTO ES LO IMPORTANTE
      sugerencias.innerHTML = '';
      
      // Debug: mostrar el ID que se está asignando
      console.log('ID Alumno seleccionado:', alumno.id_alumno);
    });
    
    sugerencias.appendChild(item);
  });
});

// Validación antes de enviar el formulario
document.querySelector('form').addEventListener('submit', function(e) {
  const idAlumno = document.getElementById('id_alumno').value;
  
  if (!idAlumno || idAlumno === '') {
    e.preventDefault();
    alert('Por favor, selecciona un alumno válido de la lista de sugerencias');
    return false;
  }
  
  console.log('Enviando formulario con ID Alumno:', idAlumno);
});
</script>
<script src="../Recursos/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
