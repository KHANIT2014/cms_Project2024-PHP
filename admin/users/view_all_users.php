<?php
include "functions.php";
include "../includesadmin/header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
     crossorigin="anonymous"></script>
    <title>VIEW ALL POSTS</title>
</head>
<body>
    <h1 style="text-align:center" >this is post page</h1>
    <table class="table table-bordered table"  >
        <div class="form-group">
            <thead>
                <tr>
                    <td>user ID</td>
                    <td>username</td>
                    <td>Password</td>
                    <td>Frist Name	</td>
                    <!-- <td>Post_content</td> -->
                    <td>Last Name</td>
                    <td>Email</td>
                    <td>Image</td>
                    <td>Role</td>
                    <td>ransalt</td>
                    <td>admin</td>
                    <td>Subscriber</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
                <?php
           
            viewAllusers();
                ?>
                  <?php  echo '<h5 ><a href="add_user.php">Add New User</a></h5>' ?>

           
            </tbody>
        </div>

    </table>
    


</body>
</html>