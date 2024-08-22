<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <!- java script files ->
    <script src="js/jquery.js"> </script>
    <script src="js/homepage-custom.js" type="text/javascript"> </script>
    
    <!- custom files ->
    <link rel="stylesheet" type="text/css" href="css/homepage-custom-css.css">
    <link rel="stylesheet" type="text/css" href="css/homepage-custom-responsive.css">
    
    <!- awesome font files ->
    <link rel="stylesheet" href="fonts/font-awesome/css/fontawesome-all.min.css">
</head>
<body>
  <div id="wrapper">
    <div id="header">
       <div id="wrap-container">
          <div id="header-images">
              
             <img class="brand-image" src="images/logo.png" class="menu-btn">   
           </div>
               <div id="menu">
                   <ul id="navigation">
                      <li><a href="#wrapper-content" class="active">Home</a></li>
                      <li><a href="#about-us">About</a></li>
                      <li><a href="#contact-us">Contact</a></li>
                      <li><a href="#service-container">Services</a></li>
                      <li><a href="#">Login</a></li>
                   </ul>
               </div>
           </div>
       </div> 
      <div id="wrapper-content">
          <h1> Learn all The Notes in Hindi and English </h1>
          <p> There are the given Notes, PDF in Hindi. like Polytechnic, ITI and BE etc. </p>
          <form action="signup-page.php" method="POST"><input type="submit" value="Start to learn" class="learn-btn">
          </form>
      </div>
              
              
</div> 
     <div id="services">
       <div id="service-container">
         <h1> Our Services </h1>
         <br>
         <div class="div-box">
             <div class="font-size">
                 <i class="fas fa-users"></i>
             </div>
              <h2> 04 </h2>
              <h3> Our Client </h3>
              <p><small>Online Tutorial</small></p>
         </div>
         <div class="div-box">
             <div class="font-size">
                 <i class="fas fa-user-plus"></i>
             </div>
              <h2> 101 </h2>
              <h3> total users </h3>
              <p><small>Online Tutorial</small></p>
         </div>
         <div class="div-box">
             <div class="font-size">
                 <i class="fas fa-edit"></i>
             </div>
              <h2> 01 </h2>
              <h3> complete project </h3>
              <p><small>Online Tutorial</small></p>
         </div>
         <div class="div-box">
             <div class="font-size">
                 <i class="fas fa-user-secret"></i>
             </div>
              <h2> 01 </h2>
              <h3> prime membership </h3>
              <p><small>Online Tutorial</small></p>
         </div>
      </div>                    
    </div> 
         <div id="about-us">
             <h1> About us </h1>
             
             <div id="wrap-container">
                <p>
                 In this website we will provide notes for all the engineering student
                 who are unable to go college or busy with there work. 
                 we will provide all the notes in both hindi and english languages. it can helps students to learn there notes in hindi and english .
                 all the nots will be according to RGPV syllabus, where student can find there notes according to his syllabus.
                 generally the students face problum to find there notes in hindi, so we are trying to provide the notes for the student.    
             </p> 
             </div>
         </div> 
             <div id="contact-us">
                 <h1> Contact Us </h1>
                 <div id="wrap-container">
                     <div id="contact-image">
                        <img src="images/iphone_1.jpg" alt="contact-image"> 
                     </div>
                     <div id="contact-form">
                        <form action="">
                         <input type="text" placeholder="Name">
                         <input type="email" placeholder="Email">
                         <input type="text" placeholder="Mobile number">
                         <input type="text" placeholder="Subject" class="subject">
                         <textarea placeholder="message" class="textarea"> </textarea>
                         <input type="submit" placeholder="Submit Message" class="submit">
                    </form> 
                     </div>
                 </div>
             </div>
                 <div id="footer">
                     <div id="widget-footer">
                         <div id="wrap-container">
                            <div id="widgets">
                             <h4> CONTACT INFORMATION </h4>
                             <p> Hello guys! this is contact information section</p>
                             <p><strong>Phone:</strong> 6263848608</p>
                             <p><strong>Email:</strong> ever4uabhishek@gmail.com</p>
                            </div>
                            
                            <div id="widgets">
                             <h4> SIGN UP TO TUTORIAL </h4>
                             <p> if you want to latest notes and tutorials the please sign up for E2H tutorial</p>
                             <p><strong>Email:</strong></p>
                             <input type="text" class="subscribe-text"> <br>
                             <input type="submit" value="SUBSCRIBE" class="subscribe-btn">  
                            </div>
                            
                            <div id="widgets">
                             <h4> FOLLOW ON SOCIAL MEDIA </h4>
                             <a href="http://www.facebook.com"/><i class="fab fa-facebook-square"></i></a>
                             <a href="http://www.twitter.com"/><i class="fab fa-twitter-square"></i></a>
                             <a href="http://www.googleplus.com"/><i class="fab fa-google-plus-square"></i></a>
                             <a href="http://www.youtube.com"><i class="fab fa-youtube"></i></a>  
                            </div>
                            
                            <div id="widgets">
                             <h4> RECENT COMENTS </h4>
                             <p><strong>Abhishek</strong> Thish webisite is most helpful.</p>
                             <p><strong>sachin</strong> Most commonely users stutying thish website.</p>
                             <p><strong>Neeraj</strong> All students who is know this site help us.</p>
                             <p><strong>preetam</strong> There are all services provided for free.</p>
                            </div>
                         </div>
                     </div>
                     <div id="main-footer">
                         <P> Copyright &copy; 2018 E2H tutorial</P>
                     </div>
                 </div> 
      
       
    
</body>
</html>