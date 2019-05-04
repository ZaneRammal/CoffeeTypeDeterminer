<?php

# Provides a connection object to connect to the DB
class Coffee_DB extends SQLite3 {
  function __construct() {
    $this->open('db/dbcoffee.sqlite');
  }
}

$db = new Coffee_DB();

# The <head> and opening <html> element(s), <body>, and navigation bar
include 'html/head.html';
echo '<title>Coffee Type Determiner</title>';
echo '<body>';
include 'html/menu.html';
echo '<div class ="center"><h1>Welcome, click a tab to start</h1></div>
<br><br>';
include 'html/footer.html';
echo '</body></html>';
