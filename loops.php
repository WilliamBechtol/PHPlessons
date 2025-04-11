<?php
  include 'C:\xampp\htdocs\PHPlessons\includes\header.php';
?>
    //While loop
    $x = 1;
    while ($x <= 5) {
        echo "hi there<br>";
        $x++;
    }
    //Do while loop
    $x = 1;
    do {
        echo "hi there<br>";
        $x++;
    }
    while ($x <= 5);
    //For loop
    for ($x = 1; $x <= 10; $x++) {
        echo "hi<br>";
    }
    //Foreach loop
    $array = array("Daniel", "Jane", "Jacob", "John", "Mariane");

    foreach ($array as $loopdata) {
        echo "My name is ".$loopdata."<br>";
    }
?>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>