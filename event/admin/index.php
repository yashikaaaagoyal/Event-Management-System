<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href = "../library.css" rel = "stylesheet">
    <style>
        .bb:hover {
            cursor: pointer;
            color: grey;
        }
        </style>
</head>
<body>
    <nav class ="navbar navbar-expand-lg navbar-dark hh">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand bb" href = "index.php">Event Management System</a>
            </div>
            <ul class ="nav navbar-nav navbar-right">
            <li class ="nav-item">
                    <a class = "nav-link bb" href ="index.php">Admin Login</a>
                </li>
                <li class ="nav-item">
                    <a class = "nav-link bb" href ="../index.php">User Login</a>
                </li>
                <li class ="nav-item">
                    <a class = "nav-link bb" href ="../signup.php">Register</a>
                </li>
            </ul>
        </div>
    </nav>
    <span><marquee id="mm">Our office opens at 7:00 A.M. and closes at 7:00 P.M.</marquee></span><br><br>
    <div class="row">
        <div class="col-md-4" id = "sidebar">
            <h3>Office Timings</h3>
            <ul>
                <li>Opening Time : 7:00 A.M.</li>
                <li>Closing Time : 7:00 P.M.</li>
                <li>Saturday and Sunday off</li>
            </ul>
            <br>
            <h3>Our Servies</h3>
            <ul>
                <li>Peaceful Environment</li>
                <li>Air Conditioning</li>
                <li>Polite and Helping</li>
                <li>Travelling</li>
            </ul>
        </div>
        <div class="col-md-8" id = "maincontent">
            <center><h3><u>Admin Login</u></h3></center>
            <form action = "" method = "post">     
                <div class="form-group">
                    <label for = "email"><b>Email: *</b></label>
                    <input type = "email" name = "email" class ="form-control" required>
                </div><br>
                <div class="form-group">
                    <label for = "password"><b>Password: *</b></label>
                    <input type = "password" name = "password" class ="form-control" required>
                </div><br>
                <button name = "login" class ="btn btn-primary">Login</button>
            </form>
            <?php
                session_start();
                if(isset($_POST['login']))
                {
                    $connection = mysqli_connect("localhost", "root", "");
                    $db = mysqli_select_db($connection, "lms");
                    $query = "select * from admins where email = '$_POST[email]'";
                    $query_run = mysqli_query($connection, $query);
                    while($row = mysqli_fetch_assoc($query_run)) {
                        if($row['email'] == $_POST['email']) {
                            if($row['password'] == $_POST['password']) {
                                $_SESSION['name'] = $row['name'];
                                $_SESSION['email'] = $row['email'];
                                header("Location:admin_dashboard.php");
                            }
                            else {
                                ?>
                                <br><br><center><span class = "alert alert-danger">Wrong Password</span></center>
                                <?php
                            }
                        }
                        else {
                            echo "Wrong Email";
                        }
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>