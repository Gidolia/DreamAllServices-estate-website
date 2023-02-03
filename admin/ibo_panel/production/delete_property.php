<?php 
	$id=$_GET['id'];
	include "../../../database_connect.php";
	
	$del="DELETE FROM `property` WHERE `p_id`='$id'";
    if($con->query($del)===TRUE){
        
        
    header('Location:./propertyLists.php?m=cns');    
    }else{
    header('Location:./propertyLists.php?ms=cnf');
    }


?>