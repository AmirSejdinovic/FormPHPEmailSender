<?php
if(isset($_POST['submit']))

 $formok = true;
 $errors = array();

 $ipadress = $_SERVER['REMOTE_ADDR'];
 $date = date('d/m/Y');
 $time = date('H:i:s');

 $title =  $_POST['title'];
 $firstName =  $_POST['firstName'];
 $email = $_POST['email'];
 $company = $_POST['company'];
 $street = $_POST['street'];
 $zip = $_POST['zip'];
 $city = $_POST['city'];
 $country = $_POST['country'];
 //$material = $_POST['material'];
 

 //$hotelNo = $_POST['hotelNo'];
 $specialDemands = $_POST['specialDemands'];


 if(isset($_POST['material'])){
  $material = $_POST['material'];
  $material = "Yes";
}else{
  $material = "no";
}

if(isset($_POST['privacyStatement'])){
  $privacyStatement = $_POST['privacyStatement'];
  $privacyStatement = "Yes";
}else{
  $privacyStatement = "No";
}

if(isset($_POST['hotelYes'])){
  $hotelYes = $_POST['hotelYes'];
}else{
  $hotelYes = "";
}


 //validacija forme
 if(empty($title && $firstName && $company && $street && $zip && $city && $country)){
   $formok = false;
   $errors[] = "You have not fill require fields";
 }

 if($formok){
   
 echo $title;
 echo $material;
 echo  $specialDemands;
 }

 



?>