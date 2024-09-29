<?php

include "../includesadmin/header.php";
// include "db.php";
include "functions.php";
// addComments();



       
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
                <label for="text" class="form-label">Post Category ID</label>
                <input type="text" class="form-control" name="post_category_id" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Post Title</label>
                <input type="text" class="form-control" name="post_title"  aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Post author</label>
                <input type="text" class="form-control" name="post_author" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Post content</label>
                <input type="text" class="form-control" name="post_content" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Post status</label>
                <input type="text" class="form-control" name="post_status" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Post Tags</label>
                <input type="text" class="form-control" name="tags" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Post count</label>
                <input type="text" class="form-control" name="post_viewed_count" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="file" class="form-label">Post image</label>
                <input type="file" class="form-control" name="image" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Post date</label>
                <input type="date" class="form-control" name="post_date" aria-describedby="emailHelp">
            </div>
            
            <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>