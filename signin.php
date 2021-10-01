<?php
session_start();
isset($_SESSION["isAuthenticated"]);
if (isset($_SESSION["isAuthenticated"])) {
    header("location:index.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $pass = $_POST["password"];

    if (require 'connection.php') {
        $query = "SELECT * FROM users WHERE email='$email' and password=MD5('$pass');";
        $result = mysqli_query($conn, $query);
        if ($result) {
            $data = mysqli_fetch_assoc($result);
            if ($data != null) { 
                setcookie("noUserFoundErr", "", time()-3600);
                if($data["is_active"] == 0)
                {
                    setcookie("UNVERIFIED_EMAIL", $email);    
                    header("location: signin.php");
                }  
                else {
                    $_SESSION["id"] = $data["user_id"];
                    $_SESSION["username"] = $data["full_name"];
                    $_SESSION["isAuthenticated"] = TRUE;
                    header("location: index.php");
                }
            } else {
                setcookie("noUserFoundErr", $email, (time()+(60*5)));
                header("location: signin.php");
            }
        }  
    }
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.svg"/>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body id="login">
    <div class="container-fluid loginContainer">
        <div class="row">
            <div class="col-12 col-lg-6 loginImgContainer m-0 p-0">
            </div>
            <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center formContent">
                <form method="POST" action="signin.php" id="signinForm" class=" col-10 col-lg-6">
                    <h4 class="pageHeader">Sign In</h4>
                    <?php
                       if(isset($_COOKIE['UNVERIFIED_EMAIL']))
                       {
                           
                           echo '<div class="mb-3">
                                    <div class="alert alert-primary" role="alert" data-bs-toggle="tooltip" data-bs-placement="top" title="verify email from '.$_COOKIE["UNVERIFIED_EMAIL"].'">
                                        <i class="fas fa-info-circle"></i>
                                        <span class="pl-2">Please verify email first.</span>
                                    </div>
                                </div>';
                        }
                    ?>
                    <?php
                       if(isset($_COOKIE["noUserFoundErr"]))
                       {
                           echo '<div class="mb-3">
                                    <div class="alert alert-danger" role="alert">
                                        <i class="fas fa-exclamation-triangle"></i>
                                        <span class="pl-2">Invalid email or password.</span>
                                    </div>
                                </div>';
                        }
                    ?>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="text" class="form-control col-md-12" id="email" name="email">
                        <div class="d-none" id="emailError">
                            Invalid Email.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        <div class="d-none" id="passwordError">
                            Please fill password field.
                        </div>
                    </div>
                    <!-- <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="rememberUser">
                        <label class="form-check-label" for="rememberUser">Remember me </label>
                    </div> -->
                    <!-- <button type="submit" class="btn btn-primary primaryBtn" onclick="return signinValidate()">Log In</button> -->
                    <button type="submit" class="btn btn-primary primaryBtn" id="validateSignIn">Log In</button>
                    <span class="mx-3 forgotPassword"><a href="reset_password.php">Forgot password?</a></span>
                    <div class="mt-3">
                        <span class="forgotPassword"><a href="signup.php">Not have an Account? Create
                                Now!!</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>

