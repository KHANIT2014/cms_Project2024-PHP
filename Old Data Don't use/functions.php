<?php 
include "db.php";
?>

<?php
function showAllData(){
    global$connection;
        $data = "SELECT * FROM test";
        $result101 = mysqli_query($connection,$data);
        if(!$result101){
            die('QUERY FAILED' . mysqli_error());
            }
        while($row1= mysqli_fetch_assoc($result101)){
            $id=$row1['id'];
         echo "<option value='$id'>$id</option>";
        }
        }


// function updateData(){
//     global $connection;
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     $id  = $_POST['id'];

//     $query = "UPDATE `test` SET `username`='[$username]',`password`='[$password]' WHERE 'id'='[$id]";

//     $result = mysqli_query($connection,$query);
//     if(!$result){
//         die('QUERY FAILED ' . mysqli_error($connection));
//     }
// }









?>