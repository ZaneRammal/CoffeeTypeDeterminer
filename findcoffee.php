<?php

# Disable error reporting on deployment
error_reporting(E_ALL);
ini_set('display_errors', 1);

# The <head> and opening <html> element(s), <body>, and navigation bar
include 'html/head.html';
echo '<title>Coffee Type Determiner</title>';
echo '<body>';
include 'html/menu.html';

echo '<br>
<div class="center">
  <p>Find out what type of coffee you were born for.</p>
  <form action ="findcoffee.php" method="post"><label>First Name:</label>
      <input type="text" name="name" id="name" required ="required" placeholder="Enter your name.">
      <br><br><input type="submit" value="Choose coffee for me" name="submit">
  </form>
</div><br></body></html>';

# Provides a connection object to connect to the DB
class Coffee_DB extends SQLite3 {
  function __construct() {
    $this->open('db/dbcoffee.sqlite');
  }
}

if(isset($_POST['submit'])) {
  find_coffee();
}

function find_coffee () {
  $name= $_POST['name'];
  $name = filter_var($name, FILTER_SANITIZE_STRING);
  $capsMonth;
  $monthVar;
  $month_id;

  # Setup base query
  $db = new Coffee_DB();
  $select_query = "SELECT * FROM userdata WHERE name='$name'";
  $result = $db->query($select_query);

  while($row= $result->fetchArray()){
    echo '<b>Name:</b> ' . $row['name'] . '  <b>Month:</b> ' . $row['month'];
    $monthVar = $row['month'];
    $capsMonth = strtoupper($monthVar);
    }



    # Get drink associated with month
    switch($capsMonth) {
      case($capsMonth == 'JANUARY' || $capsMonth == 'JAN'):
        $month_id = 1;
        break;
      case($capsMonth == 'FEBRUARY' || $capsMonth == 'FEB'):
        $month_id = 2;
        break;
      case($capsMonth == 'MARCH' || $capsMonth == 'MAR'):
        $month_id = 3;
        break;
      case($capsMonth == 'APRIL' || $capsMonth == 'APR'):
        $month_id = 4;
        break;
      case($capsMonth == 'MAY'):
        $month_id = 5;
        break;
      case($capsMonth == 'JUNE' || $capsMonth == 'JUN'):
        $month_id = 6;
        break;
      case($capsMonth == 'JULY' || $capsMonth == 'JUL'):
        $month_id = 7;
        break;
      case($capsMonth == 'AUGUST' || $capsMonth == 'AUG'):
        $month_id = 8;
        break;
      case($capsMonth == 'SEPTEMBER' || $capsMonth == 'SEP'):
        $month_id = 9;
        break;
      case($capsMonth == 'OCTOBER' || $capsMonth == 'OCT'):
        $month_id = 10;
        break;
      case($capsMonth == 'NOVEMBER' || $capsMonth == 'NOV'):
        $month_id = 11;
        break;
      case($capsMonth == 'DECEMBER' || $capsMonth == 'DEC'):
        $month_id = 12;
        break;
      default:
        echo "Reached default";
        echo $capsMonth;
        echo $month_id;
    }

  $coffee_query = "SELECT * FROM coffeeTypes WHERE idNumber=$month_id";
  $coffee_result = $db->query($coffee_query);
      # output data of each row
        while($row= $coffee_result->fetchArray()){
          include_once('html/tableTop.html');
          echo "<tr>";
          echo "<td>" . $row['name'] . "</td>";
          echo "<td> <img src=\"" . $row['image'] . "\" alt=\"Coffee\" width = \"230\" height=\"128\">\"</td>";
          echo "<td>" . $row['origin'] . "</td>";
          echo "</tr>";
          include_once('html/tableBottom.html');
          break;
        }

}
include 'html/footer.html';
echo '</body></html>';
?>
