
<?php


  $error="";
  $uname="";
  if(isset($_POST["name"])==true)
  {
	  if(isset($_POST["name"]) && $_POST["name"]!=''){
	  
	  $uname=$_POST["name"];
	  }else{
		  $error="User Name is missign";
	  }
	  if(isset($_POST["pass"]) && $_POST["pass"]!=''){
	  $psw=$_POST["pass"];
	  }
	  else{
		  $error="Password is missing";
	  }
	   if(isset($_POST["mail"]) && $_POST["mail"]!=''){
	  
        $mail=$_POST["email"];
		}
		else{
	     $error="Email is missing";
	  }
	   if($_POST["pass"] == $_POST["confpass"] ){
		    $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname="login";


       $conn = new mysqli($servername, $username, $password,$dbname);
	   


	   
	   if(isset($_POST['done'])){
		   $uname=$_POST['name'];
		     $Email=$_POST['email'];
			   $Pass=$_POST['pass'];
			     $Cpass=$_POST['confpass'];

	   $sql = "INSERT INTO user (UserName,Email,Password,ConfirmPassword)
       VALUES ('$uname','$Email','$Pass','$Cpass');";
      
	   
 
       //$query=mysqli_query($conn,$sql);
      if ($conn->query($sql) === TRUE)
     {
           
	        echo "data inserted";
			header('location:display.php');
     } 
	 else 
	 {
           echo "Error: " . $sql . "<br>" . $conn->error;
     }
	   
 }

	   }
	   else{
		   $error="Password does not match";
	   }
	   
	   // if(count($error)==0){
		//	$conn = new mysqli('localhost', 'root','','login');
  
	 
	   
  }
  ?>

<html>
      <head>

         <title>Input Form </title>
          <link rel ="stylesheet" href="style.css">

       </head>
       <body>
            <div class="box">

            <h2>Registeration</h2>

             <form action="" method="POST">
               <div class="inputBox">
                 <input type="text" name="name"  required=""  value="<?php if(isset($_POST['name'])) echo trim($_POST['name']);?>">
                 <label>UserName</label>
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
			   
			   
                <?php
				 
				 if($error!=""){
					 echo "<span style='color:red'>".$error."</span>";
				 }
				 ?> 
				
				  


 

       </body>
</html>