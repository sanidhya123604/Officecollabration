<?php 

    require_once("conn.php");
    
    if(isset($_POST['update']))
    {
        $userEmail = $_GET['GetEmpEmail'];
        // $userPassword = $_POST['password'];
        // $userPhoneNo = $_POST['phoneno'];
        // $userAddress = $_POST['address'];
        // $userSkills = $_POST['skills'];
        
 
        $query = " UPDATE `project`.`employee` SET  password= '$_POST[password]',phoneno='$_POST[phoneno]',
        address='$_POST[address]',skills='$_POST[skills]' where email='".$userEmail."'";
        
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:Employee Dashboard.php");
        }
        else
        {
            echo"<script>alert('Check your Query');</script>";
            // echo $_POST['skills'];
        }
    }
    else if(isset($_POST['back']))
    {
        header("location:Employee Dashboard.php");
    }
    else
    {
        header("location:updateempview.php");
    }


?>