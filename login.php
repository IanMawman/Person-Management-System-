<?php
session_start();
if(isset($_POST['loginbttn']))
{
    extract($_POST);
    include 'database.php';
    include 'Homepaege.'
    $sql=mysqli_query($conn,"SELECT * FROM people where username='$username' and Password='md5($password)'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["ID"] = $row['username'];
        header("Location: managepage.html"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>