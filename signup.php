<!DOCTYPE html>
<html lang="en">

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
<?php
    $showError = (isset($showError))?$showError:false;
    echo "<h1>$showError</h1>";
    $existingUserErr = (isset($existingUserErr))?$existingUserErr:false;
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = $_POST["fullName"];
        $email = $_POST["email"];
        $pass = $_POST["password"];
        $contact_number = $_POST["contactNumber"];
        $birth_date = $_POST["birthDate"];

        if(require 'connection.php')
        {
            $query = "INSERT INTO `users`(`full_name`, `email`, `password`, `contact_number`, `birth_date`) VALUES ('$fullname','$email', MD5('$pass'), '$contact_number', '$birth_date');";
            if(mysqli_query($conn, $query)) {
                header("location: signin.php");
            }
        }
    }
?>

<body id="signUp">
    <div class="container-fluid signUpContainer">
        <div class="row">
            <div class="col-12 col-lg-6 signUpImgContainer m-0 p-0">
            </div>
            <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center formContent">
                <form method="POST" action="signup.php" id="signUpForm" class="col-10 col-lg-6">
                    <h4 class="pageHeader">Sign Up</h4>
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName" name="fullName" value="<?php echo isset($_POST["fullName"]) ? $_POST["fullName"] : ''; ?>">
                        <div class="d-none" id="fullNameError">
                            Please Enter Fullname.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="text" class="form-control" id="email" name="email">
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
                        <input type="password" class="form-control" id="password" name="password">
                        <div class="d-none" id="passwordError">
                            Please fill password field.
                        </div>  
                    </div>
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
                        <div class="d-none" id="noMatchError">
                            Password and Confirm Password must be same.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="contactNumber" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" id="contactNumber" name="contactNumber">
                        <div class="d-none" id="`1">
                            Please fill contact number.
                        </div>
                        <div class="d-none" id="invalidNumberError">
                            Please Enter 10 digit number only.  
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="birthDate" class="form-label">Birth Date</label>
                        <input type="date" class="form-control" id="birthDate" name="birthDate">
                        <div class="d-none" id="birthDateError">
                            Please fill birth date field.
                        </div>
                        <div class="d-none" id="ageError">
                            your age must be greater than 15 year .
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary primaryBtn" onclick="return signupValidate()">Register</button>
                    <span class="mx-3 forgotPassword"><a href="signin.php">Already Registered?</a></span>
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