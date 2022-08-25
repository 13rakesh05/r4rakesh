<?php
include "connection.php";

if(isset($_GET['deleteid'])){

$id = $_GET['deleteid'];

$dsql = "DELETE FROM `emprecord` WHERE `id` = $id ";

$query = mysqli_query($conn, $dsql);

if($query){
    header('location: display.php');
  }
   else{
         die("Connection failed! " . mysqli_connect_error($conn));
    }
 }
?>
