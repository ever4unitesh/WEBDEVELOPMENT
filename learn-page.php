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
        		<li><a href="#" class="active"> Diploma </a></li>
        		<li><a href="#"> BE </a></li>
        		<li><a href="#"> ITI </a></li>
        	</ul>
        </div>
       </div>

       <div class="top-nav">
       	  <div class="navigation">
           <form action="" method="POST">
           <div id="branch"><select id="branchdd" onchange="change_branch()">
            	<option> Branch </option>
              <?php
                $res=mysqli_query($con,"SELECT * FROM branch");
                while($row=mysqli_fetch_array($res)) 
                 {                 
              ?>
              <option value="<?php echo $row["Branch_id"]; ?>"> <?php echo $row["Branch_name"]; ?></option>
              <?php
                 }
              ?>
                </select></div>

          <div><select id="semester" onchange='change_semester()'>
            	<option> Semester </option>
                </select></div>

        	<div><select id="subject">
        		<option> Subject </option>
                </select></div>
          </form>

          <script type="text/javascript">
            function change_branch()
             {
             var xmlhttp = new XMLHttpRequest();
             xmlhttp.open("GET","ajex.php?branch="+document.getElementById("branchdd").value,false);
             xmlhttp.send(null);
             document.getElementById("semester").innerHTML=xmlhttp.responseText;
            
            if (document.getElementById("branchdd").value == "Branch") 
            {
              document.getElementById("subject").innerHTML = "<select><option>select</option></select>";
            }

            }
                
            function change_semester()
            {
             var xmlhttp = new XMLHttpRequest();
             xmlhttp.open("GET","ajex.php?semester="+document.getElementById("semester").value,false);
             xmlhttp.send(null);
             document.getElementById("subject").innerHTML=xmlhttp.responseText;
            }
          </script>

       </div>
       </div>

       <div class="wrap-content">
       	 <article>
          <h1> Diploma </h1>
          <p> THE SOFTWARE AND OTHER INFORMATION IS DELIVERED TO YOU “AS IS” AND WITH ALL FAULTS. 
				ADOBE, ITS SUPPLIERS, AND CERTIFICATION AUTHORITIES DO NOT AND CANNOT WARRANT THE 
				PERFORMANCE OR RESULTS YOU MAY OBTAIN BY USING THE SOFTWARE, CERTIFICATE AUTHORITY 
				SERVICES, OR OTHER THIRD PARTY OFFERINGS. EXCEPT TO THE EXTENT THAT ANY WARRANTY, 
				CONDITION, REPRESENTATION, OR TERM CANNOT OR MAY NOT BE EXCLUDED OR LIMITED BY LAW 
				APPLICABLE TO YOU IN YOUR JURISDICTION, ADOBE AND ITS SUPPLIERS AND CERTIFICATION 
				AUTHORITIES MAKE NO WARRANTIES, CONDITIONS, REPRESENTATIONS </p>
          <p> THE SOFTWARE AND OTHER INFORMATION IS DELIVERED TO YOU “AS IS” AND WITH ALL FAULTS. 
				ADOBE, ITS SUPPLIERS, AND CERTIFICATION AUTHORITIES DO NOT AND CANNOT WARRANT THE 
				PERFORMANCE OR RESULTS YOU MAY OBTAIN BY USING THE SOFTWARE, CERTIFICATE AUTHORITY 
				SERVICES, OR OTHER THIRD PARTY OFFERINGS. EXCEPT TO THE EXTENT THAT ANY WARRANTY, 
				CONDITION, REPRESENTATION, OR TERM CANNOT OR MAY NOT BE EXCLUDED OR LIMITED BY LAW 
				APPLICABLE TO YOU IN YOUR JURISDICTION, ADOBE AND ITS SUPPLIERS AND CERTIFICATION 
				AUTHORITIES MAKE NO WARRANTIES, CONDITIONS, REPRESENTATIONS </p>
      </article>
      <h1> Engineering </h1>
          <p> THE SOFTWARE AND OTHER INFORMATION IS DELIVERED TO YOU “AS IS” AND WITH ALL FAULTS. 
				ADOBE, ITS SUPPLIERS, AND CERTIFICATION AUTHORITIES DO NOT AND CANNOT WARRANT THE 
				PERFORMANCE OR RESULTS YOU MAY OBTAIN BY USING THE SOFTWARE, CERTIFICATE AUTHORITY 
				SERVICES, OR OTHER THIRD PARTY OFFERINGS. EXCEPT TO THE EXTENT THAT ANY WARRANTY, 
				CONDITION, REPRESENTATION, OR TERM CANNOT OR MAY NOT BE EXCLUDED OR LIMITED BY LAW 
				APPLICABLE TO YOU IN YOUR JURISDICTION, ADOBE AND ITS SUPPLIERS AND CERTIFICATION 
				AUTHORITIES MAKE NO WARRANTIES, CONDITIONS, REPRESENTATIONS </p>
          <p> THE SOFTWARE AND OTHER INFORMATION IS DELIVERED TO YOU “AS IS” AND WITH ALL FAULTS. 
				ADOBE, ITS SUPPLIERS, AND CERTIFICATION AUTHORITIES DO NOT AND CANNOT WARRANT THE 
				PERFORMANCE OR RESULTS YOU MAY OBTAIN BY USING THE SOFTWARE, CERTIFICATE AUTHORITY 
				SERVICES, OR OTHER THIRD PARTY OFFERINGS. EXCEPT TO THE EXTENT THAT ANY WARRANTY, 
				CONDITION, REPRESENTATION, OR TERM CANNOT OR MAY NOT BE EXCLUDED OR LIMITED BY LAW 
				APPLICABLE TO YOU IN YOUR JURISDICTION, ADOBE AND ITS SUPPLIERS AND CERTIFICATION 
				AUTHORITIES MAKE NO WARRANTIES, CONDITIONS, REPRESENTATIONS </p>
       </div>

      </div>

</body>
</html>