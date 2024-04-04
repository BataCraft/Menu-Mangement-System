const form = document.registerForm;
const fullname = form.fname;
const phone = form.phone;
const address = form.address; 
const password = form.password;
const confirmPassword = form.confirmPassword;
form.addEventListener("submit", function(e) {
    // Adding event listener to the form for form submission
// SVGFEGaussianBlurElement
    if (fullname.value === "") { 
        fullname.nextElementSibling.innerText = "Enter your fullname";
        e.preventDefault();
    }
    if (phone.value === "") { 
        phone.nextElementSibling.innerText = "Enter your phoneNo";
        e.preventDefault();
    }
    if (address.value === "") { 
        address.nextElementSibling.innerText = "Enter your address";
        e.preventDefault();
    }
    if (password.value === "") { 
        password.nextElementSibling.innerText = "Enter your password";
        e.preventDefault();
    }
    if (confirmPassword.value === "") { 
        confirmPassword.nextElementSibling.innerText = "Enter your confirmPassword";
        e.preventDefault();
    }

    if (confirmPassword.value !== password.value) { /
        // If passwords don't match, display an error message
        confirmPassword.nextElementSibling.innerText = "Passwords do not match";
        e.preventDefault();
    }
});
