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
        <div class="container mt-5">
            <form method="POST">
                <div class="form-header">
                    <h2>Sign Up Here</h2>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username"  placeholder="Username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password</label>
                    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <select name="user_country" class="form-control" required>
                        <option>Select a country</option>
                        <option>America</option>
                        <option>Britain</option>
                        <option>Canada</option>
                        <option>Denver</option>
                        <option>Europe</option>
                        <option>France</option>
                        <option>Gambia</option>
                        <option>India</option>
                        <option>Japan</option>
                        <option>London</option>
                        <option>Morroco</option>
                        <option>Nigeria</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select name="gender" class="form-control" required>
                        <option>Select Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Transgender</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-check-input">
                    <label class="checkbox-inline" for="exampleCheck1">I accept the terms & conditions <a href="#">Terms Of Use</a>
                    </label>
                </div>

                <button type="submit" class="btn btn-info btn-block btn-lg">Submit</button>
            </form>
            <div class="text-center small signup">Already have an account? <a href="index.php">Sign In</a><div>
        </div>
    </div>
</body>
</html>