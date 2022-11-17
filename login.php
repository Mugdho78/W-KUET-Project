<!DOCTYPE html>
<html>

<head>
    <?php
    include ("config/dbconfig.php");
    $result = 0;
    if (isset($_POST['signin'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['pwd']);
        $key = 'IICT_KUET';
        $Pwd_peppered = Hash_hmac("Sha256", $password, $key);
        $query = $con->query("select `user_id`, `password` from `users` where `user_email` = '$email' and `approval` = 1");
        if($query->num_rows == 1){
            while ($row = mysqli_fetch_assoc($query)){
                $pass = $row['password'];
                $user_id = $row['user_id'];
                if(Password_verify($Pwd_peppered, $pass)){
                    session_start();
                    $_SESSION["user_id"] = $user_id;
                    header("Location: dashboard");
                } else{
                    $result = 2;
                }
            }
        } else{
            $result = 1;
        }
    }

    ?>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <title>IICT KUET | Login</title>
    <!-- google font -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet"
          type="text/css"/>
    <!-- icons -->
    <link rel="stylesheet" href="assets/plugins/iconic/css/material-design-iconic-font.min.css">
    <!-- bootstrap -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- Theme Styles -->
    <link href="assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css"/>
    <!-- style -->
    <link rel="stylesheet" href="assets/css/pages/login.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/kuet_logo.png"/>
</head>

<body>
<div class="main">
    <!-- Sing in  Form -->
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="assets/images/kuet_logo.png" alt="sing up image"></figure>
                    <a href="sign_up.html" class="signup-image-link">Create an account</a>
                </div>
                <div class="signin-form">
                    <h2 class="form-title">Login</h2>
                    <?php
                    if ($result == 1){
                        ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Sorry!</strong> Something went wrong!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php
                    } elseif ($result == 2){
                        ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Sorry!</strong> The password you have entered is incorrect!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php
                    }
                    ?>
                    <form class="register-form" id="login-form" action="#" method="post">
                        <div class="form-group">
                            <div class="">
                                <input name="email" type="email" placeholder="User Email"
                                       class="form-control input-height" required/></div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <input name="pwd" type="password" placeholder="Password"
                                       class="form-control input-height" required/></div>
                        </div>
                        <div class="form-group form-button">
                            <button class="btn btn-round btn-primary" type="submit" name="signin" id="signin">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- start js include path -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- bootstrap -->
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- end js include path -->
</body>


<!-- Mirrored from www.einfosoft.com/templates/admin/smart/source/light/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Oct 2022 17:54:55 GMT -->
</html>