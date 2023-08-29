<?php 
    session_start();
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "lms");
    $name="";
    $email="";
    $mobile="";
    $address="";
    if(isset($_SESSION['email']))
    {
    
    $query = "select * from users where email = '$_SESSION[email]'";
    
    $query_run = mysqli_query($connection, $query);
    while($row = mysqli_fetch_assoc($query_run)) {
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $address=$row['address'];
        }
    }
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
    <link href="library.css" rel ="stylesheet">
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
                <a class="navbar-brand bb" href = "user_dashboard.php" style="padding: 5px">Event Management System</a>
            </div>
            
            <ul class = "nav navbar-nav navbar-right">
                <li class ="nav-item dropdown">
                    <a class="nav-link dropdown-toggle bb" data-bs-toggle="dropdown">My Profile</a>
                    <ul class="dropdown-menu">
                        <li><a class ="dropdown-item" href="view_profile.php">View Profile</a></li>
                        <li><a class ="dropdown-item"href="edit_profile.php">Edit Profile</a></li>
                        <li><a class ="dropdown-item" href="change_password.php">Change Password</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link bb" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>
    <span><marquee id ="mm">Our office opens at 7:00 A.M. and closes at 7:00 P.M.</marquee></span><br><br>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="update.php" method="post">
            <div class="form-group">
                <label><b>Name:</b></label>
                <input type="text" class="form-control" value = "<?php echo $name?>" name ="name">
            </div><br>
            <div class="form-group">
                <label><b>Email:</b></label>
                <input type="text" class="form-control" value = "<?php echo $email?>" name ="email">
            </div><br>
            <div class="form-group">
                <label><b>Phone number:</b></label>
                <input type="text" class="form-control" value = "<?php echo $mobile?>" name ="mobile">
            </div><br>
            <div class="form-group">
                <label><b>Address:</b></label>
                <textarea rows="5" cols="50" class="form-control" name ="address"><?php echo $address?></textarea>
            </div><br>
            <button type="submit" name="update" class="btn btn-primary">Save Changes</button>
    </form>
        </div>

        <div class="col-md-4"></div>
    </div>
</body>
</html>