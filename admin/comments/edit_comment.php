<?php

include "../includesadmin/header.php";
include "db.php";
include "functions.php";
// updatePost();


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




// if(isset($_POST['update'])){ 
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
     



//         $update_post= "UPDATE posts SET post_category_id ='$post_category_id', post_title= '$post_title',
//          post_author='$post_author',  post_date='$post_date', post_image= '$post_image', 
//          post_content ='$post_content', post_tags= '$post_tags', 
//           post_status='$post_status', post_viewed_count= '$post_count'";
          
//         $result_update_post= mysqli_query($connection,$update_post);
//         if($result_update_post){
//             header("location:posts.php");
//         }else{
//             echo "something is wrong";
//         }
        
       

// }

updatePost();
$id=$_GET['updateid'];
    $query = "SELECT * FROM posts where post_id =$id ";
  $result = mysqli_query($connection,$query);
  if($result){
    while($rowupdate = mysqli_fetch_assoc($result)){
    $post_category_id=$rowupdate['post_category_id'];
    $post_title=$rowupdate['post_title'];
    $post_author=$rowupdate['post_author'];
    $post_content=$rowupdate['post_content'];
    $post_status=$rowupdate['post_status'];
    $post_tags =$rowupdate['post_tags'];
    $post_count =$rowupdate['post_viewed_count'];
    $post_image =$rowupdate['post_image'];
    $post_date =$rowupdate['post_date'];

    }
}

       
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
            <!-- <div class="mb-3" class="form-group">
                <label for="text" class="form-label">Post Category ID</label>
                <input type="text" class="form-control" name="post_category_id"
                 aria-describedby="emailHelp" value="<?php echo $post_category_id?>">
            </div> -->
           
            <div class="mb-3">
                <label for="text" class="form-label">Post Title</label>
                <input type="text" class="form-control" name="post_title" 
                value="<?php echo $post_title?>" aria-describedby="emailHelp">
            </div>
            <div class="mb-3" class="form-group">
            <select name="post_category_id" id="">

            <?php 
            $sql_category = "SELECT * FROM categories ";
            $result_category = mysqli_query($connection,$sql_category);
            while($row_category=mysqli_fetch_assoc($result_category)){
                $cat_id= $row_category['cat_id'];
                $cat_title=$row_category['cat_title'];

                echo "<option value='.$cat_title.'>$cat_title </option>";
            }
            
            ?>
            </select>
            </div>
            <div class="mb-3 ">
                <label for="text" class="form-label">Post author</label>
                <input type="text" class="form-control" name="post_author"
                value="<?php echo $post_author?>" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Post content</label>
                <input type="text" class="form-control" name="post_content"
                value="<?php echo $post_content?>" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Post status</label>
                <input type="text" class="form-control" name="post_status"
                value="<?php echo $post_status?>" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Post Tags</label>
                <input type="text" class="form-control" name="tags"
                value="<?php echo $post_tags?>" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Post count</label>
                <input type="text" class="form-control" name="post_viewed_count"
                value="<?php echo $post_count?>" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="file" class="form-label">Post image</label>
                <input type="file" class="form-control" name="image"
                value="<?php echo $post_image?>" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Post date</label>
                <input type="date" class="form-control" name="post_date" 
                value="<?php echo $post_date?>" aria-describedby="emailHelp">
            </div>
            
            <button type="submit" name="update" value="update" class="btn btn-primary">update</button>
        </form>
    </div>
</body>

</html>

