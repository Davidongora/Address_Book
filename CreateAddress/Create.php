<?php
 
  $conn = mysqli_connect("localhost", "root", "", "Address_Book");
  if (!$conn) { 
    echo "connected";
    die("Connection failed: " . mysqli_connect_error());
  }

  if ($_SERVER["REQUEST_METHOD"] === "GET") {
        $name = $_GET["Name"];
        $firstName = $_GET["FirstName"];
        $email = $_GET["Email"];
        $street = $_GET["Street"];
        $zipCode = $_GET["ZipCode"];
        $city = $_GET["City"];

  $sql = "INSERT INTO Address (Name, FirstName, Email, Street, ZipCode, City) VALUES ('$name', '$firstName', '$email', '$street', '$zipCode', '$city')";

  if (mysqli_query($conn, $sql)) {
      echo "Data submitted successfully.";
  } else {
      echo "Error: " . mysqli_error($conn);
  }
}

  mysqli_close($conn);

  header("Location: ../UI");
?>