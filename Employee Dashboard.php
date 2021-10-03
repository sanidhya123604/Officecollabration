
<?php
session_start();
if(!isset($_SESSION['AdminLoginId']))
{
    header("Location: login panel.php");
}
?>
<?php 

require_once("conn.php");
$query = " select * from employee where email='".$_SESSION['AdminLoginId']."' ";
$result = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  
    <style>
        body {
            margin: 0px;
        }
        div.header{
            display:flex;
            font-family:poppins;
            justify-content:space-between;
            align-items:center;
            padding: 18px 60px;
            background-color:red;

        }
        div.header button{
            background-color: revert;
            font-size: 16px;
            font-weight: 550;
            padding: 14px 22px;
            border: 2px solid black;
            border-radius: 5px;
        }
        div.div.but{
            align-items: center;
            margin-left: 25%;
            padding:150px;
        }
        div.but button{
            
            padding:30px;
            align-items: center;
            width:150px;
            height:50px;
            border: 2px solid black;
            border-radius: 5px;
            background-color: #ff6d6d;
            /* font-size: 16px;
            font-weight: 550;
            padding: 8px 12px;
            border: 2px solid black;
            border-radius: 5px; */
            
        }
    </style>
</head>
<body>
    <div class="header">
        <h1 style="font-size:32px;">Employee Panel - <?php echo $_SESSION['AdminLoginId']?></h1>
        <form method="POST" action="empview.php">
            <button name="view" ><i class="fas fa-user-plus"></i> VIEW COMPANIANS</button>
        </form>
        <form method="POST" action="companiansearch.php">
            <button name="update" ><i class="fas fa-search"></i> SEARCH</button>
        </form>
        <form method="POST">
            <button name="logout">LOGOUT</button>
        </form>
        
    </div>
    <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr bgcolor="red">
                                <td> Name </td>
                                <td> Email </td>
                                <td> Phone No. </td>
                                <td> Address </td>
                                <td> Skills </td>
                                <td> Designation </td>
                                <td> Reporting Manager </td>
                                <td> Project Allocated </td>
                                <!-- <td> </td> -->
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $userName = $row['name'];
                                        $userEmail = $row['email'];
                                        $userPhoneNo = $row['phoneno'];
                                        $userAddress = $row['address'];
                                        $userSkills = $row['skills'];
                                        $userDesg = $row['desg'];
                                        $userManager = $row['manager'];
                                        $userAllocated = $row['allocated'];
                            ?>
                                    <tr>
                                        <td><?php echo $userName ?></td>
                                        <td><?php echo $userEmail ?></td>
                                        <td><?php echo $userPhoneNo ?></td>
                                        <td><?php echo $userAddress ?></td>
                                        <td><?php echo $userSkills ?></td>
                                        <td><?php echo $userDesg ?></td>
                                        <td><?php echo $userManager ?></td>
                                        <td><?php echo $userAllocated ?></td>
                                        <td><a href='empedit.php?GetEmpEmail=<?php echo $userEmail ?>&
                                        phoneno=<?php echo $userPhoneNo ?>&
                                        address=<?php echo $userAddress ?>&
                                        skills=<?php echo $userSkills ?>'>UPDATE</a></td>
                                        
                                        
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
        
    <!-- <div class="butt">
    <form method="POST" action="empview.php">
    <div class="but" >
        <button name="view" ><i class="fas fa-user-plus"></i>VIEW COMPANIANS</button>
    </div>
    </form>
    <form method="POST" action="updateempview.php">
    <div class="but">
        <button name="update" ><i class="fas fa-user-edit"></i>UPDATE</button>
    </div>
    </form>
    </div> -->

    <?php
    if(isset($_POST['logout']))
    {
        session_destroy();
        echo"<script>window.location.href=window.location.origin+'/project/login%20panel.php';</script>";
        // header("Location:login panel.php");
    }
    ?>
    
    
</body>
</html>