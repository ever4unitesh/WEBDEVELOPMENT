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
                      <li><a href="../OT/index.php" class="active">Home</a></li>
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
        		<li><a href="learn-page-ITI.php" class="active"> ITI </a></li>
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
       	 <article>
         
        <h1 style="margin: 0px auto; text-align: center; padding: 0px 5%; padding-top: 10%; font-family: verdana; font-weight: bold; font-size: 2.5em;"> Not Available </h1>

        <h2 style="margin: 0px auto; text-align: center; padding: 3% 5%; font-family: verdana; font-weight: bold; font-size: 2.5em;"> Comming Soon </h2>
         
      </article>
     
       </div>

      </div>

</body>
</html>