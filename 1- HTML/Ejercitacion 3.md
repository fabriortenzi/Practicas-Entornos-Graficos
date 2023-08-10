# Ejercitación 3

a) El primer link lleva a la pagina de Google y el segundo hace lo mismo pero abre otra pestaña.

El tercero no se visualiza porque no tiene contenido el vinculo, pero abriria la pagina de google en español como tipo ayuda.

El cuarto dice que redirige a Google pero en realidad redirige a # que es la pagina actual y el quinto redirige a #arriba que como no esta definido se queda en la pagina actual pero actualiza la url en el navegador.

El ultimo no se puede visualizar por la misma razon que el tercero.

b) El primer enlace redirige a Google pero clickeando el texto "Click Aqui", mientras que el segundo lo hace clickeando en "imagen1".

El tercero redirige a Google pero en este caso el anchor tag engloba a "imagen1" y a "Click Aqui", los dos textos estan concatenados. A diferencia con el cuarto que los tags estan separados, pero cualuqiera de ellos redirige a Google.

c) ol y ul hacen referencia a lista ordenada y lista desordenada respectivamente. El primer caso muestra la lista desordenada con bullet points y el segundo muestra los items enumerados.

El tercer caso genera un efecto identico al segundo pero lo esta haciendo con 3 listas ordenadas distintas, y pasandoles el valor 2 y 3 a los primeros items de la 2da y 3er lista ordenada para que no arranquen con 1.

El ultimo es similar al segundo pero al utilizar la etiqueta blackquote genera una indentacion.

d) Visualmente en el navegador se ven iguales las dos tablas, pero la diferencia es que la primera logra sus cabeceras en negrita gracias a la propiedad th nativa de html y la segunda lo hace a traves de un div con la etiqueta strong.

e) Se ven identicas las dos pero la diferencia esta en que el titulo de arriba uno lo logra con la etiqueta caption y el otro con un div que ocupa las 3 columnas de la tabla y esta centrado.

f) Las dos tablas tienen el mismo tamaño, pero la diferencia esta en que la segunda fila de la primer tabla ocupa dos filas y en la segunda tabla dos columnas.

g) Las dos tablas tienen la misma estructura pero la diferencia radica en que la segunda tabla tiene atributos que hacen que se vea diferente.
Ellos son:
cellpadding: establece el espacio entre el contenido de una celda y su borde.
cellspacing: determina el espacio en blanco en píxeles entre dos celdas contiguas. Por defecto los navegadores asumen valor 2.

h) El primer y tercer form tienen una etiqueta fieldset para encerrar los campos del form que dibuja una caja entre dichos campos. Y ademas usan la etiqueta HTML ```<legend>``` para insertar un título.
El primer form tiene valores por defecto para el usuario y clave. 
Los 3 forms tienen distintos valores del atributo action, lo que indica que van a realizar solicitudes distintas al presionar el boton enviar.

i) Ambos botones se puede presionar tanto en el texto que dice boton como en el mismo boton ya que estan dentro de una etiqueta label. 
La diferencia es que en el boton, el boton 1 tiene una imagen en el y un texto resaltado en negrita con la etiqueta b.

j) Los dos conjuntos de inputs tipo radio tienen una estructura de codigo similar, pero en el primero solo se puede marcar una opcion y en el segundo se pueden marcar las dos. Tienen distintos valores name los inputs del segundo grupo, mientras que los del primero tienen el mismo.

k) Los dos select se diferencian en que el segundo tiene el atributo multiple, que es un atributo booleano. Cuando está presente, especifica que se pueden seleccionar varias opciones a la vez. La selección de múltiples opciones varía en diferentes sistemas operativos y navegadores:
Para Windows: Mantenga presionado el botón ctrl para seleccionar múltiples opciones.
Para Mac: mantenga presionado el botón command para seleccionar múltiples opciones
Debido a las diferentes formas de hacer esto, y debido a que debe informar al usuario que la selección múltiple está disponible, es más fácil usar casillas de verificación en su lugar.