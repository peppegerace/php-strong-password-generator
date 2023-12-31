<?php 

$min = 8;
$max = 32;
$message = "Scegliere una password con un minimo di $min caratteri e un massimo di $max caratteri";
$password = '';

if(isset($_POST['input-number']) && !empty($_POST['input-number'])) {
  
  $password_length = $_POST['input-number'];

  if($password_length < $min || $password_length > $max) {
    $message = "Errore! Il valore inserito deve essere compreso tra $min e $max";
  } else {

    include __DIR__ .'/partials/functions.php';

    $password = generatePassword($password_length);


    session_start();
    $_SESSION['password'] = $password;

    header('Location: showpassword.php');
    exit();
    // $message = "La tua nuova password è: $password";
    // var_dump($password);
  }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <title>PHP Strong Password Generator</title>
</head>
<body class="bg-secondary ">
  
  <div class="container my-5">

    <div class="title text-center my-3 text-light ">
      <h1 class="fw-bold" >Strong Password Generator</h1>
      <h2>Genera una password sicura</h2>
    </div>

    <div class="alert alert-success p-1 my-3 rounded-1">
      <p> <?php echo $message ?> </p>
    </div>

    <form action="index.php" method="POST" class="bg-body-tertiary p-2 rounded-1">
      <div class="row">
        <div class="col-auto">
          <label for="input-number" class="col-form-label">Inserire lunghezza password</label>
        </div>
        <div class="col-auto">
          <input type="number" name="input-number" class="form-control">
        </div>
      </div>
      <button class="btn btn-primary mt-2" type="submit">Invia</button>
      <!-- <button class="btn btn-warning ms-2 " type="reset">Reset</button> -->
      <!-- <a href="index.php" class="btn btn-secondary mt-2">Torna indietro</a> -->
    </form>

  </div>

</body>
</html>