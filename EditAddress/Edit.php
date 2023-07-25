<?php
include("Config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $email = $_POST['Email'];
    $name = $_POST['Name'];
    $firstName = $_POST['FirstName'];
    $street = $_POST['Street'];
    $zipCode = $_POST['ZipCode'];
    $city = $_POST['City'];

    $sql = "UPDATE Address SET Name='$name', FirstName='$firstName', Street='$street', ZipCode='$zipCode', City='$city' WHERE Email='$email'";
    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Address updated successfully."); window.location.href = "Index1.php"; </script>';
    } else {
        echo "Error updating address: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
