<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    
    <link href = "style.css" rel = "stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <link href = "library.css" rel ="stylesheet">
    <style>
        .bb:hover {
            cursor: pointer;
            color: grey;
        }
        </style>
</head>
<body>
    <nav class ="navbar navbar-expand-lg hh">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand bb" href = "index.php">Event Management System</a>
            </div>
            <font style ="color:black"><span><strong>Welcome : <?php echo $_SESSION['name']; ?></strong></span></font>
            <font style ="color:black"><span><strong>Email ID : <?php echo $_SESSION['email']; ?></strong></span></font>
            <ul class = "nav navbar-nav navbar-right">
                <li class ="nav-item dropdown">
                    <a class="nav-link dropdown-toggle bb" data-bs-toggle="dropdown">My Profile</a>
                    <ul class="dropdown-menu">
                        <li><a class ="dropdown-item" href="view_profile.php">View Profile</a></li>
                        <li><a class ="dropdown-item" href ="edit_profile.php">Edit Profile</a></li>
                        <li><a class ="dropdown-item" href="change_password.php">Change Password</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link bb" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>
    <span><marquee id = "mm">Our office opens at 7:00 A.M. and closes at 7:00 P.M.</marquee></span><br><br>
    
</body>
</html>