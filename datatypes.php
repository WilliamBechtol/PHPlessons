<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">PHP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Index</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="operators.php">Operators</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="datatypes.php">Datatypes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="conditionals.php">Conditionals</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="calculator.php">Calculator</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="calendar.php">Calendar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="loops.php">Loops</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="arrays.php">Array</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="functions.php">Functions</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <?php
    //String
    $name = 'yerppity';

    //Integer
    $name = 300;

    //Float
    $name = 300.576;

    /*Boolean
    true = 9;
    false = 10;*/

    //Array
    $names = array("Daniel","Dennis","Michael");
    echo $names['2']
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>