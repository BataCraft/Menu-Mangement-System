const form = document.register_form;
const fullname = form.fname;
const phone = form.phone;
const address = form.address; 
const password = form.password;
const confirmPassword = form.cpsd;

   



let myarr = [form, fullname, phone, address, password, confirmPassword];

myarr.forEach(item => {
    let span = document.createElement('span');
    span.classList.add(`error`);
    item.parentElement.append(span);
});

form.addEventListener('submit', (e) => {
    if (fullname.value == "" && phone.value == "" && address.value == "" && password.value == "" && confirmPassword.value == "") {
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
});
