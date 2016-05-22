<?php
session_start();
  if($_POST["user"] == "sittv" && md5($_POST["password"])=="3e586aea0b15534c022a365d1d6cb9e6") {
    $_SESSION["auth"] = true; ?>
<a href="/inventory/add">Add Items</a>
<?php
  }
?>
