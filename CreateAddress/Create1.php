<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Address-Book</title>
        <meta charset="utf-8">
        <meta Name="viewport" content="width=device, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
        </script>
        </head>
    <body>
        <div class="container-fluid-sm|md|lg|xl| p-3 border bg-primary text-white">
            <div class="text-center">Address-Book</div>
        </div>
            <div class="container mt-3 border">
                <form action="../CreateAddress/Create.php" method="GET">
                
                    <div class="mb-3">
                        <label>Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Name" name="Name" required>
                    </div>
                    <div class="mb-3">
                        <label>FirstName:</label>
                        <input type="text" class="form-control" placeholder="Enter FirstName" name="FirstName" required>
                        </div>
                    <div class="mb-3">
                        <label>Email:</label>
                        <input type="email" class="form-control" placeholder="Enter Email" name="Email" required>
                    </div>
                    <div class="mb-3">
                        <label>Street:</label>
                        <input type="text" class="form-control"  placeholder="Enter Street" name="Street" required>
                        </div>
                    <div class="mb-3">
                        <label>ZipCode:</label>
                        <input type="text" class="form-control"  placeholder="Enter ZipCode" name="ZipCode" required>
                    </div>
                    <div class="mb-3">
                            <label>City:</label>
                            <input type="text" class="form-control" placeholder="Enter City" name="City" required>
                     </div>

                    <div class="d-grid mb-3 gap-2 mx-auto">
                    <input type="submit" class="btn btn-primary btn-block" value="submit">
                    <a class="btn btn-danger" href="../UI" role="button">BACK</a>

                </div>
                </form>
            </div>
    </body>
</html>