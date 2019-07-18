 <?php

	   
	  $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname="login";


       $conn = new mysqli($servername, $username, $password,$dbname);
	   


	   
	   if(isset($_POST['done'])){
		   
		   $id=$_GET['id'];
		   $uname=$_POST['name'];
		     $Email=$_POST['email'];
			   $Pass=$_POST['pass'];
			     $Cpass=$_POST['confpass'];
				 
				 
				  if($_POST["pass"] == $_POST["confpass"] ){

	   $sql = "Update user set id=$id, UserName='$uname' ,Email='$Email', Password='$Pass', ConfirmPassword='$Cpass' where id=$id ";
      
	   
 
       $query=mysqli_query($conn,$sql);
	   header('location:display.php');
      if ($conn->query($sql) === TRUE)
     {
           
	        echo "data inserted";
     } 
	 else 
	 {
           echo "Error: " . $sql . "<br>" . $conn->error;
     }
	   
 }else{
	 echo "password does not match";
 }
	   }
?>
	<html>
      <head>

         <title>Input Form </title>
          <link rel ="stylesheet" href="style.css">

       </head>
       <body>
            <div class="box">

            <h2>UPDATE</h2>

             <form action="" method="POST">
               <div class="inputBox">
                 <input type="text" name="name"  required=""  value="<?php if(isset($_POST['name'])) echo trim($_POST['name']);?>">
                 <label>User Name</label>
               </div>

               <div class="inputBox">
			       <input type="text" name="email"  required=""  value="<?php if(isset($_POST['email'])) echo trim($_POST['email']);?>">
			       <label>Email</label>
               </div>


               <div class="inputBox">
			    <input type="text" name="pass"  required=""  value="<?php if(isset($_POST['pass'])) echo trim($_POST['pass']);?>">
			    <label>Password</label>
		      </div>

			 <div class="inputBox">
			   <input type="password" name="confpass"  required=""    value="<?php if(isset($_POST['confpass'])) echo trim($_POST['confpass']);?>">
			   			      <label>Confirm Password</label>
			        </div>

                <div id="cha">
			        <input type="checkbox"><FONT color="red">I agree the term and policies</FONT>

			        </div>
                 <br>
               <input type="submit" name="done"  value="submit">


               </form>
               </div>
			   
			   <div>
    <a href="registeration.php">Go Back</a>
</div>

 

       </body>
</html>