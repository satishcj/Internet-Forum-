<?php
class dbconfig {
  protected static $host = "localhost";
  protected static $username = "root";
  protected static $password = "";
  protected static $dbname = "internat forum";
 
  static $con;
 
  function __construct() {
    self::$con = self::connect(); 
  }
 
  // open connection
  protected static function connect() {
     try {
       $link = mysqli_connect(self::$host, self::$username, self::$password, self::$dbname); 
        if(!$link) {
          throw new exception(mysqli_error($link));
        }
        return $link;
     } catch (Exception $e) {
       echo "Error: ".$e->getMessage();
     } 
  }
 
 // close connection
  public static function close() {
     mysqli_close(self::$con);
  }
 
// run query
  public static function run($query) {
    try {
      if(empty($query) && !isset($query)) {
        throw new exception("Query string is not set.");
      }
      $result = mysqli_query(self::$con, $query);
      //self::close();
     return $result;
    } catch (Exception $e) {
      echo "Error: ".$e->getMessage();
    }
 
  } 
 
}