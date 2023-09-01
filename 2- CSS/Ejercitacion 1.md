# Responder

### 1. ¿Qué es CSS y para qué se usa?

Hojas de Estilo en Cascada (del inglés Cascading Style Sheets) o CSS es el lenguaje de estilos utilizado para describir la presentación de documentos HTML o XML (incluyendo varios lenguajes basados en XML como SVG, MathML o XHTML). CSS describe como debe ser renderizado el elemento estructurado en la pantalla, en papel, en el habla o en otros medios.

### 2. CSS utiliza reglas para las declaraciones de estilo, ¿cómo funcionan?

Los sets de reglas son los bloques principales de una hoja de estilos, que generalmente consiste en una larga lista de ellos. Pero existe otro tipo de información que el autor web puede transmitir en la hoja de estilos, como el set de caracteres, otra hoja de estilos a importar, font face o listar descripciones de contador, entre otros. Se usarán tipos de declaracionnes específicas para esto mismo.

Una declaración es un bloque que empieza con un caracter (no espacio) y termina con la primer llave de cierre o punto y coma (fuera de una cadena, sin escape y no incluido dentro de otro par de {}. () o [])

Existen dos tipos de declaraciones:

* Sets de reglas (o reglas) que, como lo visto, asocian una colección de declaraciones CSS a una condición descrita como selector.
* Reglas At que inician con un símbolo '@', seguido de un identificador y luego el resto de la declaración que finaliza con un punto y coma (;) por fuera de un bloque o al inicio del próximo bloque. Cada tipo de reglas at, definidas por un identificador, tienen su propia sintaxis interna, y semántica por supuesto. Se utilizan para establecer información de meta datos (como @charset o @import), información condicional (como @media o @document (en-US)), o información descrciptiva (como @font-face).

Toda declaración que no es un set de reglas ni una regla at es considerada inválida e ignorada.

Existe otro grupo de declaraciones: las declaraciones anidadas. Estas son declaraciones que pueden ser usadas en un subset específico de reglas at (las reglas de grupo condicionales). Estas declaraciones sólo aplican si una condición específica se cumple: el contenido de la regla at @media se aplica sólo si el dispositivo en el que el navegador se encuentra corriendo cumple dadas condiciones; el contenido de la regla at @document se aplica sólo si la página actual cumple dadas condiciones, y así.

### 3. ¿Cuáles son las tres formas de dar estilo a un documento?

1. Hoja de estilo externa: este es el método más común y útil para adjuntar CSS a un documento, porque puedes vincular el CSS a varias páginas y dar estilo a todas ellas con la misma hoja de estilo.
2. Hoja de estilo interna: una hoja de estilo interna es cuando no hay ningún archivo CSS externo, sino que colocas tu CSS dentro de un elemento ```<style>``` contenido dentro del elemento ```<head>``` del HTML.
3. Estilos en línea: los estilos en línea son declaraciones CSS que afectan a un solo elemento, contenido dentro de un atributo ```style```

### 4. ¿Cuáles son los distintos tipos de selectores más utilizados? Ejemplifique cada uno.

Un selector es un elemento de un documento HTML para aplicarle estilo. Cada regla CSS comienza con un selector o una lista de selectores que indican al navegador a qué elemento o elementos deben aplicarse dichas reglas.

#### Selectores de tipo, de clase y de ID

Este grupo incluye selectores que delimitan un elemento HTML, como por ejemplo un ```<h1>```.

```css
h1 {
}
```

También incluye selectores que delimitan una clase:

```css
.box {
}
```

o un ID:

```css
#unique {
}

```

#### Selectores de atributo

Este grupo de selectores te proporciona diferentes formas de seleccionar elementos según la presencia de un atributo determinado en un elemento:

```css
a[title] {
}
```

O incluso hacer una selección basada en la presencia de un atributo que tiene un valor particular asignado:

```css
a[href="https://example.com"]
{
}
```

#### Las pseudoclases y los pseudoelementos

Este grupo de selectores incluye pseudoclases, que aplican estilo a ciertos estados de un elemento. La pseudoclase :hover, por ejemplo, selecciona un elemento solo cuando se le pasa el ratón por encima.

```css
a: hover {
}
```

También incluye pseudoelementos, que seleccionan una parte determinada de un elemento en vez del elemento en sí. Por ejemplo, ::first-line siempre selecciona la primera línea del texto que se encuentra dentro de un elemento (```<p>```, en el ejemplo siguiente), y actúa como si un elemento ```<span>``` hubiera delimitado la primera línea, seleccionado y aplicado estilo.

```css
p::first-line {
}
```

#### Combinadores

El último grupo de selectores combina otros selectores con el fin de delimitar elementos de nuestros documentos. El ejemplo siguiente selecciona los párrafos que son hijos directos del elemento ```<article>``` utilizando el operador de combinación hijo (>):

```css
article > p {
}
```

### 5. ¿Qué es una pseudo-clase? Cuáles son las más utilizadas aplicadas a vínculos?

Una pseudoclase es un selector que marca los elementos que están en un estado específico, por ejemplo, los que son el primer elemento de su tipo, o aquellos por los que el cursor les pasa por encima. Tienden a actuar como si hubieras aplicado una clase en una parte determinada del documento y, a menudo, ayudan a reducir el exceso de clases y proporcionan un marcado más flexible y fácil de mantener.

Las mas utilizadas para vinculos son:

```:link``` para indicar que la pagina no fue visitada.

```:visited``` para indicar que la pagina fue visitada.

### 6. ¿Qué es la herencia?

Algunos valores de las propiedades CSS que se han establecido para los elementos padre los heredan los elementos hijo, pero otros no.

Por ejemplo, si para un elemento se establece el color (```color```) y el tipo de letra (```font-family```), cada elemento que se encuentre dentro de él también se mostrará de ese color y con ese tipo de letra, a menos que les se haya aplicado un color y un tipo de letra diferentes directamente.

Algunas propiedades no se heredan. Por ejemplo, si para un elemento se establece un ancho ```width``` del 50%, sus descendientes no tendrán un 50% de ancho con respecto al de sus padres.

### 7. ¿En qué consiste el proceso denominado cascada?

La cascada en las hojas de estilo significa que el orden de las reglas importa en CSS: cuando dos reglas tienen la misma especificidad, se aplica la que aparece en último lugar en el CSS.

La cantidad de especificidad de un selector se mide usando cuatro valores diferentes separados por coma que tienen diferente peso y pueden describirse como millares, centenas, decenas y unidades (cuatro dígitos individuales dispuestos en cuatro columnas):

![image](https://res.cloudinary.com/practicaldev/image/fetch/s--Q7AjHHJ9--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/hhf8sfgmd2w72c7yp8o3.png)
