function validateform()
{
    var error = 0;

    var email = document.login.email.value;
    var password = document.login.password.value;
    var emailpattern = /^([a-zA-z0-9_\.\-])+@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    var msd = '';

    if(email.trim() == ''){
        document.getElementById('error').innerHTML = "Enter emial!";
        error++;
    }
}