<?php
 $con = mysqli_connect("localhost","root","");
 mysqli_select_db($con,"online tutorial"); 
 error_reporting("none");
 $branch=$_GET["branch"]; 
 $semester=$_GET["semester"];

  if($branch!=="")
  {
		 $res= mysqli_query($con,"SELECT * FROM semester WHERE Branch_id=$branch");
		 echo "<select  id='semesterdd'>";
		 echo "<option>"; echo "select"; echo "</option>";
		 while($row=mysqli_fetch_array($res)) 
		 {
		 	echo "<option value='$row[Sem_id]'>"; echo $row["Sem_name"]; echo "</option>";
		 }
		echo "</select>";

 }


  if($semester!=="")
  {
		 $res= mysqli_query($con,"SELECT * FROM subject WHERE Sem_id=$semester");
		 echo "<select>";		 
		 while($row=mysqli_fetch_array($res)) 
		 {
		 	echo "<option  value='$row[Sub_id]'>"; echo $row["Sub_name"]; echo "</option>";
		 }
		echo "</select>";

 }

?>
