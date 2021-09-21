<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body id="login">
    <div class="container-fluid loginContainer">
        <div class="row">
            <div class="col-12 col-lg-6 loginImgContainer m-0 p-0">
            </div>
            <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center formContent">
                <form action="index.html" id="loginForm" class=" col-10 col-lg-6">
                    <h4 class="pageHeader">Sign In</h4>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="text" class="form-control col-md-12" id="email">
                        <div class="d-none" id="emailError">
                            Invalid Email.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password">
                        <div class="d-none" id="passwordError">
                            Please fill password field.
                        </div>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="rememberUser">
                        <label class="form-check-label" for="rememberUser">Remember me </label>
                    </div>
                    <input type="submit" class="btn btn-primary primaryBtn" value="Log In"></button>
                    <span class="mx-3 forgotPassword"><a href="forgotPassword.html">Forgot password?</a></span>
                    <div class="mt-3">
                        <span class="forgotPassword"><a href="SignUp.html">Not have an Account? Create
                                Now!!</a></span>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>