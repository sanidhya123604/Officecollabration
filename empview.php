<?php 

    require_once("conn.php");
    $query = " select * from employee ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
        div.header{
            display:flex;
            font-family:poppins;
            justify-content:space-between;
            align-items:center;
            padding: 18px 60px;
            background-color: red;

        }
        div.header button{
            background-color: revert;
            font-size: 16px;
            font-weight: 550;
            padding: 14px 22px;
            border: 2px solid black;
            border-radius: 5px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Employee Companians</title>
</head>
<body class="bg-white">
<div class="header">
        <h1 style="font-size:32px;">Employee Companians Details</h1>
        <!-- <form method="POST" action="empview.php">
            <button name="view" ><i class="fas fa-user-plus"></i> VIEW COMPANIANS</button>
        </form> -->
        <form method="POST" action="login panel.php">
            <button name="logout">LOGOUT</button>
        </form>
        
    </div>
        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr bgcolor="red">
                                <td> Employee Name </td>
                                <td> PhoneNo </td>
                                <td> Address </td>
                                <td> Skills </td>
                                <td> Manager </td>
                                <td> Project Allocated </td>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $userName = $row['name'];
                                        $userPhoneNo = $row['phoneno'];
                                        $userAddress = $row['address'];
                                        $userSkills = $row['skills'];
                                        $userManager = $row['manager'];
                                        $userAllocated = $row['allocated'];
                            ?>
                                    <tr>
                                        <td><?php echo $userName ?></td>
                                        <td><?php echo $userPhoneNo ?></td>
                                        <td><?php echo $userAddress ?></td>
                                        <td><?php echo $userSkills ?></td>
                                        <td><?php echo $userManager ?></td>
                                        <td><?php echo $userAllocated ?></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <form method="POST" action="Employee Dashboard.php">
        <div style="margin-left: 47%;" >   
        <button name="back" style="background-color:#0d6efd;border-radius:10px;padding: 0.375rem 0.75rem;font-weight:500;color:white;">BACK</button>
     </div>    
    </form>
    
</body>
</html>