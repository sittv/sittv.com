<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITTV</title>
    <link rel="stylesheet" href="/css/foundation.css">
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <h1>SITTV Inventory - Edit/View</h1>
    <table>
      <thead>
        <tr>
          <th width="100">Barcode ID</th>
          <th width="200">Name</th>
          <th>Description</th>
          <th width="150">Quantity</th>
          <th width="150">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $servername = "mysql.sittv.com";
          $username = "sittv";
          $password = "BBRNnT9iDDeJH7";
          $dbname = "sittv_inventory";
          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }
          $sql = "SELECT * FROM items";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) { ?>
              <tr>
                <td><?= $row["id"]; ?></td>
                <td><?= $row["name"]; ?></td>
                <td><?= $row["description"]; ?></td>
                <td><?= $row["quantity"]; ?></td>
                <td><a href="#">+1 Quantity</a> <a href="#">-1 Quantity</a></td>
              </tr>
        <?php
            }
          }
          $conn->close();
        ?>
      </tbody>
    </table>
    <a href="/inventory/add">Add item</a>
  </body>
</html>
