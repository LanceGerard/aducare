<?php

class DBController
{
    // database connection properties
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $database = "aducare";

    // Create connection
    public $con = null;

    public function __construct(){
        // Check connection
        $this->con = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
        
        if ($this->con->connect_error) {
            die("Connection failed: " . $this->con->connect_error);
        } 
        // echo "Connected successfully (".$db->host_info.")";
    }

     public function __destruct()
    {
        $this->closeConnection();
    }

    // for mysqli closing
    protected function closeConnection(){
        if($this->con != null){
            $this->con->close();
            $this->con = null;
        }
    } 
}
