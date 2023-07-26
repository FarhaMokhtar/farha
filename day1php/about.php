<?php
 session_start(); 
//declaration variables
$first_name = $_POST['first_name'];
$lname=$_POST['last_name'];
$address=$_POST['address'];
$gender = $_POST['gender'];
$interests =$_POST['interests'];
$options = $_POST['options'];
$username = $_POST['username'];
$password = $_POST['password'];
$code_word = $_POST['code_word']; 
$department =$_POST['department'];

$errors =[];
//validation 
if(!preg_match('/^[a-zA-Z\s]+$/', $first_name)){
    $errors['name']= 'Name can not be empty';
}
if(!preg_match('/^[a-zA-Z\s]+$/', $lname)){
    echo" INVALID LASTNAME";
}
if(empty($address)){
    echo "Address is required";
}
if(empty($gender)){
    echo "Gender is required";
}
if(empty($options)){
    echo "An option must be selected";
}
if(empty($interests)){
    echo "not valiiiddd";
}
if (empty($username)) {
    echo "Username is required";
}

if (empty($password)) {
    echo "Password is required";
}
if(empty($department)){
    echo "depart is required";
}

if (empty($code_word) || $code_word != "SH58So") {
    echo "Invalid code word";
}


if(!empty($errors)){
    header("Location:index.php");
   exit;
}

//if everythong is valid 

else{
if (preg_match('/^[a-zA-Z\s]+$/', $first_name) &&
 preg_match('/^[a-zA-Z\s]+$/', $lname) && 
 !empty($address) && !empty($gender) &&
  !empty($interests) && !empty($options) &&
   !empty($username) && !empty($password) && 
   !empty($department)&&
   !empty($code_word)&&$code_word == "SH58So") {
    if($gender=="male"){
        echo "mr ".$first_name ." ".$lname . "please Review Your Information :" ."<br>";
        echo "name : " . $first_name ." ".$lname ."<br>";
        echo "Address: " .$address ."<br>";
        for ($i=0; $i <count($interests) ; $i++) { 
            echo "your skills : ";
            echo $interests[$i] ."<br>";
        }
        echo "Department :" . $department ."<br>";
    }
    else{
        echo "miss ".$first_name ." ".$lname . "please Review Your Information :" ."<br>";
        echo "name : " . $first_name ." ".$lname ."<br><br>";
        echo "Address: " .$address ."<br><br>";
        for ($i=0; $i <count($interests) ; $i++) { 
            echo "your skills : ";
            echo $interests[$i] ."<br><br>";
        }
        echo "Department :" . $department ."<br><br>";

    }


   }
}


?>