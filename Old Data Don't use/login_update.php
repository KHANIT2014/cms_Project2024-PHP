
<?php  include"db.php"; ?>
<?php
// include "db.php";
include "functions.php";

if(isset($_POST['submit'])){
    // updateData();
    $username = $_POST['username'];
    $password = $_POST['Password'];
    $id  = $_POST['id']; 


    $query ="UPDATE `test` SET `username`='$username',`password`='$password',WHERE 'id'='$id' ";

    // $query = "UPDATE test SET ";
    // $query .="username='$username' ";
    // $query.="password='$password' ";
    // $query.=" WHERE id=$id ";

    $result = mysqli_query($connection,$query);
    if(!$result){
        die('QUERY FAILED ' . mysqli_error($connection));
    }
   

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
        <form action="login_update.php" method="post">
            <div class="mb-3">
                <label for="text" class="form-label">username</label>
                <input type="textl" class="form-control" name="username" id="username" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="Password" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <div class="form_group">
            <select name="" id="">
                <?php
               showAllData()
            
            ?>
        </select>
            </div>
            
        <button type="submit" name="submit" value="submit" class="btn btn-primary">update</button>
        </form>
        
    </div>

</body>

</html>