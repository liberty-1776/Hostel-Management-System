<!-- By CodeAstro - codeastro.com -->
<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Hostel Management System</title>
    <link href="dist/css/style.min.css" rel="stylesheet">

    <script type="text/javascript">
        function valid() {
            if (document.registration.password.value != document.registration.cpassword.value) {
                alert("Password and Re-Type Password Field do not match  !!");
                document.registration.cpassword.focus();
                return false;
            }
            return true;
        }
    </script>

</head>
<body>
    <div class="main-wrapper">
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            style="background:url(../assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box row">
                <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(assets/images/hostel-img.jpeg);">
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <div class="text-center">
                            <img src="assets/images/big/icon.png" alt="wrapkit">
                        </div>
                        <h2 class="mt-3 text-center">Student Login</h2>

                        <form class="mt-4" method="POST">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="uname">Email</label>
                                        <input class="form-control" name="email" id="uname" type="email" placeholder="Enter your email" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="pwd">Password</label>
                                        <input class="form-control" name="password" id="pwd" type="password" placeholder="Enter your password" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" name="login" class="btn btn-block btn-dark">LOGIN</button>
                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                    <a href="admin/index.php" class="text-danger">Go to Admin Panel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/libs/jquery/dist/jquery.min.js "></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <script>
        $(".preloader ").fadeOut();
    </script>
</body>

</html>