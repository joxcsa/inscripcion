<?php 
include '../Controlador/ConexionMostrar/MostrarAdministrativo.php'; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrativos Registrados</title>
  <link rel="stylesheet" href="../Recursos/Diseño/estilo_tablas.css">
  <link rel="stylesheet" href="../diseños/tarjetas_estilo.css">
  <script>
    function confirmar(){
      return confirm('¿Desea eliminar este administrativo?');
    }
  </script>
</head>
<body>

<header>
  <div class="logo">
    <img src="../Recursos/Imagenes_Escuela/logo.png" alt="Logo CETis 23">
    <h1>CETis No. 23</h1>
  </div>
  <nav>
    <a href="../Vista/Pagina_Principal.html">Inicio</a>
    <a href="../Vista/citas.php">Citas</a>
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
    <a href="../Vista/Pagina_carreras.html">Carreras</a>
    <a href="#">Contacto</a>
  </nav>  
</header>

<section class="banner">
  <img src="../Recursos/Imagenes_Escuela/banner.png" alt="Entrada del CETis 23">
</section>

<main>
  <h1 class="page-title">Administrativos Registrados</h1>
  
  <div class="alumnos-grid">
    <?php foreach($muestra as $renglon){ ?>
    <div class="alumno-card">
      <div class="alumno-header">
        <div class="alumno-avatar">
          <?php echo strtoupper(substr($renglon['nombre'], 0, 1) . substr($renglon['apellido1'], 0, 1)); ?>
        </div>
        <div class="alumno-name">
          <h3><?php echo $renglon['nombre'] . ' ' . $renglon['apellido1'] . ' ' . $renglon['apellido2']; ?></h3>
          <div class="alumno-id">ID: <?php echo $renglon['id_administrativo']; ?></div>
        </div>
      </div>

      <div class="alumno-info">
        <div class="info-item">
          <span class="info-label">Sexo</span>
          <span class="info-value">
            <?php 
              $sexo = trim(strtoupper($renglon['sexo']));
              $esMasculino = ($sexo == 'M' || $sexo == 'MASCULINO' || $sexo == '1');
            ?>
            <span class="sexo-badge <?php echo $esMasculino ? 'sexo-m' : 'sexo-f'; ?>">
              <?php echo $esMasculino ? 'Masculino' : 'Femenino'; ?>
            </span>
          </span>
        </div>
        <div class="info-item">
          <span class="info-label">Teléfono</span>
          <span class="info-value"><?php echo $renglon['telefono']; ?></span>
        </div>
        <div class="info-item">
          <span class="info-label">Carrera</span>
          <span class="info-value">
            <span class="documento-badge"><?php echo $renglon['carrera']; ?></span>
          </span>
        </div>
        <div class="info-item">
          <span class="info-label">Experiencia</span>
          <span class="info-value"><?php echo $renglon['experiencia']; ?></span>
        </div>
        <div class="info-item full-width">
          <span class="info-label">RFC</span>
          <span class="info-value"><?php echo $renglon['rfc']; ?></span>
        </div>
        <div class="info-item full-width">
          <span class="info-label">Cuenta Banco</span>
          <span class="info-value">
            <span class="seguro-badge"><?php echo $renglon['cuenta_banco']; ?></span>
          </span>
        </div>
        <div class="info-item full-width">
          <span class="info-label">Correo</span>
          <span class="info-value"><?php echo $renglon['correo']; ?></span>
        </div>
        <div class="info-item full-width">
          <span class="info-label">CURP</span>
          <span class="info-value"><?php echo $renglon['curp']; ?></span>
        </div>
      
        <div class="info-item full-width">
          <span class="info-label">Ventanilla</span>
          <span class="info-value"><?php echo $renglon['ventanilla']; ?></span>
        </div>

      </div>
      <div class="alumno-actions">
        <a href="../Modificar/modificar_administrativo.php?id_administrativo=<?php echo $renglon['id_administrativo']; ?>" class="action-btn btn-edit">
          ✏️ Modificar
        </a>
        <a href="../Eliminar/eliminar_administrativo.php?id_administrativo=<?php echo $renglon['id_administrativo']; ?>" 
           class="action-btn btn-delete" 
           onclick="return confirmar()">
          🗑️ Eliminar
        </a>
      </div>
    </div>
    <?php } ?>
  </div>
</main>
</body>
</html>