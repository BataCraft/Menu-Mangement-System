const form=document.login_form,
email=form.email,
 password=form.password
const submit=document.getElementById("subm")

form.addEventListener("submit",function(e){
    if(email.value==""){
        email.nextElementSibling.innerText = "email is empty ";
        e.preventDefault()
    }
    if(password.value==""){
        password.nextElementSibling.innerText = "password is empty ";
        e.preventDefault()
  
    }


})
