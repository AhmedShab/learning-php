<?php
require_once __DIR__."/.." . '/vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__."/..");
$dotenv->load();

$host =  getenv('HOST');
$username =  getenv('USERNAME');
$password =  getenv('PASSWORD');
$connection = mysqli_connect($host, $username, $password, "record");

function connect(){
  global $connection;

  if ($connection) {
    echo "We are connected" . "<br>";
  } else {
    echo "Database connection error";
  }
}

function insert_into_table(){
  global $connection;
  $query = "insert into students(name, age, gender)
  values('Batman', '28', 'male')";
  mysqli_query($connection, $query);
  echo "Insertion is completed";
}

function get_students_data(){
  global $connection;
  $query = "SELECT * from students";
  $result = mysqli_query($connection, $query);

  if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
      print_r($row);
    }
  } else {
    die("query error!!! " . mysqli_error());
  }

}

 ?>
