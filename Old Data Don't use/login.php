<?php 

include "db.php";


if(isset($_POST['submit'])){

  $id = $_POST['id'];
  $username = $_POST['username'];
  $password =$_POST['Password'];

//   if($username && $password){
//     echo $username;
//   echo $password;
// }else
//   echo "your input is wrong";

  }

  



  
    // $query = "INSERT INTO test( id,username, password) VALUES ('$id','$username', '$password')";
    $query = "INSERT INTO test (id, username, password)";
    $query .= "VALUES ('','$username','$password')";

    $result = mysqli_query($connection,$query);

    if(!$result){
      die('QUERY FAILED' . mysqli_error());
    }
  

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" 
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
     integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
   <div class="container">
   <form action="login.php" method="post" >
   <div class="mb-3">
    <label for="text" class="form-label">id</label>
    <input type="text" class="form-control"name="id"  aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="text" class="form-label">username</label>
    <input type="textl" class="form-control"name="username" id="username" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control"name="Password" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
</form>
   </div>

<!-- Below mentioned code is just for using fetching the data from database !!  -->
<!-- 
   <?php
   while($row=mysqli_fetch_row($result)){
    ?>
    <pre>
      <?php
    print_r($row);
    ?>
    </pre>

    <?php


   };

   
   
   ?> -->

  
</body>
</html>