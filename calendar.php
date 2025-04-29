<?php
  require "includes\header.php";
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
<?php
 require "includes/footer.php";
?>