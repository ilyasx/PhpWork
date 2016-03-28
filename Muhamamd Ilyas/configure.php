<?php



class configure {

   private $dbName;
   private $dbUsername;
   private $dbPassword;
   private $dbHost;
   
   public function configure($dbName,$dbUsername,$dbPassword,$dbHost){
       $this->dbName = $dbName;
       $this->dbUsername = $dbUsername;
       $this->dbPassword = $dbPassword;
       $this->dbHost =$dbHost;
   }
   public function getDbName() {
       return $this->dbName;
   }

   public function getDbUsername() {
       return $this->dbUsername;
   }

   public function getDbPassword() {
       return $this->dbPassword;
   }

   public function getDbHost() {
       return $this->dbHost;
   }

  
}