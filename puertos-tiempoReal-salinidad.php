<!DOCTYPE html>
<html>
<head>
<title>Puertos del Estado</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="estilo.css">

</head>
<body>
<header>
  <h2>Puertos del Estado - Tiempo real - Salinidad</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="puertos-tiempoReal.php"><b>Atras</b></a></li>
      <li><a href="puertos-tiempoReal-agitacion.php">Agitacion</a></li>
      <li><a href="puertos-tiempoReal-corrientes.php">Corrientes</a></li>
      <li><a href="puertos-tiempoReal-nivelDelMar.php">Nivel del mar</a></li>
      <li><a href="puertos-tiempoReal-oleaje.php">Oleaje</a></li>
      <li><a href="puertos-tiempoReal-ondaLarga.php">Onda larga</a></li>
      <li><a href="puertos-tiempoReal-presionAtmosferica.php">Presion atmosferica</a></li>
      <li><a class="active" href="puertos-tiempoReal-salinidad.php">Salinidad</a></li>
      <li><a href="puertos-tiempoReal-temperaturaDelAgua.php">Temperatura del agua</a></li>
      <li><a href="puertos-tiempoReal-temperaturaDelAire.php">Temperatura del aire</a></li>
      <li><a href="puertos-tiempoReal-viento.php">Viento</a></li>
    </ul>
  </nav>

  <article class="centrado">
    <p>La boya que se utilizaba para medir la salinidad está fuera de funcionamiento, se muestran los datos de la boya de Tenerife sur.</p>
    <iframe width="100%" height="262px" scrolling="no" src="https://portus.puertos.es/PortusData/rtChart?station=2446&params=Salinity&dirParams=&int=default&isRadar=false&locale=es"></iframe>
    <iframe width='100%' height='350px' scrolling="no" src='https://portus.puertos.es/index.html#/dataTablesRTWidget?stationCode=2446&variables=SALINITY&isRadar=false&latId=&lonId=&locale=es'></iframe>
  </article>
</section>

<footer>
  <p>Creado por Alberto Padilla</p>
</footer>

</body>
</html>
