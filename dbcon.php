<?php
   

  // connect to the database
  $con = mysqli_connect ('localhost','root','','online tutorial');

?>

<?php

  // sign up coad of form... 

  // if the signup button is clicked
  if (isset($_POST['submit'])) {
    //echo '<script type="text/javascript"> alert("signup button clicked") </script>';
  
       $fname = $_POST['firstname'];
       $lname = $_POST['lastname'];
       $m_number = $_POST['m_number'];
       $email = $_POST['email'];
       $pass = $_POST['password'];
       $cpass = $_POST['cpassword'];
       $dob = $_POST['dob'];
       $gender = $_POST['gender'];
       $qualif = $_POST['qualification'];
  
    if ($pass==$cpass) {
        $query = "SELECT * FROM `users_info` WHERE email='$email'";
        $run = mysqli_query($con,$query);

        if (mysqli_num_rows($run)>0) {
        	//there is already a email with the same email
        	echo '<script type="text/javascript"> alert("email already exists...try another email") </script>';
        }
        else {

         $query = "INSERT INTO `users_info`(`fname`, `lname`, `m_number`, `email`, `password`, `cpassword`, `DOB`, `gender`, `qualification`) VALUES ('$fname','$lname','$m_number','$email','$pass','$cpass','$dob','$gender','$qualif')";

         $run = mysqli_query($con,$query);

        if($run)
          {
           echo '<script type="text/javascript"> alert("user registerd... go to login") </script>';
            
           }
         else {
           echo '<script type="text/javascript"> alert("Error..!") </script>';
          }
        }
      }
       else {
  	      echo '<script type="text/javascript"> alert("password and confirm password does not match..") </script>';
  	     }

?>

<?php
    }
   session_start();
   
  // login code of Form...

  //if the login button is clicked..
  if (isset($_POST['login'])) {
  	$email = $_POST['email'];
  	$pass = $_POST['password'];

  	 $query = "SELECT * FROM `users_info` WHERE email='$email' AND password='$pass'";
  	 $run = mysqli_query($con,$query);

  	 if (mysqli_num_rows($run)>0) {
  	 	//valid..
       echo '<script type="text/javascript"> alert("now you are logged in") </script>';
       $_SESSION['email']= $email;
       header('location:learn-page2.php'); 
  	 }
  	 else {
  	 	//invalid..
        echo '<script type="text/javascript"> alert("Invalid email or password") </script>';
  	 }
  }

?>