<?php
    include ('dbcon.php');
?>

<!DOCTYPE html>
<html  lang="en"> 
   <head>
     <meta charset="UTF-8">
     <title> homepage </title>
     
     <!- external files ->
     <link rel="stylesheet" type="text/css" href="css/signup-page-css.css">
       
    </head>
<body> 
   <div class="wrapper"> 
        <div class="header">
            <div id="container">      
                <div class="header-images">
                   <img class="brand-image" src="images/logo.png" alt="logo"/>   
                </div>
                      <form action="signup-page.php" method="POST">
                      <div class="login_block">
                      <div class="email_block">
                  <level for="e-mail"> Email or Username </level><br><input id="email" type="text" name="email" placeholder="Email or username" required> &nbsp &nbsp
                      </div>
                  
                      <div class="password_block"> 
                  <level for="password"> Password </level> <br><input id="password" type="password" name="password" placeholder="Password" required> &nbsp &nbsp
                  <input id="submit" type="submit" name="login" value="Log In">
                      </div>         
                 </div>
                </form>
           </div>   
      </div>       
   
  <div class="page"> 
   <div id="body_block">
      <div class="body_block_left">
          <div class="body_block_left_center_top">
             <h1> Easy way to find any notes </h1>
          
            <div id="Education_block">
                
                <div class="Education_block_left">
                <a href="#"><img src="images/BE-cover.jpg" alt="BE image"></a>
                   <a href="#"><h2 id="image_title">BE</h2> </a>
                 </div>
                <div class="Education_block_center">
                  <a href="#"><img src="images/POLY-cover.jpg" alt="Diploma image"></a>
                    <a href="#"><h2 id="image_title">Diploma</h2> </a>
                 </div>
                <div class="Education_block_right">
                  <a href="#"><img src="images/ITI-cover.jpg" alt="ITI image"></a>
                    <a href="#"><h2 id="image_title">ITI</h2> </a>
                 </div>

                
        </div>
             <div class="body_block_left_center_bottom">     <h3> Our Facelities </h3>
              
         <ul id="Facelity_list">
              <li> We provide all the notes in Hindi and English. </li>
              <li> We  provide to very easy notes. </li>
              <li> We  provide  all notes in easy way.</li>
              <li> Users can download all the pdfs. </li>
         </ul>             
            <h3> About us : </h3>
              <p id="about_Para">             
                 we are providing all the notes of all subject to all student.  
              </p>          
      </div> 
   </div>
</div> 
            
      <div class="body_block_right">
          <div class="body_block_right_center">
              <h1> Create a new account </h1>
            <form action="signup-page.php" method="POST">

               <input type="text" id="fname" name="firstname" placeholder="Enter first your name.." required> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <input type="text" id="lname" name="lastname" placeholder="Enter your last name.." required>
               <input type="text" id="m_number" name="m_number" placeholder="Enter mobile number.." required>
               <input type="email" id="E-mail" name="email" placeholder="Enter your email.." required>
               <input type="password" id="passrd" name="password" placeholder="Create password.." required>
               <input type="password" id="passrd" name="cpassword" placeholder="Re-enter password.." required>
               <input type="text" id="dob" name="dob" placeholder="DOB.." required> <br> <br>
                
               <input id="male" type="radio" name="gender" value="male" checked>  &nbsp; Male &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
               <input id="female" type="radio" name="gender" value="female" checked> &nbsp; Female <br> <br>
               
               <select id="selecter" name="qualification">
	                                <option value="select"> Select </option>
	                                <option value="bachelor"> Bachelor </option>
	                                <option value="Certificate"> Certificate </option>
	                                <option value="Diploma"> Diploma </option>
	                                <option value="Master"> Master </option>
	                                <option value="Post Diploma"> Post Diploma </option>
	                                <option value="Post Graduate Diploma"> Post Graduate Diploma </option>
	                                <option value="other"> Other </option>
							</select> <br> <br>
              <input type="submit" name="submit" value="Sign up">
            </form>          
          </div>     
        </div>
      </div>
    </div>
  </div>   
</body>
</html>
