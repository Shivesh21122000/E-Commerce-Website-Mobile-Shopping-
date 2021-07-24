<?php


class DBController
{
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'mobilians';

//    Connecting database
    public $con = null;

//   constructor function for connection
    public function __construct()
    {
        $this->con = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        if($this->con->connect_error){
            echo 'Fail'.$this->con->connect_error;
        }
    }

    //Destructor
    public function __destruct(){
        $this->closeConnection();
    }

    // Closing the connection
    private function closeConnection(){
        if($this->con!=null){
            $this->con->close();
            $this->con=null;
        }
    }
}










