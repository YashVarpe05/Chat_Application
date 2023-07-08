const form = document.querySelector(".signup form"),
	continueBtn = form.querySelector(".button-1 input"),
	errorText = form.querySelector(".error-txt");
form.onsubmit = (e) => {
	e.preventDefault();
};

continueBtn.onclick = () => {
	// let's start Ajax

	let xhr = new XMLHttpRequest(); //** creating XML object */

	xhr.open("POST", "signup.php", true);
	xhr.onload = () => {
		if (xhr.readyState === XMLHttpRequest.DONE) {
			if (xhr.status === 200) {
				let data = xhr.response;
				if (data == "success") {
					location.href = "index.php";
				} else {
					errorText.textContent = data;
					errorText.style.display = "block";
				}
			}
		}
	};
	// send the data form data through ajax to php
	let formData = new FormData(form); //creating new formData object
	xhr.send(formData); //sending the form data to php
};
