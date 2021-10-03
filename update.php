<?php 

    require_once("conn.php");
    
    if(isset($_POST['update']))
    {
        $userEmail = $_GET['GetID'];
        $userDesg = $_POST['desg'];
        $userManager = $_POST['manager'];
        $userAllocated = $_POST['allocated'];
       
        $query = " update employee set desg = '".$userDesg."',
         manager='".$userManager."',allocated='".$userAllocated."' 
         where email='".$userEmail."'";
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
    else if(isset($_POST['back']))
    {
        header("location:Admin Panel.php");
    }
    else
    {
        header("location:view.php");
    }


?>