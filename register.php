<?php
extract($_POST);
include("database.php");
include("Homepage.html");
$sql=mysqli_query($conn,"SELECT * FROM 'people' where signusername='$username'");
if(mysqli_num_rows($sql)>0) 
{
    echo "Email Id Already Exists"; 
	exit;
}
else(isset($_POST['signupbttn']))
    {
        $query="INSERT INTO `people`(`signusername`, `signpassword`) VALUES ([value-1],[value-2]);
        $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
        header ("Location: login.php?status=success");
    }
    else 
    {
		echo "Error Please try again";
	}
}

?>