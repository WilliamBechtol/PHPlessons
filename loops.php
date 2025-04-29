<?php
  require "includes\header.php";
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

<?php
 require "includes/footer.php";
?>