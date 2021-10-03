<?php 

    require_once("conn.php");
    $userEmail = $_GET['GetEmpEmail'];
    $query = " select password,phoneno,address,skills from employee where email='".$userEmail."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $userPassword = $row['password'];
        $userPhoneNo = $row['phoneno'];
        $userAddress = $row['address'];
        $userSkills = $row['skills'];
    }
    

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
            background-color: darkseagreen;

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
    <title>Personal Updation Form</title>
</head>
<body class="bg-white">
<div class="header">
        <h1 style="font-size:32px;">Employee Panel - <?php echo $_GET['GetEmpEmail']?></h1>
        <!-- <form method="POST" action="empview.php">
            <button name="view" ><i class="fas fa-user-plus"></i> VIEW COMPANIANS</button>
        </form> -->
        <form method="POST" action="login panel.php">
            <button name="logout">LOGOUT</button>
        </form>
        
    </div>

        <div class="container" style="margin-top:-20px;">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-secondary text-white text-center py-3"> Update Personal Details </h3>
                        </div>
                        <div class="card-body">

                            <form action="empupdate.php?GetEmpEmail=<?php echo $userEmail ?>" method="post">
                                <label style="padding: 10px;font-size: 20px;font-weight: 600;">Password</label>
                                <input type="password" class="form-control mb-2" id="myInput" placeholder=" Numeric only " name="password" value="<?php echo "$userPassword" ?>">
                                <input type="checkbox" onclick="myFunction()" style="margin-left:10px;margin-bottom:10px;"> Show Password
                                <br>
                                <label style="padding: 10px;font-size: 20px;font-weight: 600;">PhoneNo</label>
                                <input type="text" class="form-control mb-2" placeholder=" Phone No " name="phoneno" value="<?php echo "$userPhoneNo" ?>">
                                <label style="padding: 10px;font-size: 20px;font-weight: 600;">Address</label>
                                <input type="text" class="form-control mb-2" placeholder=" Address " name="address" value="<?php echo "$userAddress" ?>">
                                <label style="padding: 10px;font-size: 20px;font-weight: 600;">Skills</label>
                                <input type="text" class="form-control mb-2" placeholder=" Skills " name="skills" value="<?php echo "$userSkills" ?>">
                                <button class="btn btn-primary" name="update">UPDATE</button>
                                <button class="btn btn-primary" name="back">BACK</button>
                                
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
    
</body>
</html>