## Ejercicio 1

* Consulta a una base de datos: Para comenzar la comunicación con un servidor de base de datos MySQL, es
necesario abrir una conexión a ese servidor. Para inicializar esta conexión, PHP ofrece la función
  ```php
  mysqli_connect()
  ```

* Todos sus parámetros son opcionales, pero hay tres de ellos que generalmente son necesarios:

  1. **$hostname** es un nombre de servidor (dato que debemos
consultar en nuestra cuenta de hosting).

  2. **$nombreUsuario** es el nombre de usuario de base de
datos, nombre que habremos especificado al crear la base
de datos (si no lo hemos hecho, puede ser root).

  3. **$contraseña** es la contraseña de acceso para el usuario
de base de datos, contraseña que habremos especificado
al crear la base de datos.

* Una vez abierta la conexión, se debe seleccionar una base de datos para su uso, mediante la función
  ```php
  mysqli_select_db()
  ```

* Esta función debe pasar como parámetro

  ```php
  mysqli_select_db($nombreConexión, $nombreBaseDatos)
  ```

* La función mysqli_query () se utiliza para

  Ejecutar una consulta a la base de datos que especifiquemos

* y requiere como parámetros

  ```php
  mysqli_query($nombreConexion, $query);
  ```

* La cláusula or die() se utiliza para

  Capturar el error.


* y la función mysqli_error () se puede usar para

  ```php
  mysqli_error($link);
  ```
  Devuelve el último mensaje de error para la llamada más reciente a una función de MySQLi que puede haberse ejecutado correctamente o haber fallado.

 * Si la función mysqli_query() es exitosa, el conjunto resultante retornado se almacena en una     variable, por ejemplo $vResult, y a continuación se puede ejecutar el siguiente código (explicarlo):
    ```php
    <?php
      while ($fila = mysqli_fetch_array($vResultado))
      {
    ?>
      <tr>
      <td><?php echo ($fila[0]); ?></td>
      <td><?php echo ($fila[1]); ?></td>
      <td><?php echo ($fila[2]); ?></td>
      </tr>
      <tr>
      <td colspan="5">
    <?php
      }
      mysqli_free_result($vResultado);
      mysqli_close($link);
    ?> 
    ```
    Se recorre para cada fila extraida de la consulta a la Base de Datos. Mostrando en una tabla el contenido de las primeras 3 columnas para cada uno de los registros obtenidos. 
    Luego se cierra la conexion.