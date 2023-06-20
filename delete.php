<?php
     include "dbconnect.php";
	 $id=$_GET['del_id'];
	 $sql="DLETE FROM student WHERE id='$id'";
	 
	 if($conn->query($sql))
	 {
		 
		 echo "sucessfully delete.";
		 
	 }
     else
		 "Faild delete!";




?>