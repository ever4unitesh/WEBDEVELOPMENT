<?php
  include ('dbcon.php');
?>

<?php
   
  //set the empty values
  $fname = $lname = $m_number = $email = $pass = $dob = $gender = "";
  
  // if the signup button is clicked
  if (isset($_POST['submit'])) {

  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $m_number = $_POST['m_number'];
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  
   // if do not filled of form properlly
    if (empty($fname)) {
        echo "first name is required";
    }
    if (empty($lname)) {
        echo "last name is required";
    }
    if (empty($m_number)) {
        echo "mobile no. is required";
    }
    if (empty($email)) {
        echo "email is required";
    }
    if (empty($pass)) {
        echo "password is required";
    }
    if (empty($dob)) {
        echo "DOB is required";
    }
    if (empty($gender)) {
        echo "gender is required";
    }
    else {
  $query = "INSERT INTO `users_info`(`fname`, `lname`, `m_number`, `email`, `password`, `DOB`, `gender`) VALUES ('$fname','$lname','$m_number','$email','$pass','$dob','$gender')";

  $run = mysqli_query($con,$query);

  if($run == true)
  {
    echo "data inserted successfully";
    header("location:signup-page2.php");
  }
  else {
    echo "Error";
  }
     }
}
?>