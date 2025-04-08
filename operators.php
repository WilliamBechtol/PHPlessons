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
      </ul>
    </div>
  </div>
</nav>
    <?php
    //Arithmetic Operators
    echo 5+5;
    echo 5-5;
    echo 5*5;
    echo 5/5;
    echo 8%5;
    echo 5**2;
    //Variable Operators
    $x = 100;
    $x /= 20;
    //Comparison Operators
    echo $x;
    $x = 5;
    $y = 5;
    if ($x == $y) {
        echo "True!";
    }
    else {
        echo "False!";
    }
    $x = 5;
    $y = 5;
    if ($x != $y) {
        echo "True!";
    }
    else {
        echo "False!";
    }
    $x = 5;
    $y = "5";
    if ($x === $y) {
        echo "True!";
    }
    else {
        echo "False!";
    }
    $x = 10;
    $y = 5;
    if ($x > $y) {
        echo "True!";
    }
    else {
        echo "False!";
    }
    $x = 5;
    $y = 10;
    if ($x < $y) {
        echo "True!";
    }
    else {
        echo "False!";
    }
    $x = 10;
    $y = 10;
    if ($x <= $y) {
        echo "True!";
    }
    else {
        echo "False!";
    }
    $x = 10;
    $y = 10;
    if ($x >= $y) {
        echo "True!";
    }
    else {
        echo "False!";
    }
    $x = 10;
    $y = 10;
    if ($x <> $y) {
        echo "True!";
    }
    else {
        echo "False!";
    }
    //Increment/Decrement Operators
    $x = 10;
    echo $x++;
    echo $x;
    $x = 10;
    echo $x--;
    echo $x;
    //Logical Operators
    $x = 10;
    $y = 20;

    if ($x == $y or 1 == 1) {
        echo "True";
    }
    $x = 20;
    $y = 20;

    if ($x == $y and 1 == 1) {
        echo "True";
    }
    $x = 10;
    $y = 20;

    if ($x == $y xor 1 == 1) {
        echo "True";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>