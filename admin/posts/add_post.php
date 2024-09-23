<?php

include "../includesadmin/header.php";
// include "db.php";
include "functions.php";
addPost();


// if(isset($_POST['submit'])){ 
//     $post_category_id=$_POST['post_category_id'];
//     $post_title=$_POST['post_title'];
//     $post_author=$_POST['post_author'];
//     $post_content=$_POST['post_content'];
//     $post_status=$_POST['post_status'];
//     $post_tags =$_POST['tags'];
//     $post_count =$_POST['post_viewed_count'];
//     $post_image =$_FILES['image']['name'];
//     $post_image_tmp =$_FILES['image']['tmp_name'];
//     $targetPath= "../uploads/".$post_image;
//     $post_date=date('d-m-y');

//     move_uploaded_file($post_image_tmp,$targetPath);
     



//         $add_post= "INSERT INTO posts( `post_category_id`, `post_title`,
//          `post_author`,  `post_date`, `post_image`, `post_content`, `post_tags`, 
//           `post_status`, `post_viewed_count`)
//           VALUES ('$post_category_id','$post_title','$post_author','$post_date',
//         '$targetPath','$post_content','$post_tags','$post_status','$post_count')";
//         $result_add_post= mysqli_query($connection,$add_post);
//         if($result_add_post){
//             echo "Post added successfully";
//         }else{
//             echo "failed to add try again";
//         }

// }
       
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