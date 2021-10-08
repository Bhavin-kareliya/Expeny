<?php
if($_SERVER["REQUEST_METHOD"] == "GET"){
    require 'connection.php';
    if(isset($_GET["id"]))
    {
        $id = $_GET["id"];
        
        if(is_numeric($id))
        {
            $que = "select * from users where user_id = ". $_GET["id"];
            if($result = mysqli_query($conn, $que)){
                $data = mysqli_fetch_assoc($result);
                if($data != null){
                    $data= "update users set is_active = 1 where user_id = ". $_GET["id"];
                    $res = mysqli_query($conn, $data);
                    //unset cookies
                    setcookie("IS_VALID_ID","", -1);
                    setcookie("UNVERIFIED_EMAIL", "", -1);

                    if(mysqli_affected_rows($conn) == 1)
                    {
                        //set cookies
                        setcookie("VERIFIED_EMAIL", true, time() + (60 * 20));
                    } else {
                        setcookie("ALREADY_VERIFIED", true, time() + (60 * 20));
                    }
                } else {
                    setcookie("VERIFIED_EMAIL","", -1);
                    setcookie("IS_VALID_ID", true, time() + (60 * 20));
                }
            }
        } else {
            setcookie("VERIFIED_EMAIL","", -1);
            setcookie("IS_VALID_ID", true, time() + (60 * 20));
        }
        header("location: verify.php");
    }
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.svg"/>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body id="verify">
    <div class="container-fluid verifyContainer">
        <div class="row">
            <div class="col-12 col-lg-6 verifyImgContainer m-0 p-0">
            </div>
            <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center formContent">
                    <?php
                       if(isset($_COOKIE['IS_VALID_ID']))
                       {
                           echo '<div class="mb-3">
                                    <div class="alert alert-primary" role="alert">
                                        <i class="fas fa-exclamation-triangle "></i>
                                        <span class="pl-2">email is already verified or No email found for verification.</span>
                                    </div>
                                </div>';
                        }
                    ?>
                    <?php
                       if(isset($_COOKIE["VERIFIED_EMAIL"]))
                       {
                           echo '<div class="mb-3 w-50 ">
                                    <div class="alert alert-danger d-flex justify-center" role="alert">
                                        <i class="fas fa-check-circle"></i>
                                        <span class="pl-2"><i class="fas fa-exclamation-triangle "></i>You\'re Good to GO! Email verified successfully</span>
                                        <a href="signin.php"><p class="mt-3">Login Now <i class="fas fa-arrow-right"></i></p></a>
                                    </div>
                                </div>';
                            echo '<div class="card w-50 text-center">
                                        <div class="card-body ">
                                        <h5 class="card-title"><i class="fas fa-check-circle"></i>success!</h5>
                                        <p class="card-text">You\'re good to go! Your identity has been verified.</p>
                                        <a href="#" class="btn btn-primary primaryBtn">Login Now</a>
                                        </div>
                                    </div>';
                        }
                    ?>
                    <?php
                       if(isset($_COOKIE["ALREADY_VERIFIED"]))
                       {
                                echo '<div class="card w-50 text-center">
                                            <div class="card-body ">
                                            <h5 class="card-title"><i class="fas fa-exclamation-triangle "></i> Information!</h5>
                                            <p class="card-text">Your identity is already verified.</p>
                                            <a href="#" class="btn btn-primary primaryBtn">Login Now</a>
                                            </div>
                                        </div>';
                        }
                    ?>
            </div>
        </div>
    </div>
    
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>

