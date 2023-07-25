<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Address</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Edit Address</h1>
        <?php
        include("../Connection/Config.php");

        
        if (isset($_POST['Email'])) {
            $Email = $_POST['Email'];

           
            $sql = "SELECT * FROM Address WHERE Email='$Email'";
            $result = mysqli_query($conn, $sql);

            
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);

                
                $name = $row['Name'];
                $firstName = $row['FirstName'];
                $street = $row['Street'];
                $zipCode = $row['ZipCode'];
                $city = $row['City'];
        ?>
                <form action="./Edit.php" method="POST">
                    <input type="hidden" name="Email" value="<?php echo $email; ?>">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="Name" value="<?php echo $name; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="FirstName" value="<?php echo $firstName; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="street" class="form-label">Street</label>
                        <input type="text" class="form-control" id="street" name="Street" value="<?php echo $street; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="zipCode" class="form-label">Zip Code</label>
                        <input type="text" class="form-control" id="zipCode" name="ZipCode" value="<?php echo $zipCode; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="City" value="<?php echo $city; ?>" required>
                    </div>
                    <input type="submit" value="submit" class="btn btn-primary" name="submit">Update</button>
                </form>
        <?php
            } else {
                echo "<p>No address found with the provided email.</p>";
            }

            mysqli_close($conn);
        } else {
            echo "<p>No email parameter provided.</p>";
        }
        ?>
    </div>
</body>

</html>
