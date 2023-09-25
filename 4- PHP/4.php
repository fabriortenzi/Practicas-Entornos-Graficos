<?php
  echo "El $flor $color \n";

  include 'datos.php';

  echo " El $flor $color";
?>

<!--
  Al principio muestra un error ya que la variable $color no esta definida.
  Se importa en la linea siguiente desde el archivo datos.php y al llegar al segundo echo
  ya no muestra error porque la variable $color ya esta incluida
-->