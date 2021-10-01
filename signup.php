<?php
    session_start();
    $showError = (isset($showError)) ? $showError : false;
    $existingUserErr = (isset($existingUserErr))?$existingUserErr:false;
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $fullname = $_POST["fullName"];
        $email = $_POST["email"];
        $pass = $_POST["password"];
        $contact_number = $_POST["contactNumber"];
        $birth_date = $_POST["birthDate"];
        session_destroy();
        if(require 'connection.php')
        {
            
            $userExistQuery = "select * from users where email='$email';";
            
            $res = mysqli_query($conn, $userExistQuery);
            if($res) {
                $_SESSION["RES"] = mysqli_num_rows($res); 
                if(!mysqli_num_rows($res)){
                    setcookie("userExistErr", "", time() - 3600);
                    $query = "INSERT INTO `users`(`full_name`, `email`, `password`, `contact_number`, `birth_date`) VALUES ('$fullname','$email', MD5('$pass'), '$contact_number', '$birth_date');";    
                    if(mysqli_query($conn, $query)) {
                        $id = mysqli_insert_id($conn);
                        $mail_body = '<html>
                        <body>
                        <h1>👋 Welcome To Expeny!</h1>
                        <p>After this step you\'ll be able to start manage your expenses.</p>
                        <p>To ensure you\'re legitimate and not some fake bot, please verify your account by clicking <a href="http://localhost:8080/Expeny/verify.php?id='.$id.'">here</a>.</p>
                        </body>
                        </html>';        
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                        $headers .= 'From: Expeny<bhavin.kareliya2017@gmail.com>' . "\r\n";
                        
                        if(mail($email, "Expeny - Verify Account", $mail_body, $headers))
                        {
                            setcookie("UNVERIFIED_EMAIL", $email);
                            header("location: signup.php");
                        } else {}
                    }
                } else {
                    setcookie("userExistErr",$email);
                    header("location: signup.php");
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
    <title>Join Expeny Now</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.svg"/>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        
</head>
<body id="signUp">
    <div class="container-fluid signUpContainer">
        <div class="row">
            <div class="col-12 col-lg-6 signUpImgContainer m-0 p-0">
            </div>
            <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center formContent">
                <form method="POST" action="signup.php" id="signUpForm" class="col-10 col-lg-6">
                    <h4 class="pageHeader">Sign Up</h4>
                    <?php
                       if(isset($_COOKIE['UNVERIFIED_EMAIL']))
                       {
                           
                           echo '<div class="mb-3">
                                    <div class="alert alert-primary" role="alert" data-bs-toggle="tooltip" data-bs-placement="top" title="verify email from '.$_COOKIE["UNVERIFIED_EMAIL"].'">
                                        <i class="fas fa-info-circle"></i>
                                        <span class="pl-2">Please verify your email.</span>
                                    </div>
                                </div>';
                        }
                    ?>
                    <?php
                       if(isset($_COOKIE["userExistErr"]))
                       {
                           echo '<div class="mb-3">
                                    <div class="alert alert-danger" role="alert" data-bs-toggle="tooltip" data-bs-placement="top" title="email '.$_COOKIE["userExistErr"].' is already exist.">
                                        <i class="fas fa-exclamation-triangle"></i>
                                        <span class="pl-2">Email already exist.</span>
                                    </div>
                                </div>';
                        }
                    ?>
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName" name="fullName" autocomplete="off">
                        <div class="d-none" id="fullNameError">
                            Please Enter Fullname.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="text" class="form-control" id="email" name="email" autocomplete="off">
                        <div class="d-none" id="emailError">
                            Invaid email.
                        </div>
                        <?php 
                            if ($existingUserErr) {
                               echo '<div class="d-none" id="passwordError">Email address already in use.</div>';
                            }
                        ?>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" autocomplete="off">
                        <div class="d-none" id="passwordError">
                            Please fill password field.
                        </div>  
                    </div>
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" autocomplete="off">
                        <div class="d-none" id="noMatchError">
                            Password and Confirm Password must be same.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="contactNumber" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" id="contactNumber" name="contactNumber" autocomplete="off">
                        <div class="d-none" id="`1">
                            Please fill contact number.
                        </div>
                        <div class="d-none" id="invalidNumberError">
                            Please Enter 10 digit number only.  
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="birthDate" class="form-label">Birth Date</label>
                        <input type="date" class="form-control" id="birthDate" name="birthDate" >
                        <div class="d-none" id="birthDateError">
                            Please fill birth date field.
                        </div>
                        <div class="d-none" id="ageError">
                            your age must be greater than 15 year .
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary primaryBtn" id="validateSignUp">Register</button>
                    <span class="mx-3 signinLink"><a href="signin.php">Already Registered?</a></span>
                </form>
            </div>
        </div>
    </div>
</body>

<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="assets/js/main.js"></script>

</html>