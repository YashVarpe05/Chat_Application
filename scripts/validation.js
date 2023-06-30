function validateForm() {
	const firstName = document
		.querySelector('input[placeholder="First Name"]')
		.value.trim();
	const lastName = document
		.querySelector('input[placeholder="Last Name"]')
		.value.trim();
	const email = document
		.querySelector('input[placeholder="Enter Email address"]')
		.value.trim();
	const password = document.querySelector(
		'input[placeholder="Enter Password"]'
	).value;
	const confirmPassword = document.querySelector(
		'input[placeholder="Enter confirm Password"]'
	).value;
	const photoInput = document.querySelector('input[type="file"]');

	// Validation checks
	if (
		firstName === "" ||
		lastName === "" ||
		email === "" ||
		password === "" ||
		confirmPassword === ""
	) {
		alert("All fields are required.");
		return false;
	}

	if (password !== confirmPassword) {
		alert("Passwords do not match.");
		return false;
	}

	// Additional validation for email format (optional)
	const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
	if (!email.match(emailRegex)) {
		alert("Please enter a valid email address.");
		return false;
	}

	// Additional validation for photo upload (optional)
	if (!photoInput.files || photoInput.files.length === 0) {
		alert("Please upload a photo.");
		return false;
	}

	// Other custom validations can be added if needed

	// If all validations pass, the form will be submitted
	return true;
}
