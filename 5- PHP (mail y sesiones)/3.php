<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 3</title>
</head>
<body>
  <h1>Recomendar el sitio</h1>
  <form method="post" action="3.php">
    <label>Nombre</label>
    <input name="name" type="text" required></input><br>
    <label>Mail de la persona a la que quieres recomendarle el sitio</label>
    <input name="email" type="email" required></input><br>
    <button>Enviar recomendacion</button>
  </form>
  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = $_POST['email'];
    $subject = "Recomendacion de " . $_POST['name'];
    $body = "<p>Hola, soy tu amigo " . $subject . " , y te quiero recomendar este sitio
             <a href='algunapag.com'>Alguna Pagina</a></p>";
  
    $success = mail($to, $subject, $body);
    if($success){
      echo '<h2>Recomendacion enviada!</h2>';
    }
    else{
      echo '<h2>Error al enviar</h2>';
    }
  }
  ?>

</body>
</html>