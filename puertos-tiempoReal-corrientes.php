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
  <h2>Puertos del Estado - Tiempo real - Corrientes</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="puertos-tiempoReal.php"><b>Atras</b></a></li>
      <li><a href="puertos-tiempoReal-agitacion.php">Agitacion</a></li>
      <li><a class="active" href="puertos-tiempoReal-corrientes.php">Corrientes</a></li>
      <li><a href="puertos-tiempoReal-nivelDelMar.php">Nivel del mar</a></li>
      <li><a href="puertos-tiempoReal-oleaje.php">Oleaje</a></li>
      <li><a href="puertos-tiempoReal-ondaLarga.php">Onda larga</a></li>
      <li><a href="puertos-tiempoReal-presionAtmosferica.php">Presion atmosferica</a></li>
      <li><a href="puertos-tiempoReal-salinidad.php">Salinidad</a></li>
      <li><a href="puertos-tiempoReal-temperaturaDelAgua.php">Temperatura del agua</a></li>
      <li><a href="puertos-tiempoReal-temperaturaDelAire.php">Temperatura del aire</a></li>
      <li><a href="puertos-tiempoReal-viento.php">Viento</a></li>
    </ul>
  </nav>

  <article>
    <iframe width='100%' height='800px' scrolling="no" src='https://portus.puertos.es/index.html#/predictionWidget?optionId=tr_corrientes&var=CURRENTS&modelo=portus&zoom=11&lat=28.095402977028634&lon=-15.1550002&vec=true&locale=es&theme=dark'/></iframe>
  </article>
</section>

<footer>
  <p>Creado por Alberto Padilla</p>
</footer>

</body>
</html>
