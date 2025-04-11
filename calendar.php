<?php
  include 'C:\xampp\htdocs\PHPlessons\includes\header.php';
?>
    <?php
        $dayofweek = date("w");
        switch ($dayofweek) {
            case 1:
                echo "<p class='calendar'>It is Monday!<p>";
            break;
            case 2:
                echo "<p class='calendar'>It is Tuesday!<p>";
            break;
            case 3:
                echo "<p class='calendar'>It is Wednesday!<p>";
            break;
            case 4:
                echo "<p class='calendar'>It is Thursday!<p>";
            break;
            case 5:
                echo "<p class='calendar'>It is Friday!<p>";
            break;
            case 6:
                echo "<p class='calendar'>It is Saturday!<p>";
            break;
            case 0:
                echo "<p class='calendar'>It is Sunday!<p>";
            break;
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>