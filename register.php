<?php
    include 'includes/register.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/simplex/bootstrap.min.css" integrity="sha384-FYrl2Nk72fpV6+l3Bymt1zZhnQFK75ipDqPXK0sOR0f/zeOSZ45/tKlsKucQyjSp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
    <title>Chat App || Sign Up</title>
</head>
<body>
    <div class="sign-form">
        <div class="container mt-3">
            <form action="includes/register.inc.php" method="post">
                <div class="form-header">
                    <h2>Sign Up Here</h2>
                </div>
                <div class="form-group">
                    <label for="username">UserName</label>
                    <input type="text" class="form-control" name="username" palceholder="Enter Your Username" required>
                    <span class="error"><?php echo $nameErr;?></span><br>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" class="form-control" palcehodler="Enter a valid Email" required>
                    <span class="error"><?php echo $emailErr;?></span><br>
                </div>

                <div class="form-group">
                    <label for="Passowrd">Password</label>
                    <input type="password" class="form-control" name="pwd" placehodler="Enter Passowrd" required>
                    <span class="error"><?php echo $pwdErr;?></span><br>
                </div>

                <div class="form-group">
                    <label for="confirm_pwd">Confirm Password</label>
                    <input type="password" class="form-control" name="confirm_pwd" required>
                    <span class="error"><?php echo $pwdErr;?></span><br>
                </div>

                <div class="form-group">
                    <label for="country">Country</label>
                    <select name="country" class="form-control" required>
                        <option value="default">Select Country</option>
                        <option value="America">America</option>
                        <option value="England">England</option>
                        <option value="Nigeria">Nigeria</option>
                    </select>
                    <span class="error"><?php echo $countryErr;?></span><br>
                </div>

                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select name="gender" class="form-control" required>
                        <option value="Default">Select A Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <span class="error"><?php echo $genderErr;?></span><br>
                </div>

                <button type="submit" class="btn btn-info btn-block btn-lg" name="register">Register</button>
            </form>
            <div class="text-center small">Already Have An Account? <a href="index.php">Sign In</a></div>
        </div>
    </div>
</body>
</html>

