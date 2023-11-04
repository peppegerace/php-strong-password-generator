<?php

session_start();

if (isset($_SESSION['password'])) {
    $password = $_SESSION['password'];

    unset($_SESSION['password']);
} else {
    $password = "Nessuna password generata";
}

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
      <p> La nuova password generata è: <strong> <?php echo $password ?> </strong></p>
    </div>

    <a href="index.php" class="btn btn-outline-light mt-2">Torna indietro</a>


  </div>

</body>
</html>