<?php
require_once("conn.php");
if(isset($_POST['submit']))
{
    
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['desg']) || empty($_POST['manager']) || empty($_POST['allocated']))
    {
        echo"<script>alert('All fields are mandatory.');</script>";
    }
    else{
        $userName=$_POST['name'];
        $userEmail=$_POST['email'];
        $userPassword=$_POST['password'];
        $userDesg=$_POST['desg'];
        $userManager=$_POST['manager'];
        $userAllocated=$_POST['allocated'];

        $query = " insert into employee (name,email,password,desg,manager,allocated) values('$userName','$userEmail','$userPassword','$userDesg','$userManager','$userAllocated')";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:Admin Panel.php");
        }
        else
        {
            echo"<script>alert('Please check your Query');</script>";
            
        }
    }
}
else if(isset($_POST['back']))
{
    header("location:Admin Panel.php");
}
else
{
    header("location:index1.php");
}
?>