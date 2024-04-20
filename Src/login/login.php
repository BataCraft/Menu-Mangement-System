
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!-- Css LINK -->
    <link rel="stylesheet" href="../CSS/register.css">
</head>
<body>
    <div id="warpper">
        <div id="main">
            <div id="container" style="width: 30rem;">
                <form action="#" method="POST" id="login_form">
                    <h1>Login Pages</h1>
                    <section>
                        <!-- user email -->
                        <div class="fields">
                            <label for="email">Email Address</label>
                            <input type="email" value="" placeholder="Enter your email address" id="email">
                            <span id="errorMsg"></span>
                        </div>

                        <!-- USer password -->
                        <div class="fields">
                            <label for="password">Password</label>
                            <input type="password" value="" placeholder="Enter your password"  id="password">
                            <span id="errorMsg"></span>
                            <span><a href="forgetpassword.php">forgot password?</a></span>
                        </div>
                    </section>


                    <!-- Submit button -->
                    <div class="login_btns">

                        <div class="btn">
                            <button name="submit" type="submit" id="login">Login</button>
                           
                        </div>

                        
                        <div class="btn" id="register">
                        <hr>
                            <button name="register" id="register">
                                <a href="./register.php" style="color: #ffff;">Register</a>
                            </button>
                        </div>
                    </div>
                </form>

                
            </div>
        </div>

    </div>

    <script>
        /*
        // let registerButton = document.getElementById('register');

        // registerButton.addEventListener('click', ()=>{
        //     window.location.href= 'http://project.loc/Src//login/register.php';
        // });

        const email = document.getElementById('email'),
        password = document.getElementById('password'),
        login = document.getElementById('login');
        const errorMsgElement = inputElement.nextSibling;


      

            let Validation = () =>{
                Login.addEventListener('click', (e)=>{
                   if(email.value === ''){
                    email.parentElement.innerText = ('Plese fill up email');
                    e.preventDefault();
                   }
                })
            }
Validation();

*/

const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const loginForm = document.getElementById('login_form');
    const errorMsgs = document.querySelectorAll('.errorMsg');

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;


    loginForm.addEventListener('submit', (e) => {
      let isValid = true;

      // Reset error messages
      errorMsgs.forEach(msg => msg.textContent = '');

      // Validate email
      if (emailInput.value.trim() === '') {
        emailInput.nextElementSibling.textContent = 'Please enter your email address.';
        isValid = false;
      } else if (!emailRegex.test(emailInput.value.trim())) {
        emailInput.nextElementSibling.textContent = 'Please enter a valid email address.';
        isValid = false;
      }

      // Validate password
      if (passwordInput.value.trim() === '') {
        passwordInput.nextElementSibling.textContent = 'Please enter your password.';
        isValid = false;
      } 

      // Prevent form submission if validation fails
      if (!isValid) {
        e.preventDefault();
      }
    });
    </script>
</body>
</html>