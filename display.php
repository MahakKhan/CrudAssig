<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<style>
body  {
  background-image: url("tau.jpg");
  background-color: #cccccc;
}
</style>
<body>

  <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Display Table Data </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> User Name </th>
 <th> Email </th>
 <th> Password </th>
 <th> Confirm Password </th>
 <th> Delete </th>
 <th> Update </th>

  </tr >

  <?php

     $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname="login";


       $conn = new mysqli($servername, $username, $password,$dbname);
        $q = "select * from user ";

       $query = mysqli_query($conn,$q);

  while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['UserName'];  ?> </td>

 <td> <?php echo $res['email'];  ?> </td>
 <td> <?php echo $res['Password'];  ?> </td>
 <td> <?php echo $res['ConfirmPassword'];  ?> </td>
 <td> <button class="btn-danger btn"> <a href="delete1.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>

  </tr>

  <?php 
 }
  ?>
 
 </table>  

  </div>
 </div>
 <div>
    <a href="registeration.php">Go Back</a>
</div>

</body>
</html>