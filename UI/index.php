<?php
    include("../Connection/Config.php");
    // include("../UI/Index1.php");

    $connect = mysqli_connect($servername, $username, $password, $Database) or die("database connection error");


$sql = "SELECT * FROM Address";
$result = mysqli_query($connect, $sql);    

$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

  mysqli_close($connect);
 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Address List</title>
</head>
<body>
    <?php include("../UI/Index1.php"); ?>
</body>
</html>