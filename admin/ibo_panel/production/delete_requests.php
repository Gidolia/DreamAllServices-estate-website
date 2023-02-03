<?php 
	$id=$_GET['id'];
	include "../../../database_connect.php";
	
	$del="DELETE FROM `contact` WHERE `p_id`='$id'";
    if($con->query($del)===TRUE){
        
        
    header('Location:./property_request.php?m=cns');    
    }else{
    header('Location:./property_request.php?ms=cnf');
    }


?>