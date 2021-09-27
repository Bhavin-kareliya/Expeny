const emailRegex = new RegExp('[a-zA-Z0-9_\\.\\+-]+@[a-zA-Z0-9-]+\\.[a-zA-Z0-9-\\.]+');
const contactRegex = new RegExp("^[0-9]{10}$");;
var liveValidation = false;
const today = new Date();

$(document).ready(function () {

	$("#fullName").keyup((e) => {
		if (!liveValidation)
			return 0;
		const fullName = $(this).val();
		if (fullName == null || fullName.trim().length == 0)
			$("#fullNameError").addClass("d-none");
		else
			$("#fullNameError").removeClass("d-none");
	});

	$("#email").keyup((e) => {
		if (!liveValidation)
			return 0;
		const email = $("#email").val();
		if (emailValidate(email)) {
			flag = true;
			$("#emailError").addClass("d-none");
		}
		else {
			$("#emailError").removeClass("d-none");
		}
	});

	$("#password").keyup((e) => {
		if (!liveValidation)
			return 0;
		const password = $("#password").val();
		const confirmPass = $("#confirmPassword").val();
		if (passwordValidate(password)) {
			flag = true;
			$("#passwordError").addClass("d-none");
		}
		else {
			$("#passwordError").removeClass("d-none");
		}
		if (password == confirmPass) {
			flag = true;
			$("#noMatchError").addClass("d-none");
		}

	});

	$("#confirmPassword").keyup((e) => {
		if (!liveValidation)
			return 0;
		const password = $("#password").val();
		const confirmPass = $("#confirmPassword").val();
		if (password == confirmPass) {
			flag = true;
			$("#noMatchError").addClass("d-none");
		}
		else {
			$("#noMatchError").removeClass("d-none");
		}
	});

	$("#contactNumber").keyup((e) => {
		if (!liveValidation)
			return 0;
		const contactNumber = $("#contactNumber").val();
		if (contactNumber.trim().length > 0 && contactNumber != null) {
			if (!contactRegex.test(contactNumber)) {
				flag = false;
				$("#invalidNumberError").removeClass("d-none");
			}
			else {
				flag = true;
				$("#invalidNumberError").addClass("d-none");
			}
			$("#contactError").addClass("d-none");
		}
		else {
			flag = false;
			$("#contactError").removeClass("d-none");
		}
	});

	$("#birthDate").change((e) => {
		if (!liveValidation)
			return 0;
		const date = $("#birthDate").val();
		flag = birthDateValidate(date);
	});

	function signinValidate() {
		
		e.preventDefault();
		liveValidation = true;
		var emailFlag = false, passFlag = false;
		const email = $("#email").val();
		const password = $("#password").val();

		if (!emailValidate(email)) {
			emailFlag = false;
			$("#emailError").removeClass("d-none");
		}
		else {
			emailFlag = true;
		}
		if (!passwordValidate(password)) {
			passFlag = false;
			$("#passwordError").removeClass("d-none");
		}
		else {
			passFlag = true;
		}
		if (emailFlag && passFlag) {
			console.log("Login Validation Successfull");
			liveValidation = false;
			$("#emailError").addClass("d-none");
			$("#passwordError").addClass("d-none");
			return true;
		}
		return false;
	}

	function signupValidate() {
		liveValidation = true;

		const email = $("#email").val();
		const contactNumber = $("#contactNumber").val();
		const birthDate = $("#birthDate").val();
		const confirmPass = $("#confirmPassword").val();
		const fullName = $("#fullName").val();
		const password = $("#password").val();
		var emailFlag = false, passFlag = false, fullNameFlag = false, confirmPassFlag = false, contactFlag = false;

		if (fullName == null || fullName.trim().length == 0) {
			fullNameFlag = false;
			$("#fullNameError").removeClass("d-none");
		}
		else {
			fullNameFlag = true;
		}
		if (!emailValidate(email)) {
			emailFlag = false;
			$("#emailError").removeClass("d-none");
		}
		else {
			emailFlag = true;
		}
		if (!passwordValidate(password)) {
			passFlag = false;
			$("#passwordError").removeClass("d-none");
		}
		else {
			passFlag = true;
		}
		if (confirmPass != password) {
			confirmPassFlag = false;
			$("#noMatchError").removeClass("d-none");
		}
		else {
			confirmPassFlag = true;
		}
		if (contactNumber.trim().length > 0 && contactNumber != null) {
			if (!contactRegex.test(contactNumber)) {
				contactFlag = false;
				$("#invalidNumberError").removeClass("d-none");
			}
			else {
				$("#invalidNumberError").addClass("d-none");
				contactFlag = true;
			}
			$("#contactError").addClass("d-none");
		}
		else {
			contactFlag = false;
			$("#contactError").removeClass("d-none");
		}
		if (birthDateValidate(birthDate) && emailFlag && fullNameFlag && passFlag && passFlag && confirmPassFlag && contactFlag) {
			liveValidation = false;
			console.log("Registration Validation Successfull.");
			$("#emailError").addClass("d-none");
			$("#passwordError").addClass("d-none");
			$("#contactError").addClass("d-none");
			$("#noMatchError").addClass("d-none");
			$("#birthDateError").addClass("d-none");
			$("#ageError").addClass("d-none");
			$("#passwordError").addClass("d-none");
			return true;
		}
		return false;
	}

	$("#forgotPasswordForm").submit((e) => {
		e.preventDefault();
		liveValidation = true;
		const email = $("#email").val();

		if (!emailValidate(email)) {
			$("#emailError").removeClass("d-none");
		}
		else {
			console.log("Login Validation Successfull");
			liveValidation = false;
			$("#emailError").addClass("d-none");
			window.location = "login.html";
		}
	})
});

function emailValidate(str) {
	if (emailRegex.test(str))
		return true;
	return false;
}

function passwordValidate(str) {
	if (str != null && str != '' && str != undefined)
		return true;
	return false;
}

function birthDateValidate(date) {
	if (date.trim().length == 0) {
		$("#birthDateError").removeClass("d-none");
		$("#ageError").addClass("d-none");
		return false;
	}
	else if (new Date(date) > new Date(new Date().setFullYear(new Date().getFullYear() - 15))) {
		$("#birthDateError").addClass("d-none");
		$("#ageError").removeClass("d-none");
		return false;
	}
	else {
		$("#birthDateError").addClass("d-none");
		$("#ageError").addClass("d-none");
		return true;
	}
}