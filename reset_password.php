<?php 
    session_start();
    if(isset($_SESSION["isAuthenticated"])){
        header("location:index.php");
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
</head>

<body id="forgotPassword">
    <div class="container-fluid forgotPasswordContainer">
        <div class="row">
            <div class="col-12 col-lg-6 forgotPasswordImgContainer m-0 p-0">
            </div>
            <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center formContent">
                <form action="signin.html" id="forgotPasswordForm" class=" col-10 col-lg-6">
                    <h4 class="pageHeader">Reset Password</h4>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email">
                        <div class="d-none" id="emailError">
                            Invalid Email.
                        </div>

                    </div>
                    <input type="submit" class="btn btn-primary primaryBtn" value="Send mail"></button>
                    <span class="mx-3 backToLogin"><a href="signin.html">Back To Login</a></span>
                </form>
            </div>
        </div>
    </div>
</body>

<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="assets/js/main.js"></script>

</html>