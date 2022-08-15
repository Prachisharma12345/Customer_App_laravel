<?php

class DBController
{
//Database Connection properties
    protected $host='localhost';
    protected $user='root';
    protected $password='';
    protected $database="shopee";

    //declare connection property
    public $con=null;

    public function __construct()
    {
        $this->con=mysqli_connect($this->host,$this->user,$this->password,$this->database);
        if($this->con->connect_error){
            echo "connection failed:".$this->con->connect_error;
            $con=null;
        }

    }

    public function __destruct(){
        $this->closeConnection();
    }

    public function closeConnection(){
        if($this->con!=null){
            $this->con->close();
            $this->con=null;
        }
    }
}
