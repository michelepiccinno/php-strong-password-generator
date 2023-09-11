<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" defer></script>
  <title>Titolo</title>
</head>

<body>

  <?php

  function random_password($chars)
  {
    $rest = $chars % 4;
    $random_characters = ($chars - $rest) / 4;

    $lower_case = "abcdefghijklmnopqrstuvwxyz";
    $upper_case = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $numbers = "1234567890";
    $symbols = "!@#$%^&*";

    $lower_case = str_shuffle($lower_case);
    $upper_case = str_shuffle($upper_case);
    $numbers = str_shuffle($numbers);
    $symbols = str_shuffle($symbols);

    $random_password = substr($lower_case, 0, ($random_characters + $rest));
    $random_password .= substr($upper_case, 0, $random_characters);
    $random_password .= substr($numbers, 0, $random_characters);
    $random_password .= substr($symbols, 0, $random_characters);

    return  str_shuffle($random_password);
  }
  ?>


  <div class="container">
    <div class="row">
      <div class="col">
        <form method="GET" class="m-3">
          <label for="passwordLenght" class="form-label">Scrivi il numero di caratteri per generare la tua password: </label>
          <input type="text" class="form-control m-2" name="passwordLenght" id="" aria-describedby="helpId" placeholder="scrivi qui">
          <button type="submit" class="btn btn-warning">GENERA PASSWORD</button>
        </form>
      </div>
      <div>
        <h3 class="bg-primary p-1">PASSWORD GENERATA:
          <?php
          if (isset($_GET["passwordLenght"]) && (($_GET["passwordLenght"]) !== "NULL")) {
            echo random_password($_GET["passwordLenght"]);
          }
          ?>
        </h3>
      </div>
    </div>
  </div>

</body>

</html>