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
  <h2>Puertos del Estado - Predicción - Temperatura del agua</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="puertos-prediccion.php"><b>Atras</b></a></li>
      <li><a href="puertos-prediccion-corrientes.php">Corrientes</a></li>
      <li><a href="puertos-prediccion-nivelDelMar.php">Nivel del mar</a></li>
      <li><a href="puertos-prediccion-oleaje.php">Oleaje</a></li>
      <li><a href="puertos-prediccion-salinidad.php">Salinidad</a></li>
      <li><a class="active" href="puertos-prediccion-temperaturaDelAgua.php">Temperatura del agua</a></li>
      <li><a href="puertos-prediccion-viento.php">Viento</a></li>
    </ul>
  </nav>

  <article class="centrado">
    <iframe width="100%" height="262px" scrolling="no" src="https://portus.puertos.es/PortusData/predChart?code=4036011&modelo=portus&var=WaterTemp&int=default&locale=es"></iframe>
    <iframe width='100%' height='223px' scrolling="no" src='https://portus.puertos.es/index.html#/dataTablesPredWidget?locationCode=4036011&modelo=portus&nombre&latitud=28.167&longitud=-15.5&region=Atl&variable=WATER_TEMP&mapResource=pred-markers-cirana&locale=es'></iframe>
    <iframe width='100%' height='418px' scrolling="no" src='https://portus.puertos.es/index.html#/predictionWidget?optionId=pred_temperatura&var=WATER_TEMP&modelo=portus&zoom=7&lat=28.2027676859484&lon=-15.578613281250002&vec=false&locale=es&theme=dark'></iframe>
  </article>
</section>

<footer>
  <p>Creado por Alberto Padilla</p>
</footer>

</body>
</html>
