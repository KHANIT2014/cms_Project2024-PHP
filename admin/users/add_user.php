<?php

include "../includesadmin/header.php";
// include "db.php";
include "functions.php";
addusers();



       
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
</head>

<body>
    <div class="container">

    
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="text" class="form-label">username</label>
                <input type="text" class="form-control" name="username" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">password</label>
                <input type="password" class="form-control" name="password"  aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">user Fristname</label>
                <input type="text" class="form-control" name="userfname" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">user lastname</label>
                <input type="text" class="form-control" name="userlname" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">user email</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">user image</label>
                <input type="text" class="form-control" name="user_image" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">user_role</label>
                <input type="text" class="form-control" name="role" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="file" class="form-label">ransalt</label>
                <input type="text" class="form-control" name="ransalt" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Post date</label>
                <input type="date" class="form-control" name="post_date" aria-describedby="emailHelp">
            </div>
            
            <button type="submit" name="create_user" value="create_user" class="btn btn-primary">add user</button>
        </form>
    </div>
</body>

</html>