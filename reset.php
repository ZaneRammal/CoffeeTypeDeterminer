<?php

# Deletes entire DB
$mydb = "db/dbcoffee.sqlite";
unlink($mydb) or die("Could not delete");

# Provides a connection object to connect to the DB
class Coffee_DB extends SQLite3 {
  function __construct() {
    $this->open('db/dbcoffee.sqlite');
  }
}
$db = new Coffee_DB();

# Create local SQLite Database and create tables
$userdata_create = $db->exec("CREATE TABLE IF NOT EXISTS userdata(
  name VARCHAR,
  month VARCHAR);");
$usernames_create = $db->exec("CREATE TABLE IF NOT EXISTS usernames(
  id VARCHAR,
  name VARCHAR,
  month VARCHAR);");
$supplyData_create = $db->exec("CREATE TABLE IF NOT EXISTS supplyData(
  name VARCHAR,
  type VARCHAR,
  details VARCHAR,
  purpose VARCHAR,
  link VARCHAR);");
$cupColors_create = $db->exec("CREATE TABLE IF NOT EXISTS cupColors(
  name VARCHAR,
  link VARCHAR,
  image VARCHAR);");
$coffeeTypes_create = $db->exec("CREATE TABLE IF NOT EXISTS coffeeTypes(
  name VARCHAR,
  image VARCHAR,
  idNumber VARCHAR,
  origin VARCHAR);");

# Add the coffee data
$insert_flatwhite = "INSERT OR REPLACE INTO coffeeTypes
(idNumber, name, image, origin) VALUES ('1', 'Flat White',
   'img/1.jpg', 'Australia or New Zealand')";
$insert_espresso= "INSERT OR REPLACE INTO coffeeTypes
(idNumber, name, image, origin) VALUES ('2', 'Espresso',
   'img/2.jpg', 'TODO')";
$insert_caffelatte= "INSERT OR REPLACE INTO coffeeTypes
(idNumber, name, image, origin) VALUES ('3', 'Caffe Latte',
   'img/3.jpg', 'TODO')";
$insert_cappuccino= "INSERT OR REPLACE INTO coffeeTypes
(idNumber, name, image, origin) VALUES ('4', 'Cappuccino',
   'img/4.jpg','TODO')";
$insert_macchiato= "INSERT OR REPLACE INTO coffeeTypes
(idNumber, name, image, origin) VALUES ('5', 'Macchiato',
   'img/5.jpg', 'TODO')";
$insert_affogato= "INSERT OR REPLACE INTO coffeeTypes
(idNumber, name, image, origin) VALUES ('6', 'Affogato',
   'img/6.jpg', 'TODO')";
$insert_caffeamericano= "INSERT OR REPLACE INTO coffeeTypes
(idNumber, name, image, origin) VALUES ('7', 'Caffe Americano',
   'img/7.jpg', 'TODO')";
$insert_longblack= "INSERT OR REPLACE INTO coffeeTypes
(idNumber, name, image, origin) VALUES ('8', 'Long Black',
   'img/8.jpg', 'TODO')";
$insert_mochaccino= "INSERT OR REPLACE INTO coffeeTypes
(idNumber, name, image, origin) VALUES ('9', 'Mochaccino',
   'img/9.jpg', 'TODO')";
$insert_water= "INSERT OR REPLACE INTO coffeeTypes
(idNumber, name, image, origin) VALUES ('10', 'Water',
   'img/10.jpg', 'Pangaea')";
$insert_einspanner= "INSERT OR REPLACE INTO coffeeTypes
(idNumber, name, image, origin) VALUES ('11', 'Vienna',
   'img/11.jpg', 'Vienna, Austria')";
$insert_rum= "INSERT OR REPLACE INTO coffeeTypes
(idNumber, name, image, origin) VALUES ('12', 'Rum',
   'img/12.jpg', 'TODO')";
$db->exec($insert_flatwhite);
$db->exec($insert_espresso);
$db->exec($insert_caffelatte);
$db->exec($insert_cappuccino);
$db->exec($insert_macchiato);
$db->exec($insert_affogato);
$db->exec($insert_caffeamericano);
$db->exec($insert_longblack);
$db->exec($insert_mochaccino);
$db->exec($insert_water);
$db->exec($insert_einspanner);
$db->exec($insert_rum);

# The <head> and opening <html> element(s), <body>, and navigation bar
include 'html/head.html';
echo '<title>Coffee Type Determiner</title>';
echo '<body>';

include 'html/menu.html';
if($userdata_create && $usernames_create
    && $supplyData_create && $cupColors_create
    && $coffeeTypes_create)
  {
   echo '<div class="center">Database Reset Successful</div>';
  }
else {
  echo '<div class="center"Error with database reset</div>';
}

include 'html/footer.html';
echo '</body></html>';

?>
