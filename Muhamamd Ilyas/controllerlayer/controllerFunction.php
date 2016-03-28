<?php
require 'controllerLayer/controller.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class controllerFunction{
    private $contrObj;

    function getSingupdata($array,$caseNumber){
    
        $this->contrObj= new controller();
        $this->contrObj->contollingConfigration();
        return $this->contrObj->dataInsertion($array, $caseNumber);
        
                

    }


}