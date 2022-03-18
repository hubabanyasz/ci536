<?php
$servername = "brighton.reclaimhosting.com";
$username = "cp1005_eureka_home";
$password = "BannanaRaft";    
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "SELECT * FROM cp1005_eureka.tProduct";
$result = mysqli_query($conn, $sql);
$arr = mysqli_fetch_all($result, MYSQLI_ASSOC);
foreach ($arr as $row) {
    if ($row['productID'] == 4265379341) {
        $displayResult = $row;
    }
}
mysqli_close($conn);
?>

<html>
    <head>
        <title>Proof of concept connection to database page</title>
    </head>
    <body>
        <h1>Product name: <?php echo $displayResult['productName']?></h1>
        <p> Cost : <?php echo $displayResult['productCost'] ?></br>
        We have <?php echo $displayResult['stock']?> items left in stock</p>
    </body>
</html>