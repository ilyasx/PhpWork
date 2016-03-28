<?php
//including file form contollerLayer
require 'controllerLayer/controllerFunction.php';
//create an array and getting all variable from form
//here I am using firstname => $_POST(firstName) but it gives me warnings
$caseNumber = 1;
$data = array(
            'firstname'=> filter_input(INPUT_POST, 'firstName'),
            'lastname' => filter_input(INPUT_POST, 'lastName'),
            'username' => filter_input(INPUT_POST, 'username'),
            'email'    => filter_input(INPUT_POST, 'email'),
            'password' => filter_input(INPUT_POST, md5('password'))
);

$count =0;
//values check
foreach ($data as $value){
    if(isset($value) && empty($value)){
        $count = $count+1;
    }
    
}
print $count."<br>";
//checker counter values
if($count != 0 ){
    print 'You forgot to enter some field '
        . 'go back and complete it'." "
        . "<a href='singup.php'>click here</a>";
}
else{
    //pass data to controller function
    $contFunObj = new controllerFunction();
    if($contFunObj->getSingupdata($data,$caseNumber)== true){
        echo 'You are successsfully singup'.'<br>' ."for login <a href=\"login.php\">click here</a>";
    }
    else{
        echo 'your inserted data have some error. For singup again'."<a href='singup.php'>click here</a>";
    }
}