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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Employee Registration Form</title>
</head>
<body class="bg-white">
<div class="header">
        <h1 style="font-size:32px;">Admin Dashboard to Add an Employee</h1>
        <!-- <form method="POST" action="empview.php">
            <button name="view" ><i class="fas fa-user-plus"></i> VIEW COMPANIANS</button>
        </form> -->
        <form method="POST" action="login panel.php">
            <button name="logout">LOGOUT</button>
        </form>
        
    </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-secondary text-white text-center py-3">Employee Registration Form </h3>
                        </div>
                        <div class="card-body">

                            <form action="empaddingquery.php" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" Employee Name " name="name" required>
                                <input type="email" class="form-control mb-2" placeholder=" Employee Email " name="email" required>
                                <input type="password" class="form-control mb-2" placeholder=" Password "id="myInput" name="password" required>
                                <input type="checkbox" onclick="myFunction()" style="margin-left:10px;margin-bottom:10px;"> Show Password
                                
                                <input type="text" class="form-control mb-2" placeholder=" Designation " name="desg"required>
                                <input type="text" class="form-control mb-2" placeholder=" Reporting Manager " name="manager"required>
                                <input type="text" class="form-control mb-2" placeholder=" Allocated Project " name="allocated"required>
                                <button class="btn btn-primary" name="submit">Submit</button>
                               
                            </form>
                           <form action="Admin Panel.php" method="post">
                           <button style="margin-top:-67px;margin-left:90px" class="btn btn-primary" name="back" class="btn btn-primary">Back</button>
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