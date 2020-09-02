<?php 

session_start();
include "includes/users.inc.php";
include 'includes/process.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/simplex/bootstrap.min.css" integrity="sha384-FYrl2Nk72fpV6+l3Bymt1zZhnQFK75ipDqPXK0sOR0f/zeOSZ45/tKlsKucQyjSp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <title>Chat App || Home</title>>
</head>
<body>
    <div class="container main-section">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12 left-sidebar">
                <div class="input-group searchbox">
                    <div class="input-group-btn">
                        <center>
                            <a href="includes/find_friends"><button type="submit" name="search_user" class="btn btn-default search-icon"> Add New User </button></a>
                        </center>
                    </div>
                </div><!-- End Of Div Search Box -->
                <div class="left-chat">
                    <ul>
                    
                    </ul>
                </div>
            </div> <!-- End Of Div Left-sidebar -->

            <div class="col-md-9 col-sm-9 col-xs-12 right-sidebar">
                <div class="row">
                    <!-- Get Logged In User Information f-->
                    <!-- Get Users Data Which is Click on The Left side -->
                    <div class="col-md-12 right-header">
                        <div class="right-header-img">
                            <?php echo $user_profile_image; ?>
                        </div>
                        <div class="right-header-detail">
                           <form action="includes/logout.inc.php" method="POST">
                                <p><?php echo $username; ?></p>
                                <span><?php echo $total_result; ?></span>&nbsp &nbsp
                                <button type="button" name="logout" class="btn btn-danger">Log Out</button>
                           </form>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!--End of Div Row -->

    </div><!-- End of Div Container -->

</body>
</html>