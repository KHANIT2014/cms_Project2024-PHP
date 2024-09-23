
<?php
$connection = mysqli_connect("localhost","root",'',"cms");

if($connection){
    echo "connected successfully";
}else{
    echo "Failed to connect";
}


?>