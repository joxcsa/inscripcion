<?php include '../modelo/conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Citas Escolares</title>
  <link href="../Recursos/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="../Recursos/Diseño/estilo_citas.css" rel="stylesheet">
</head>
<body>
<header>
  <div class="logo">
    <img src="../Recursos/Imagenes_Escuela/logo.png" alt="Logo CETis 23">
    <h1>CETis No. 23</h1>
  </div>
  <nav>
    <a href="Pagina_Principal.html">Inicio</a>
    <a href="citas.php">Citas</a>
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
<div class="container text-center my-5">
  <h2 class="main-title">Solicita tu cita</h2>
  <p class="mt-3 mb-4">Registra tu cita o consulta una existente usando tu Numero de control.</p>
  <div class="d-flex justify-content-center gap-4">
    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalRegistrar">
      Registrar cita <i class="bi bi-calendar-plus"></i>
    </button>
    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalConsultar">
      Consultar cita <i class="bi bi-search"></i>
    </button>
  </div>
</div>
<footer>
  &copy; 2025 CETis No. 23 - Todos los derechos reservados.
  <br>
  Consulta nuestros terminos y Condiciones:<br>
    <a href="terminos_condi.html">Términos y Condiciones </a><br>
    <a href="Avis-priva.html">Privacidad</a><br>
    <a href="ayuda.html">Soporte</a>
</footer>

<div class="modal fade" id="modalRegistrar" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Registrar Cita Escolar</h5>
        <button type="button" class="btn-close btn-close-black" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form id="formRegistrar" action="../Controlador/agregar_citas.php" method="post">
          <div class="mb-3">
            <label for="buscar_ncontrol">Numero de Control del Alumno</label>
            <input type="search" class="form-control" id="buscar_ncontrol" placeholder="Escribe el número de control">
            <input type="hidden" name="id_alumno" id="id_alumno">
            <div id="sugerencias" class="list-group mt-2" style="max-height: 150px; overflow-y: auto;"></div>
          </div>
          <div class="mb-3">
            <label class="form-label">Nombre del Alumno</label>
            <input type="text" class="form-control" id="nombre" name="nombAlu" required readonly>
          </div>
          <div class="mb-3">
            <?php $consulta = mysqli_query($conectar, "SELECT * from administrativo"); ?>
            <label for="selectVent">Ventanillas</label>
            <select class="form-select" id="selectVent" name="ventanilla">
              <option selected>Opciones</option>
              <?php foreach ($consulta as $renglon) { ?>
              <option value="<?php echo $renglon['id_administrativo']; ?>" data-vent="<?php echo $renglon['nombre'] . ' ' . $renglon['apellido1'] . ' ' . $renglon['apellido2']; ?>">
               <?php echo $renglon['ventanilla']; ?>
              </option>
              <?php } ?>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Administrativo</label>
            <input type="text" class="form-control" id="nomAdmin" name="nomAdmin" required readonly>
          </div>
          <div class="mb-3">
            <label class="form-label">Fecha de la cita</label>
            <input type="date" class="form-control" id="fecha" name="fecha" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Hora de la cita</label>
            <select class="form-select" id="hora" name="hora" required>
            <option selected>Selecciona una hora</option>
          </select>
          </div>
          <button type="submit" class="btn btn-dark">Registrar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Consultar -->
<div class="modal fade" id="modalConsultar" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Consultar Cita</h5>
        <button type="button" class="btn-close btn-close-black" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form id="formConsultar">
          <div class="mb-3">
            <label for="buscar_ncontrol_consulta">Número de Control del Alumno</label>
            <input type="search" class="form-control" id="buscar_ncontrol_consulta" placeholder="Escribe el número de control">
            <div id="sugerenciasConsulta" class="list-group mt-2" style="max-height: 150px; overflow-y: auto;"></div>
          </div>
          <button type="submit" class="btn btn-dark">Buscar</button>
        </form>
        <div id="resultadoCita" class="mt-3"></div>
      </div>
    </div>
  </div>
</div>
<script>
  const alumnos = <?php
    $consulta = mysqli_query($conectar, "SELECT * FROM alumno");
    $alumnos_array = [];
    while ($row = mysqli_fetch_assoc($consulta)) {
      $alumnos_array[] = [
        'id_alumno' => $row['id_alumno'],
        'n_control' => $row['nombre'],
        'nombre_completo' => $row['nombre'] . ' ' . $row['apellido1'] . ' ' . $row['apellido2'] ];
    }
    echo json_encode($alumnos_array);
  ?>;
  const input = document.getElementById('buscar_ncontrol');
  const sugerencias = document.getElementById('sugerencias');
  input.addEventListener('input', () => {
    const query = input.value.trim().toUpperCase();
    sugerencias.innerHTML = '';
    if (query.length === 0) return;
    const resultados = alumnos.filter(alumno => alumno.n_control.toUpperCase().includes(query));
    resultados.forEach(alumno => {
      const item = document.createElement('button');
      item.type = 'button';
      item.className = 'list-group-item list-group-item-action';
      item.textContent = alumno.n_control;
      item.addEventListener('click', () => {
        input.value = alumno.n_control;
        document.getElementById('nombre').value = alumno.nombre_completo;
        document.getElementById('id_alumno').value = alumno.id_alumno;
        sugerencias.innerHTML = '';
      });
      sugerencias.appendChild(item);
    });
  });
