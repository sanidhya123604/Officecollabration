<?php 

    require_once("conn.php");
    $userEmail = $_GET['GetEmail'];
    $query = " select desg,manager,allocated from employee where email='".$userEmail."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $userDesg = $row['desg'];
        $userManager = $row['manager'];
        $userAllocated = $row['allocated'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
        body {
            margin: 0px;
        }
        div.header{
            display:flex;
            font-family:poppins;
            justify-content:space-between;
            align-items:center;
            padding: 15px 60px;
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
        div.div.but{
            align-items: center;
            margin-left: 25%;
            padding:250px;
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Employee Updation Form</title>
</head>
<body class="bg-white">
<div class="header">
        <h1 style="font-size:32px;">Admin :- update employee - <?php echo $userEmail?></h1>
        <!-- <form method="POST" action="empregform.php">
            <button name="update" ><i class="fas fa-user-edit"></i> ADD</button>
        </form> -->
        <!-- <form method="POST" action="view.php">
            <button name="update" ><i class="fas fa-user-edit"></i>VIEW</button>
        </form> -->
        <form method="POST" action="login panel.php">
            <button name="logout"><i class="fas fa-sign-out-alt"></i> LOGOUT</button>
        </form>
    </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-secondary text-white text-center py-3"> Update Employee Details Here </h3>
                        </div>
                        <div class="card-body">

                            <form action="update.php?GetID=<?php echo $userEmail ?>" method="post">
                                <label style="padding: 10px;font-size: 20px;font-weight: 600;">Desigination</label>
                                <input type="text" class="form-control mb-2" placeholder=" Designation " name="desg" value="<?php echo $userDesg ?>">
                                <label style="padding: 10px;font-size: 20px;font-weight: 600;">Reporting Manager</label>
                                <input type="text" class="form-control mb-2" placeholder=" Reporting Manager " name="manager" value="<?php echo $userManager ?>">
                                <label style="padding: 10px;font-size: 20px;font-weight: 600;">Allocated Project</label>
                                <input type="text" class="form-control mb-2" placeholder=" Allocated Project " name="allocated" value="<?php echo $userAllocated ?>">
                                <button class="btn btn-primary" name="update">Update</button>
                                <button class="btn btn-primary" name="back">BACK</button>
                                
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>