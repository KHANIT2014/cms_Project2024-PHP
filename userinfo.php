<?php  
include "includes/db.php";
include "search1.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
$data=$_GET['data'];
    // echo $data;

$query_data= "SELECT * FROM posts WHERE post_id = $data";
$resultData= mysqli_query($connection,$query_data);

if($resultData){
    $row= mysqli_fetch_assoc($resultData);
    echo '<div class="container">
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">'.$row['post_title'].'</h4>
  <p>'.$row['post_tags'].'</p>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div>
</div>';
}
?>

    
</body>
</html>