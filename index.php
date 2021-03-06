<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/simplex/bootstrap.min.css" integrity="sha384-FYrl2Nk72fpV6+l3Bymt1zZhnQFK75ipDqPXK0sOR0f/zeOSZ45/tKlsKucQyjSp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
    <title>Chat App</title>
</head>
<body>
    <div class="sign-form">
        <div class="container mt-5">
           <form action="includes/login.inc.php" method="post">
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" name="email">
            </div>

            <div class="form-group">
                <label for="password">Enter Passowrd</label>
                <input type="password" class="form-control" name="pwd">
            </div>

            <button type="submit" class="btn btn-info btn-block btn-lg" name="login">Login</button>
            <div class="small">Forgot Passowd? <a href="forgot_pwd.php">Click Here</a></div> <br>
           </form>
            <div class="text-center small signup">Don't have an account? <a href="register.php">Register</a>
            </div>
        </div>
    </div>
</body>
</html>

