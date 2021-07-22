<?php
  // session_start();

  class DB 
  {
    protected static $host = 'localhost';
    protected static $user = 'root';
    protected static $pass = '';
    protected static $db = 'product1';

    public static function connect() 
    {
      $connection = mysqli_connect(DB::$host, DB::$user, DB::$pass , DB::$db);
      if (mysqli_connect_errno())
      {
        echo "failed";
        exit();
      } 
      else 
      {
        return $connection;
      }
    }    
  }
  
?>
