<!-- second_page.php -->

<?php
  // Get the data from the previous page
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
?>

<form action="submit.php" method="post">
  <label for="phone">Phone Number:</label>
  <input type="tel" id="phone" name="phone"/><br/><br/>
  <label for="address">Address:</label>
  <input type="text" id="address" name="address"/><br/><br/>
  <input type="hidden" name="name" value="<?php echo $name; ?>"/>
  <input type="hidden" name="email" value="<?php echo $email; ?>"/>
  <input type="submit" value="Submit"/>
</form>

<!-- Display the collected data -->
<p>Name: <?php echo $name; ?></p>
<p>Email: <?php echo $email; ?></p>