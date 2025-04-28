<?php
  include 'C:\xampp\htdocs\PHPlessons\includes\header.php';
?>
<?php
  $sql = "SELECT * FROM users WHERE username='dilly';";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<br>'.$row['username'];
    }
  }
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
 require "footer.php";
?>