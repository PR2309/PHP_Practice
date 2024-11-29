<!-- submit.php -->

<?php
  // Get the data from the previous page
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $phone = $_REQUEST['phone'];
  $address = $_REQUEST['address'];

  // Process the data (e.g., insert into database)
  echo "Data submitted successfully!";

?>

<p>Name: <?php echo $name; ?></p>
<p>Email: <?php echo $email; ?></p>
<p>Phone: <?php echo $phone; ?></p>
<p>Address: <?php echo $address; ?></p>
