<?php

# Provides a connection object to connect to the DB
class Coffee_DB extends SQLite3 {
  function __construct() {
    $this->open('db/dbcoffee.sqlite');
  }
}

if(isset($_POST['submit'])) {
  add();
}

# Adds the new user to the db
function add() {
  $name= $_POST['name'];
  $month= $_POST['month'];
  $name = filter_var($name, FILTER_SANITIZE_STRING);
  $month = filter_var($month, FILTER_SANITIZE_STRING);

  # The connection object
  $db = new Coffee_DB();
  $db->exec("INSERT INTO userdata (name, month) VALUES ('$name', '$month')");

}

# The <head> and opening <html> element(s), <body>, and navigation bar
include 'html/head.html';
echo '<title>Coffee Type Determiner</title>';
echo '<body>';
include 'html/menu.html';

# Creates the form to allow user input
echo '<br><div class="center"><p>Add your name to our database so you can use the features of this site.</p>
<form action ="register.php" method="post"><label>First Name:</label>
<input type="text" name="name" id="name" required ="required" placeholder="Enter your name.">
<br><br>
Month: <input type="text" name="month" id="month" required ="required" placeholder="Enter your month of birth.">
<br><br>
<input type="submit" value="Register" name="submit">
</form></div><br>';
include 'html/footer.html';
echo '</body></html>';

?>
