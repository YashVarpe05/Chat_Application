const form = document.querySelector(".form1");
const continueBtn = form.querySelector(".button input");
const errorText = form.querySelector(".error-txt");

form.onsubmit = (e) => {
	e.preventDefault();
};

continueBtn.onclick = () => {
	// let's start Ajax

	let xhr = new XMLHttpRequest(); //** creating XML object */

	xhr.open("POST", "login.php", true);
	xhr.onload = () => {
		if (xhr.readyState === XMLHttpRequest.DONE) {
			if (xhr.status === 200) {
				let data = xhr.response;
				console.log(data);
				if (data === "success") {
					location.href = "user.php";
				} else {
					errorText.style.display = "block";
					errorText.textContent = data;
				}
			}
		}
	};
	// send the data form data through ajax to php
	let formData = new FormData(form); //creating new formData object
	xhr.send(formData); //sending the form data to php
};
