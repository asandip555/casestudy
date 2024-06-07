<?php

//include 'statics.php';

/**$mysqli = new mysqli("localhost",$username,$password, $dbname );


  if($mysqli-> connect_errno){
    echo "Failed to connect to the database with error :" .$mysqli -> connect_error;
    exit();
  }

  echo "connection successful";
**/
  class Controller{
    public $pdo= null;
    public $dsn = null;
    protected $servername = 'localhost';
    protected $username = 'new_user';
    protected $password = 'password';
    protected $dbname = 'n23h56s72k88';

    public $con= null;

    // public function __construct(){
    public function connect(){

      //initialize connection property
      //
      /* $this->con = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);

      if($this->con->connect_error){
        echo "Fail".$this->con->connect_error;
      }
      echo "connection successful..!";if($this->con->connect_error){
        echo "Fail".$this->con->connect_error;
      }
      echo "connection successful..!"; */

      // PDO
      try{
        $this->dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname; //data source name
        $this->pdo = new PDO($this->dsn, $this->username, $this->password);
        //echo "correct";
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->pdo;

      }


      catch(PDOException $e){
        echo "Connection Failed: ".$e->getMessage();
      }
    }
  }

  $obj = new Controller;
  $obj->connect();

?>
