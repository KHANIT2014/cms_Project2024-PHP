<?php include "db.php";

?>

<?php session_start(); ?>

<?php
if(isset($_POST['index_form'])){
    $username_index = $_POST['name_index'];
    $password_index = $_POST['password_index'];


    // $username =  mysqli_escape_string($connection,$username);
    // $password =  mysqli_escape_string($connection,$password);


    $sql_index = "SELECT * FROM users WHERE user_name= '$username_index' ";
    $res_sql_index = mysqli_query($connection,$sql_index);
    if(!$res_sql_index){
        // echo "failedd to connect";
        die("Query failed". mysqli_error($connection));
    }




 while($row_index=mysqli_fetch_assoc($res_sql_index)){
    $user_id= $row_index['user_id'];
    $user_name = $row_index['user_name'];
    $user_password = $row_index['user_password'];
    $user_fristname = $row_index['user_fristname'];
    $user_fristname = $row_index['user_lastname'];
    $user_role = $row_index['user_role'];

    
       
        

}
// $password_index= crypt($password_index,$user_password);

if($username_index == $user_name && $password_index == $user_password){
     $_SESSION['username_index']=$user_name;
     $_SESSION['password_index']=$password_index;
     $_SESSION['user_role']=$user_role;
    header("location:../admin");
}else
header("location:../index.php");






// if($username_index==  $user_name ){
//     header("location:../admin");
        


//         // $_SESSION['username']=$user_name;
//         // $_SESSION['password']=$user_password;
//         // $_SESSION['userfname']=$user_fristname;
//         // $_SESSION['userlname']=$user_lastname;
//         // $_SESSION['userrole']=$user_role;

        
// }
// header("location:../index.php");
   
        
    
}


?>