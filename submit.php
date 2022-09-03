<?php

$db_hostname="127.0.0.1";
$db_username="root";
$db_password="aditi";
$db_name="users";
$conn= mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
/*if(isset($_post['NAME'])&&isset($_post['pHONE NUMBER'])&&isset($_post['cuisines'])){*/
$name=$_POST['NAME'];
$phone=$_POST['pHONE'];
$cuisines=$_POST['cuisines'];
$sql="insert into forms (name,phone,cuisine) values('$name','$phone','$cuisines')";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo"error";mysqli_error($conn);
    exit;}
    else {
        echo " page submitted";
    }
    
?>

