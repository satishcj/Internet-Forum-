<?php
class dbconfig {
	
	function __constructor(){
		
  $host = "localhost";
  $username = "root";
  $password = "";
  $dbname = "tt";
 
  //static $conn;
 
  // $db = new db_Connect();
   $conn = mysqli_connect("localhost", "root", "", "tt");
   mysqli_select_db($conn,"tt");
   if(!$conn) //testing the connection
   {
      die("Cannot connect to the database");
	}
	return $conn;
}

// run query
  public  function run($query) {
    try {
      if(empty($query) && !isset($query)) {
        throw new exception("Query string is not set.");
      }
	  $conn = mysqli_connect("localhost", "root", "", "tt");
   mysqli_select_db($conn,"tt");
      $result = mysqli_query($conn, $query);
     return $result;
    } catch (Exception $e) {
      echo "Error: ".$e->getMessage();
    }
 
  } 
 
}