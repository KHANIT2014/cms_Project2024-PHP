<?php
include "functions.php";
include "../includesadmin/header.php";
checkBoxUpdate();

// if(isset($_POST['checkboxArray'])){

//     foreach($_POST['checkboxArray']as $postId);

//     $bluck_options = $_POST['bluk_options'];

//     // $query_post= "UPDATE posts SET post_status = 'draft' WHERE post_id = $postId";
//     // $update_post_array = mysqli_query($connection,$query_post);
//     // if($update_post_array){
//     //     echo "updated ";
//     // }



//     switch($bluck_options){
//         case 'draft':
//             $query_post= "UPDATE posts SET post_status = 'draft' WHERE post_id = $postId";
//         $update_post_array = mysqli_query($connection,$query_post);
//         if($update_post_array){
//             echo "updated ";
//         }
//         break;
    
//         case 'published':
//             $query_post= "UPDATE posts SET post_status = 'published' WHERE post_id = $postId";
//         $update_post_array = mysqli_query($connection,$query_post);
//         if($update_post_array){
//             echo "updated ";
//         }
//         break;
    
//         case 'delete':
//             $query_post= "DELETE FROM  posts  WHERE post_id = $postId";
//         $update_post_array = mysqli_query($connection,$query_post);
//         if($update_post_array){
//             echo "updated ";
//         }
//         break;
    
        
    
//     }

// }






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

    <form action="" method="post">
    <table class="table table-bordered table"  >

    <div id="blukOptionsOptions" class="col-sx-4" >

    <select class="form-control" name="bluk_options" id="">
        <option value="">Selected</option>
        <option value="published">Published</option>
        <option value="draft">Draft</option>
        <option value="delete">Delete</option>
    </select>
    </div>
    <div class="col-sx-4">

    <input type="submit" name="submit" class="btn btn-success " value="Apply" id="">
    <a class="btn btn-primary" href="add_post.php">Add New</a>
    </div>

    

  
        <div class="form-group">
            <thead>
                <tr>
                    <th><input type="checkbox"  class="selectAllCheckBoxes"></th>
                    <th>Post id</th>
                    <th>Post_category</th>
                    <th>Post_title</th>
                    <th>Post_author</th>
                    <th>Post_content</th>
                    <th>Post_status</th>
                    <th>Post_tags</th>
                    <th>Post_count</th>
                    <th>post_image</th>
                    <th>post_date</th>
                </tr>
            </thead>
            <tbody>
                <?php
            //    $view_post= "SELECT * FROM posts ";
            //    $view_post_result = mysqli_query($connection,$view_post);
            //    if($view_post_result){
            //        while($row_post= mysqli_fetch_assoc($view_post_result)){
            //            $post_id =$row_post['post_id'];
            //            $post_title=$row_post['post_title'];
                       
            //        }
            //    }
            viewAllPosts();
                ?>

            <!-- <tr>
                    <td><?php echo $post_id; ?></td>
                    <td>PhP</td>
                    <td>PHP</td>
                    <td>Javid</td>
                    <td>This new</td>
                    <td>Published</td>
                    <td>javascript</td>
                    <td>4</td>
                    <td>upload</td>
                    <td>Today</td>
                </tr> -->
            </tbody>
        </div>

    </table>
    </form>

    



</body>
<!-- <script src="../js/scripts.js">


    alert('this is alert function')
</script>  -->
</html>