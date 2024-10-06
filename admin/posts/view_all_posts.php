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

    <form action="" method="post">
    <table class="table table-bordered table"  >

    <div id="blukOptionsOptions" class="col-sx-4" >

    <select class="form-control" name="" id="">
        <option value="">Selected</option>
        <option value="">Published</option>
        <option value="">Draft</option>
        <option value="">Approved</option>
    </select>
    </div>
    <div class="col-sx-4">

    <input type="submit" name="submit" class="btn btn-success " value="Apply" id="">
    <a class="btn btn-primary" href="add_post.php">Add New</a>
    </div>

    

  
        <div class="form-group">
            <thead>
                <tr>
                    <td>Post id</td>
                    <td>Post_category</td>
                    <td>Post_title</td>
                    <td>Post_author</td>
                    <td>Post_content</td>
                    <td>Post_status</td>
                    <td>Post_tags</td>
                    <td>Post_count</td>
                    <td>post_image</td>
                    <td>post_date</td>
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
</html>