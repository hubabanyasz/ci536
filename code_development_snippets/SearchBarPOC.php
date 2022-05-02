



<?php
$servername = "brighton.reclaimhosting.com";
$username = "cp1005_eureka_home";
$password = "BannanaRaft";    
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$_POST['search'] = mysqli_real_escape_string($conn, $_POST['search']);
$search = $_POST['search'];
  $search_sql = "SELECT * FROM cp1005_eureka.tProduct WHERE productName LIKE '%$search%'";
  $result = mysqli_query($conn, $search_sql);
  ?>
  <p>Search Results</p>
  <?php
  if (mysqli_num_rows($result) > 0) {
    $arr = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $i = 0;
    foreach ($arr as $row) {
      echo $row['productName'] . " " . $row['cost'];
    }
  }
  else {
    echo "No results found";
  }
  mysqli_close($conn);
?>