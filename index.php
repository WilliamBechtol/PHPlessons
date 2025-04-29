<?php
  require "includes\header.php";
?>

  <form method="GET">
      <input type="text" name="person">
      <button class="btn btn-dark">SUBMIT</button>
  </form>
  <?php
    $name = $_GET['person'];
    echo $name." is MASSIVE!";
  ?> 
  <?php
  if (isset($_SESSION['username'])) {
    echo '<p>You Are Logged In</p>';
  }
  else {
    echo '<p>You Are Not Logged In</p>';
  }
  ?>
<?php
 require "includes/footer.php";
?>