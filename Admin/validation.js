document.addEventListener("DOMContentLoaded", function () {
    let form = document.getElementById('loginForm');
    let emailInput = document.getElementById('email');
    let passwordInput = document.getElementById('password');
    let submitButton = document.getElementById("submit");

    form.addEventListener("submit", function (event) {
        // Prevent the form from submitting by default
        event.preventDefault();

        let email = emailInput.value.trim();
        let password = passwordInput.value.trim();

        // Reset error messages
        emailInput.nextElementSibling.innerText = ''; // Clear email error message
        passwordInput.nextElementSibling.innerText = ''; // Clear password error message

        if (email === "") {
            emailInput.nextElementSibling.innerText = 'Please enter your email.';
             // Exit the function if there's an error
        }

        if (password === "") {
            passwordInput.nextElementSibling.innerText = 'Please enter your password.';
            return; // Exit the function if there's an error
        }

        // If no errors, submit the form
        form.submit();
    });
});
