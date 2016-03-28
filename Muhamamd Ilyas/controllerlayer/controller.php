<?php
require 'configure.php';
require 'database.php';
class controller{

    private $configure;
    private $database;



function contollingConfigration(){
    $this->configure = new configure("wordpress","root","lbr123","localhost");
    $this->database  = new database();
    $this->database->getConnected($this->configure);
    $this->database->setupStatingDB();
    //$this->database->DataInsertion('mama', 'saleem', 'hamza','email', '123123');
    
}

function dataInsertion($array,$caseNumber){
    $tableName = 'users';
    switch ($caseNumber){
        case 1:
            $fields_sql = implode(',', array_keys($array));
            $values_sql = '\''. implode('\',\'', $array).'\'';
            $sql = "INSERT INTO $tableName ($fields_sql) values ($values_sql)";
            if($this->database->DataInsertion($sql)== true){
                return true;
            }
            else {
                return false;
            }
            
            break;
        case 2:
            break;
        default :
            
    }
    
}



}