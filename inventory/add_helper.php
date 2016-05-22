<?php
  require('helpers/database.php');

  $sql = "SELECT id, quantity FROM items WHERE name='".$_POST["name"]."' LIMIT 1";
  $r = $conn->query($sql);
  if ($r->num_rows > 0) {
    while($row = $r->fetch_assoc()) {
      $newq = $row["quantity"] + $_POST["quantity"];
      $sql1 = "UPDATE items SET quantity='".$newq."' WHERE id='".$row["id"]."''"; //One of the queries isn't working
      $r1 = $conn->query($sql1);
      echo "Item already in database. Added 1. Its quantity is now: ".$newq;
    }
  } else {
    $sql = "INSERT INTO items (name, quantity) VALUES ('".$_POST["name"]."', '".$_POST["quantity"]."')";

    if ($conn->query($sql) === TRUE) {
      $sql = "SELECT id FROM items WHERE name='".$_POST["name"]."' LIMIT 1";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "Successfully added <b> ".$_POST["quantity"]." ".$_POST["name"]."</b> to inventory. <br />
          Barcode number: <h2>".$row["id"]."</h2>";
        }
      }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
  }
?>
<a href="/inventory/add">Add more items</a>
