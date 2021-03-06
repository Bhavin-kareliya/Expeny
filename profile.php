<?php 
    session_start();
    if(!isset($_SESSION["isAuthenticated"])){
        header("location:signin.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/style.css" />
	<link rel="icon" type="image/png" href="assets/images/favicon.svg"/>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
		integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Profile</title>
</head>

<body id="profile">
	<div class="container-fluid navigation">
	<?php require 'header.php' ?>
	</div>
	<div class="container-fluid">
		<main class="row d-flex">
			<div class="sidebar col-3 menu">
				<ul class="w-100 menuList">
					<li><a href="index.php"><i class="fas fa-home fa-lg mx-3"></i>Home</a></li>
					<!-- <li><a href="trash.html"><i class="fas fa-trash fa-lg mx-3"></i> Trash</a></li> -->
					<li><a href="profile.php" class="active"><i class="fas fa-edit fa-lg mx-3"></i>My Profile</a></li>
					<li><a href="about_us.php"><i class="fas fa-info-circle fa-lg mx-3"></i>About Us</a>
					</li>
					<li><a href="signout.php"><i class="fas fa-sign-out-alt fa-lg mx-3"></i>Log Out</a></li>
				</ul>
			</div>
			<div class="col-9 p-0 d-flex flex-column">
				<div class="mainContent">
					<div>
						<h5 class="contentHead">My Profile</h5>
						<div class="mb-3 d-flex flex-column">
							<label for="avatar" class="form-label">Photo</label>
							<div class="imgContainer mx-3">
								<img src="assets/images/male.svg" alt="No Profile Found" width="90" height="90"
									id="profilePhoto">
								<a href="#"><i class="fas fa-pen-square fa-2x"></i></a>
							</div>
						</div>
						<form action="" class="mt-4">
							<div class="mb-3">
								<label for="email" class="form-label">Email address</label>
								<input type="text" class="form-control" id="email"
									value="bhavin.kareliya17977@marwadieducation.edu.in" readonly disabled>
							</div>
							<div class="mb-3">
								<label for="fullName" class="form-label">Full Name</label>
								<input type="text" class="form-control" id="fullName" value="Bhavin Kareliya">
								<div class="d-none" id="fullNameError">
									Please Enter Fullname.
								</div>
							</div>
							<div class="mb-3">
								<label for="contactNumber" class="form-label">Contact Number</label>
								<input type="text" class="form-control" id="contactNumber" value="9106715919">
								<div class="d-none" id="`1">
									Please fill contact number.
								</div>
								<div class="d-none" id="invalidNumberError">
									Please Enter 10 digit number only.
								</div>
							</div>
							<div class="mb-3">
								<label for="birthDate" class="form-label">Birth Date</label>
								<input type="date" class="form-control" id="birthDate" value="2002-02-09">
								<div class="d-none" id="birthDateError">
									Please fill birth date field.
								</div>
								<div class="d-none" id="ageError">
									your age must be greater than 15 year .
								</div>
							</div>
							<input type="submit" class="btn primaryBtn" value="Register"></button>
						</form>
						<hr class="my-4">
						<h5 class="contentHead">Reset Password</h5>
						<form action="" class="mb-3">
							<div class="mb-3">
								<label for="email" class="form-label">Email address</label>
								<input type="text" class="form-control" id="email"
									value="bhavin.kareliya17977@marwadieducation.edu.in" readonly disabled>
							</div>
							<input type="submit" class="btn btn-secondary" value="Send Mail"></button>
						</form>
					</div>
				</div>
				<?php require 'footer.php' ?>
			</div>
		</main>
	</div>
</body>

</html>

<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
	tabindex="-1">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				Show a second modal and hide this one with the button below.
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
					data-bs-dismiss="modal">Open second modal</button>
			</div>
		</div>
	</div>
</div>