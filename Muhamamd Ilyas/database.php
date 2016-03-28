<?php

class database{
    //put your code here
    private $connection;
    public function database(){
        
    }
    public function getConnected(configure $conf){
        //this function connecting mysql
        
        $this->connection = mysql_connect($conf->getDbHost(),$conf->getDbUsername(), "");
         // $conn = mysqli("localhost","root","lbr123","wordpress");  
        mysql_select_db($conf->getDbName());
            
        if (!$this->connection) {
             die('Could not connect: ' . mysql_error());die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully"."<br>";
        
    }
    //this function needed at the time of installation;
    public function setupStatingDB(){
        //users table created;
       /* $tables = "CREATE table users("
                . "firstname VARCHAR(30) NOT NULL,
                  lastname VARCHAR(30) NOT NULL,
                  username VARCHAR(10) PRIMARY KEY,
                  email VARCHAR(50) NOT NULL,
                  password varchar(10) NOT NULL
                  )";
        if(mysql_query($tables)){
           echo "Table MyGuests created successfully"."<br>";
        } 
        else {
           echo "Error creating table: " .  mysql_error();
        }*/
        
        //here we can add more tables as we need;
    }
    public function DataInsertion($query){
        /*$query = ""
                . "INSERT into users (firstname,lastname,"
                . "username,email,password) values"
                . "('$firstName','$lastName','$username',"
                . "'$email','$password')";*/
        
        
        
        if(mysql_query($query)){
            echo "New record created successfully"."<br>";
            return true;
        }
        else{
            echo "Error in data inserting" .mysql_error();
            return false;
        }
    }
    

}