</script>
<script>
  document.getElementById('selectVent').addEventListener('change', function () {
    const selectedOption = this.options[this.selectedIndex];
    const nombreAdmin = selectedOption.getAttribute('data-vent');
    document.getElementById('nomAdmin').value = nombreAdmin || '';
  });
</script>
<script>
  const formConsultar = document.getElementById('formConsultar');
  const resultadoCita = document.getElementById('resultadoCita');

 formConsultar.addEventListener('submit', function(e) {
  e.preventDefault();
  const n_control = inputConsulta.value.trim().toUpperCase();

  if (!n_control) {
    resultadoCita.innerHTML = `<div class="alert alert-warning">Por favor, ingresa un número de control.</div>`;
    return;
  }
  fetch('../Controlador/buscarcita.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: 'n_control=' + encodeURIComponent(n_control)
  })
  .then(response => response.json())
  .then(data => {
    if (data.success) {
      resultadoCita.innerHTML = `
        <div class="alert alert-success">
          <strong>Estudiante:</strong> ${data.nombre_completo}<br>
          <strong>Fecha de cita:</strong> ${data.fecha}<br>
          <strong>Hora de cita:</strong> ${data.hora}
        </div>`;
    } else {
      resultadoCita.innerHTML = `<div class="alert alert-danger">${data.mensaje}</div>`;
    }
  })
  .catch(error => {
    console.error('Error:', error);
    resultadoCita.innerHTML = '<div class="alert alert-danger">Ocurrió un error al consultar la cita.</div>';
  });
});

</script>
 <!-- Script horas -->

 <script>
  const horaSelect = document.getElementById('hora');
  const fechaInput = document.getElementById('fecha');
  const ventanillaSelect = document.getElementById('selectVent');

  function generarHoras() {
    const fecha = fechaInput.value;
    const ventanilla = ventanillaSelect.value;
    
    // Validar fecha y ventanilla seleccionados
    if (!fecha || !ventanilla || ventanilla === 'Opciones') {
      horaSelect.innerHTML = '<option selected>Selecciona una hora</option>';
      return;
    }

    fetch(`../Controlador/obtener_horas_ocupadas.php?fecha=${fecha}&ventanilla=${ventanilla}`)
      .then(res => res.json())
      .then(data => {
        const horasOcupadas = Array.isArray(data.ocupadas) ? data.ocupadas : [];

        horaSelect.innerHTML = '<option selected>Selecciona una hora</option>';

        const inicio = 7 * 60;  // 7:00 am en minutos
        const fin = 18 * 60;    // 6:00 pm en minutos
        let hayDisponibles = false;

        for (let minutos = inicio; minutos <= fin; minutos += 15) {
          const h = String(Math.floor(minutos / 60)).padStart(2, '0');
          const m = String(minutos % 60).padStart(2, '0');
          const hora = `${h}:${m}`;

          const option = document.createElement('option');
          option.value = hora;

          if (horasOcupadas.includes(hora)) {
            option.textContent = `${hora} (ocupada)`;
            option.disabled = true;
          } else {
            option.textContent = hora;
            hayDisponibles = true;
          }

          horaSelect.appendChild(option);
        }

        if (!hayDisponibles) {
          const option = document.createElement('option');
          option.value = '';
          option.textContent = 'No hay horas disponibles';
          option.disabled = true;
          horaSelect.appendChild(option);
        }
      })
      .catch(error => {
        console.error('Error al obtener horas ocupadas:', error);
        horaSelect.innerHTML = '<option selected>Selecciona una hora</option>';
      });
  }

  fechaInput.addEventListener('change', generarHoras);
  ventanillaSelect.addEventListener('change', generarHoras);
</script>

<script>
const inputConsulta = document.getElementById('buscar_ncontrol_consulta');
const sugerenciasConsulta = document.getElementById('sugerenciasConsulta');

inputConsulta.addEventListener('input', () => {
  const query = inputConsulta.value.trim().toUpperCase();
  sugerenciasConsulta.innerHTML = '';
  if (query.length === 0) return;

  const resultados = alumnos.filter(alumno => alumno.n_control.toUpperCase().includes(query));
  
  resultados.forEach(alumno => {
    const item = document.createElement('button');
    item.type = 'button';
    item.className = 'list-group-item list-group-item-action';
    item.textContent = alumno.n_control;
    item.addEventListener('click', () => {
      inputConsulta.value = alumno.n_control;
      sugerenciasConsulta.innerHTML = '';
    });
    sugerenciasConsulta.appendChild(item);
  });
});
 </script>
<script src="../Recursos/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
