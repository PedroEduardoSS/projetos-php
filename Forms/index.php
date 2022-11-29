<?php
$name = $email = $comment = $website = $nameErr = $emailErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Preencha o nome";
    } else {
      $name = test_data($_POST["name"]);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$name)){
        $nameErr = "Apenas letras e espaços brancos";
      }
    }
    
    if (empty($_POST["email"])) {
      $emailErr = "Preencha o email";
    } else {
      $email = test_data($_POST["email"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailErr = "Formato de email inválido";
      }
    }
      
    if (empty($_POST["website"])) {
      $website = "";
    } else {
      $website = test_data($_POST["website"]);
    }
  
    if (empty($_POST["comment"])) {
      $comment = "";
    } else {
      $comment = test_data($_POST["comment"]);
    }
}
function test_data($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .error {color: red;}
    </style>
    <title>Formulario</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <p>Nome: <input type="text" name="name"></p>
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        <p>E-mail: <input type="text" name="email"></p>
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        <p>Website: <input type="text" name="website"></p>
        <br><br>
        <p>Comentario: <textarea name="comment" rows="5" cols="40"></textarea></p>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    echo "<h2>Seus dados:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    ?>
</body>
</html>