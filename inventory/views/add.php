<h1>SITTV Inventory - Add</h1>
<form action="add_helper.php" method="POST">
  <div class="row">
    <div class="medium-6 columns">
      <label for="name">Item Name:<input type="text" name="name" required></label>
      <label for="quantity">Quantity:<input type="number" name="quantity" min="1" value="1" required></label>
      <input type="submit" class="button" value="Add" />
    </div>
  </div>
</form>
