<?php
/*
* Author: Muhammed Salman Shamsi
* Created On: 13 Aug, 2018 
*/
function fix_name($name){
    $name=trim($name);                //remove spaces
    $name=  ucfirst($name);           //Uppercase the first letter 
    $name=  addslashes($name);        //escape apostrophe and many more
    return $name;
}
function fix_email($email){
    $email=trim($email);
    $email=  strtolower($email);      //convert the string in lower case
    $email=  addslashes($email);
    return $email;
}
function fix_address($address){
    $address=trim($address);
    $address=  strtoupper($address);  //convert the string in upper case
    $address=  addslashes($address);
    return $address;
}
function fix_rollno($rollno){
    $rollno=trim($rollno);
    $rollno=  strtoupper($rollno);
    return $rollno;
}
?>
