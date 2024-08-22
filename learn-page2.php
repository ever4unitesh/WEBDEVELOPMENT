<?php
 $con = mysqli_connect("localhost","root","");
 mysqli_select_db($con,"online tutorial");

?>


<!DOCTYPE html>
<html>
<head>
	<title> Online tutorial </title>

	<!- custom files ->
    <link rel="stylesheet" type="text/css" href="css/learn-page-css.css">

    <script type="text/javascript" src="js/jquery.js"> </script>

</head>
<body>
   

     <div class="wrapper">
     	<div class="header">
     		<div class="wrap-container">
     			<div id="header-images">
              <img class="brand-image" src="images/logo.png">   
          </div>
               <div id="menu">
                   <ul id="navigation">
                      <li><a href="../OT/index.php">Home</a></li>
                      <li><a href="#">About</a></li>
                      <li><a href="#">Contact</a></li>
                      <li><a href="#">Services</a></li>
                      <li><a href="#">logout</a></li>
                   </ul>
               </div>
     	  </div>
      </div>
      
       <div class="nav-bar">
        <div class="left-nav">
        	<h2> Course </h2>
        	<ul id="course">
        		<li><a href="learn-page-diploma.php"> Diploma </a></li>
        		<li><a href="learn-page-BE.php"> BE </a></li>
        		<li><a href="learn-page-ITI.php"> ITI </a></li>
        	</ul>
        </div>
       </div>

       <div class="top-nav">
       	  <div class="navigation">
           <form action="" method="POST">
           <div id="branch"><select id="branchdd">
            	<option> Select Branch </option>
              </select></div>

          <div><select id="semester">
            	<option> Select Semester </option>
                </select></div>

        	<div><select id="subject">
        		<option> Select Subject </option>
          </select></div>
          </form>

        </div>
       </div>

       <div class="wrap-content">
       	 <div class="wrap-content">
             <h2 style="margin auto; padding: 0px 150px; color: rgba(25,55,0,0.7); font-size: 1.8em;"> Please Select a Course </h2>
       </div>

      </div>

</body>
</html>