<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 2</title>
</head>
<body>
  <h1>Formulario de Consulta</h1>
  <form method="post" action="2.php">
    <label>Email:</label>
    <input name="email" type="email" required></input><br>
    <label>Consulta:</label>
    <textarea name="text" required></textarea><br>
    <button>Enviar</button>
  </form>
  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = 'webmaster@gmail.com';
    $subject = "Consulta de " . $_POST['email'];
    $body = $_POST['text'];

    $success = mail($to, $subject, $body);
    if($success){
      echo '<span>Consuta enviada</span>';
    }
    else{
      echo '<span>Error al enviar</span>';
    }
  }
  ?>
</body>
</html>