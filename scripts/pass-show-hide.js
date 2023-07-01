const passwordField = document.querySelector(".form input[type='password']"),
	toggleIcon = document.querySelector(".form .field i");

toggleIcon.onclick = () => {
	if (passwordField.type === "password") {
		passwordField.type = "text";
		toggleIcon.classList.add("active");
	} else {
		passwordField.type = "password";
		toggleIcon.classList.remove("active");
	}
};
