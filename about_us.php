<!DOCTYPE html>
<html lang="en">
<?php 
    session_start();
    if(!isset($_SESSION["isAuthenticated"])){
        header("location:home.php");
    }
?>

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="assets/images/tabFavicon.svg">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/style.css" />
	<link rel="icon" type="image/png" href="assets/images/favicon.svg"/>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
		integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>About Us</title>
</head>

<body id="aboutUs">
	<div class="container-fluid navigation">
		<header class="row">
			<div class="logo col-12 col-lg-6">
				<img src="assets/images/favicon.svg" alt="No Image Loaded" height="78" width="53" />
			</div>
			<div class="profile col-6 d-flex  justify-content-end align-items-center">
				<div class=" input-group searchbar">
					<span class="input-group-text searchIcon py-0 px-3"><i class="fas fa-search"></i></span>
					<input type="text" class="form-control searchField" placeholder="Search" />
				</div>
				<div class="imgContainer mx-3">
					<img src="assets/images/male.svg" alt="No Profile Found" width="90" height="90" id="profilePhoto">
				</div>
				<div class="d-flex col-3">
					<p class="my-0 username">Bhavin Kareliya</p>
				</div>
			</div>
		</header>
	</div>
	<div class="container-fluid">
		<main class="row d-flex">
			<div class="sidebar col-3 menu">
				<ul class="w-100 menuList">
					<li><a href="index.php"><i class="fas fa-home fa-lg mx-3"></i>Home</a></li>
					<!-- <li><a href="trash.php"><i class="fas fa-trash fa-lg mx-3"></i> Trash</a></li> -->
					<li><a href="profile.php"><i class="fas fa-edit fa-lg mx-3"></i>My Profile</a></li>
					<li><a href="about_us.php" class="active"><i class="fas fa-info-circle fa-lg mx-3"></i>About Us</a>
					</li>
					<li><a href="signout.php"><i class="fas fa-sign-out-alt fa-lg mx-3"></i>Log Out</a></li>
				</ul>
			</div>
			<div class="col-9 p-0 d-flex flex-column">
				<div class="mainContent">
					<div class="row mb-5">
						<div class="col-lg-7 col-md-12 p-4 d-flex flex-column position-static">
							<h3 class="my-4">WHO WE ARE?</h3>
							<p class="card-text mb-auto text-justify">Lorem Ipsum is simply dummy text of the
								printing and
								typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
								since the 1500s, when an unknown printer took a galley of type and scrambled it to
								make a type specimen book. It has survived not only five centuries, but also the
								leap into electronic typesetting, remaining essentially unchanged. It was
								popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
								passages, and more recently with desktop publishing software like Aldus PageMaker
								including versions of Lorem Ipsum.</p>
						</div>
						<div class="col-lg-5 col-md-12 d-flex justify-content-end d-lg-block">
							<img src="assets/images/join.svg" img img-responsive p-3" alt="No Image Found" height="400">
						</div>
					</div>
					<hr class="my-5">
					<div class="row">
						<div class="col-md-4 col-sm-12">
							<img src="assets/images/menonwork.svg" alt="No Image Found" width="367" height="300">
						</div>
						<div class="col-md-8 col-sm-12">
							<div class="row">
								<div class="p-4 d-flex flex-column position-static">
									<h3 class="my-4">OUR QUALITY</h3>
									<p class="card-text mb-auto text-justify">Lorem Ipsum is simply dummy text of the
										printing and
										typesetting industry. Lorem Ipsum has been the industry's standard dummy text
										ever
										since the 1500s, when an unknown printer took a galley of type and scrambled it
										to
										make a type specimen book. It has survived not only five centuries, but also the
										leap into electronic typesetting, remaining essentially unchanged.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer d-flex justify-content-end px-5">
					<p class="copyright mx-4">copyright &#169; 2021. All rights reserved.</p>
					<a href="tel:+919106715919"><i class="fas fa-phone-square-alt fa-lg mx-2" ></i></a>
					<a href="https://facebook.com/bhavin.kareliya.02" target="_blank"><i
							class="fab fa-facebook fa-lg mx-2"></i></a>
					<a href="#" target="_blank"><i class="fab fa-twitter fa-lg mx-2"></i></a>
					<a href="https://wa.me/+919106715919" target="_blank"><i class="fab fa-whatsapp-square fa-lg mx-2"></i></a>
					<a href="https://www.linkedin.com/in/bhavin-kareliya" target="_blank"><i
							class="fab fa-linkedin fa-lg mx-2"></i></a>
					<a href="https://www.instagram.com/bhavin__kareliya" target="_blank"><i
							class="fab fa-instagram fa-lg mx-2"></i></a>
				</div>
			</div>
		</main>
	</div>
</body>

</html>