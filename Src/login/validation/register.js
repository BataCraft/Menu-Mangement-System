const form = document.register_form;
const fullname = form.fname;
const phone = form.phone;
// const email = form.email;
const address = form.address; 
const password = form.password;
const confirmPassword = form.cpsd;

   



let myarr = [form, fullname, phone, address, email, password, confirmPassword];

myarr.forEach(item => {
    let span = document.createElement('span');
    span.classList.add(`error`);
    item.parentElement.append(span);
});

form.addEventListener('submit', (e) => {
    if (fullname.value == "" && phone.value == "" && address.value == ""  && password.value == "" && confirmPassword.value == "") {
        form.nextElementSibling.innerText = alert ('Plese fill up form! ');
        e.preventDefault();
    }

    else if (fullname.value === '')
    {
        fullname.nextElementSibling.innerText = 'Your fullname is empty!';
        e.preventDefault();
    }
    else if (phone.value === '')
    {
        phone.nextElementSibling.innerText = 'Your phone number is empty!';
        e.preventDefault();
    }
    else if (address.value === '')
    {
        address.nextElementSibling.innerText = 'Your address is empty!';
        e.preventDefault();
    }
    else if (password.value === '')
    {
        password.nextElementSibling.innerText = 'Your password is empty!';
        e.preventDefault();
    }

    else if (password.value != confirmPassword.value){
        confirmPassword.nextElementSibling.innerText = 'Password doesnot match!';
        e.preventDefault();
    }


    
});


// Password validation function
function validatePassword(password) {
    // Password should be at least 8 characters long and contain at least one lowercase letter, one uppercase letter, one digit, and one special character
    const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+={}\[\]|:;“’<,>.?/~]).{8,}$/;
    // return passwordRegex.test(password);
    passwordRegex.nextElementSibling.innerText = (password);
}

// // Email validation function
// function validateEmail(email) {
//     // Regular expression for basic email validation
//     const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
//     return emailRegex.test(email);
// }
