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

    <script src="../Javascript/jsonExport.js"></script>
        <script src="../Javascript/xmlexport.js"></script>
        <div class="container-fluid-sm|md|lg|xl| p-3 border bg-primary text-white">
            <div class="text-center">Address-Book</div>
            </div>
             <table class="table table-striped">
                    <thead>
                        <tr>
                          <th scope="col">Num</th>
                          <th scope="col">Name</th>
                          <th scope="col">FirstName</th>
                          <th scope="col">Email</th>
                          <th scope="col">Street</th>
                          <th scope="col">Zip-code</th>
                          <th scope="col">City</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
    $count = 1;
    foreach ($data as $row) {
        echo "<tr>";
        echo "<td>" . $count . "</td>";
        echo "<td>" . $row['Name'] . "</td>";
        echo "<td>" . $row['FirstName'] . "</td>";
        echo "<td>" . $row['Email'] . "</td>";
        echo "<td>" . $row['Street'] . "</td>";
        echo "<td>" . $row['Zip-code'] . "</td>";
        echo "<td>" . $row['City'] . "</td>";
        echo '<td><a class="btn btn-success" href="../EditAddress/Edit1.php?email=' . $row['Email'] . '" role="button">Edit-Address</a></td>';
        echo "</tr>";
        echo '<td colspan="8">';
        $count++;
    }
?>

<div class="d-grid gap-2 d-md-flex btn-primary justify-content-md-end">
    <button id="ExportToJson" class="btn btn-primary btn-sm" type="button">ExportToJson</button>
    <button id="ExportToXML" class="btn btn-primary btn-sm" type="button">ExportToXML</button>
</div>

</tbody>
</table>

<a class="btn btn-primary" href="../CreateAddress/Create1.php" role="button">Add-Address</a>
<script>
        function exportToJson(data) {
            const jsonData = JSON.stringify(data, null, 2);
            const fileData = jsonData + '\n';
            const downloadLink = document.createElement('a');
            downloadLink.href = URL.createObjectURL(new Blob([fileData], {
                type: 'application/json'
            }));
            downloadLink.download = 'address_data.json';
            downloadLink.click();
            URL.revokeObjectURL(downloadLink.href);
        }

        const data = <?php echo json_encode($data); ?>;
        const exportToJsonButton = document.getElementById('ExportToJson');
        exportToJsonButton.addEventListener('click', function () {
            exportToJson(data);
        });

        const exportToXMLButton = document.getElementById('ExportToXML');
        exportToXMLButton.addEventListener('click', function () {
            exportToXml(data);
        });
    </script> 

</body>
</html>
