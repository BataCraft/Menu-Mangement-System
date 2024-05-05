    let form = document.loginForm;
    let email = form.email;
    let password = form.password;

    form.addEventListener("submit", function (e) {

        // Validate email
        if (email.value.trim() === "") {
            email.nextElementSibling.innerText = 'Please enter your email.';
            e.preventDefault();
        }

        // Validate password
        if (password.value.trim() === "") {
            password.nextElementSibling.innerText = 'Please enter your password.';
            e.preventDefault();

        }

    });

