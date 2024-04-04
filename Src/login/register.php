<?php
include '../header.php';



?>


<div id="warpper">
    <div id="main">


        <div class="field_group">
            <form action="#">
                <h1>Register </h1>
                <div class="fields">
                    <input type="text" placeholder="Enter Your Full Name" value="" name="fname" title="full name" required>
                    <input type="number" placeholder="Enter Your Phone Number" value="" name="phone" required>
                    <input type="text" placeholder="Enter Your Address" value="" name="address" required>
                    <input type="password" placeholder="Enter Your Password" value="" name="password" required>
                    <input type="password" placeholder="Confirm Password" value="" name="cpsd" required>
                    
                   
                </div>



                <div>
                    <div class="login_btn">
                        <button type="submit" name="submit">Create account</button>
                    </div>

                </div>

                <hr style="width: 80%; height: 2px; background-color: #dadada; margin: 32px auto;  ">

                <a href="./login.php" style="color: #A6AFFC;">Already have an account?</a></a>
                </div>
            </form>
        </div>
    </div>
</div>