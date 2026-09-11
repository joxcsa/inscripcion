<?php
include '../Modelo/conexion.php'; 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Boleta</title>
    <link rel="stylesheet" href="../Recursos/Diseño/estilo_forms.css">
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
    <h2 class="text-center">Datos de la Boleta</h2>

    <form action="../Controlador/agregar_boleta.php" method="post">
        <?php
            // Consulta para obtener turnos
            $seleccion = "SELECT * FROM turno";
            $consulta = mysqli_query($conectar, $seleccion);
        ?>

        <div class="campo">
          <label class="form-label">Turno</label>
          <select name="turno" id="turno" class="form-select" required>
                <option value="">Seleccione un turno</option>
                <?php while ($renglon = mysqli_fetch_array($consulta)) { ?>
                    <option value="<?php echo $renglon['id_turno']; ?>"> 
                        <?php echo $renglon['turno']; ?>
                    </option>
                <?php } ?>
            </select>
        </div>

        <?php
            // Obtener todas las carreras desde la base de datos
            $seleccion = "SELECT * FROM carreras ORDER BY nombre";
            $consulta = mysqli_query($conectar, $seleccion);

            $carreras = [];
            while ($row = mysqli_fetch_assoc($consulta)) {
                $carreras[] = $row;
            }
        ?>

        <div class="campo">
          <label class="form-label">Carrera</label>
          <select name="carreras" id="carreras" class="form-select" required>
            <option value="">Seleccione una carrera</option>
          </select>
        </div>

        <?php
            // Consulta para obtener grados
            $seleccion = "SELECT * FROM grado ORDER BY grado";
            $consulta = mysqli_query($conectar, $seleccion);
        ?>

        <div class="campo">
          <label class="form-label">Grado</label>
          <select name="grado" id="grado" class="form-select" required>
                <option value="">Seleccione un grado</option>
                <?php while ($renglon = mysqli_fetch_array($consulta)) { ?>
                    <option value="<?php echo $renglon['id_grado']; ?>"> 
                        <?php echo $renglon['grado']; ?>
                    </option>
                <?php } ?>
            </select>
        </div>

        <?php
            // Consulta para obtener grupos
            $seleccion = "SELECT * FROM grupos ORDER BY grupo";
            $consulta = mysqli_query($conectar, $seleccion);
        ?>

        <div class="campo">
          <label class="form-label">Grupo</label>
          <select name="grupo" id="grupo" class="form-select" required>
                <option value="">Seleccione un grupo</option>
                <?php while ($renglon = mysqli_fetch_array($consulta)) { ?>
                    <option value="<?php echo $renglon['id_grupo']; ?>"> 
                        <?php echo $renglon['grupo']; ?>
                    </option>
                <?php } ?>
            </select>
        </div>

        <?php
            // Consulta para obtener alumnos
            $seleccion = "SELECT * FROM alumno ORDER BY nombre";
            $consulta = mysqli_query($conectar, $seleccion);
        ?>

        <div class="campo">
          <label class="form-label">Alumno</label>
          <select name="alumno" id="alumno" class="form-select" required>
            <option value="">Seleccione un alumno</option>
            <?php while ($renglon = mysqli_fetch_array($consulta)) { ?>
                <option value="<?php echo $renglon['id_alumno']; ?>"> 
                    <?php echo $renglon['nombre'] . ' ' . $renglon['apellido1']; ?>
                </option>
            <?php } ?>
          </select>
        </div>  
        
        <button type="submit" class="btn-enviar">Guardar</button>
    </form>
</div>

<script>
// Pasar datos de PHP a JavaScript
const carreras = <?php echo json_encode($carreras); ?>;

// Configuración del filtrado de carreras por turno
const carrerasPorTurno = {
    1: [8, 9],   // Matutino: Contabilidad(8), Logística(9)
    2: [10, 11]  // Vespertino: Programación(10), Electromecánica(11)
};

// Función para filtrar carreras según el turno seleccionado
function filtrarCarrerasPorTurno() {
    const turnoSelect = document.getElementById("turno");
    const carrerasSelect = document.getElementById("carreras");
    
    if (!turnoSelect || !carrerasSelect) {
        console.error("No se encontraron los elementos select");
        return;
    }

    turnoSelect.addEventListener("change", function() {
        const turnoSeleccionado = parseInt(this.value);
        
        // Limpiar opciones anteriores
        carrerasSelect.innerHTML = '<option value="">Seleccione una carrera</option>';
        
        // Si no hay turno seleccionado, salir
        if (!turnoSeleccionado || !carrerasPorTurno[turnoSeleccionado]) {
            return;
        }
        
        // Obtener las carreras permitidas para este turno
        const carrerasPermitidas = carrerasPorTurno[turnoSeleccionado];
        
        // Filtrar y agregar las carreras correspondientes
        carreras.forEach(carrera => {
            const idCarrera = parseInt(carrera.id_carreras);
            
            if (carrerasPermitidas.includes(idCarrera)) {
                const option = document.createElement("option");
                option.value = carrera.id_carreras;
                option.textContent = carrera.nombre;
                carrerasSelect.appendChild(option);
            }
        });
        
        // Debug en consola
        console.log(`Turno ${turnoSeleccionado} seleccionado. Carreras disponibles: ${carrerasSelect.children.length - 1}`);
    });
}

// Ejecutar cuando el DOM esté listo
document.addEventListener("DOMContentLoaded", function() {
    console.log("DOM cargado. Inicializando filtro de carreras...");
    console.log("Carreras disponibles:", carreras);
    filtrarCarrerasPorTurno();
});

// Validación adicional del formulario
document.querySelector('form').addEventListener('submit', function(e) {
    const turno = document.getElementById('turno').value;
    const carrera = document.getElementById('carreras').value;
    const grado = document.getElementById('grado').value;
    const grupo = document.getElementById('grupo').value;
    const alumno = document.getElementById('alumno').value;
    
    if (!turno || !carrera || !grado || !grupo || !alumno) {
        e.preventDefault();
        alert('Por favor, complete todos los campos requeridos.');
        return false;
    }
});
</script>

</body>
</html>