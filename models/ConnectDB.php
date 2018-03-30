<?php
class DatabaseOnFilm{

    private $host = "localhost";
    private $username = "id4938575_root";
    private $password = "12345678";

    private $conn;

    function connect(){
       $this->conn = mysqli_connect($this->host,$this->username,$this->password);
       return $this->conn;
    }
}