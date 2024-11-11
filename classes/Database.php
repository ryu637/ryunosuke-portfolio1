<?php

class Database{
    #Define propers
    //protected - similar private but can be accessed by the child classes
    private $server_name ="localhost";
    private $username = "root";
    private $password = "";
    private $db_name = "the_company";
    protected $conn;   //sql のdataがとられないようにするため、でもclassの中で使いまわししたいときに最適。

    public function __construct() {
        $this->conn = new mysqli($this -> server_name, $this-> username, $this-> password,$this->db_name);

        if($this->conn->connect_error){
            die('unable to connect to the database:'. $this -> conn-> connect_error);
        }
    }
}
?>