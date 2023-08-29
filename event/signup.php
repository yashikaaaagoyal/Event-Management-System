<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href = "library.css" rel = "stylesheet">
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
                    <a class = "nav-link bb" href ="admin/index.php">Admin Login</a>
                </li>
                <li class ="nav-item">
                    <a class = "nav-link bb" href ="index.php">User Login</a>
                </li>
                <li class ="nav-item">
                    <a class = "nav-link bb" href ="signup.php">Register</a>
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
            <center><h3><u>User Registration Form</u></h3></center>
            <form action = "register.php" method = "post">
                <div class="form-group">
                    <label for = "name"><b>Full Name: *</b></label>
                    <input type = "text" name = "name" class ="form-control" required>
                </div><br>
                <div class="form-group">
                    <label for = "email"><b>Email: *</b></label>
                    <input type = "email" name = "email" class ="form-control" required>
                </div><br>
                <div class="form-group">
                    <label for = "password"><b>Password: *</b></label>
                    <input type = "password" name = "password" class ="form-control" required>
                </div><br>
                <div class="form-group">
                    <label for = "mobile"><b>Phone Number: *</b></label>
                    <input type = "number" name = "mobile" class ="form-control" required>
                </div><br>
                <div class="form-group">
                    <label for = "address"><b>Address: *</b></label>
                    <textarea row= "5" cols="50" name = "address" class="form-control"></textarea>
                </div><br>
                <button class ="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</body>
</html>