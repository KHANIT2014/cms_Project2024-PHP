<?php
include "../includesadmin/db.php";



function viewAllPosts(){
    global $connection;
    $view_post= "SELECT * FROM posts ";
    $view_post_result = mysqli_query($connection,$view_post);
    if($view_post_result){
        while($row_post= mysqli_fetch_assoc($view_post_result)){
            $post_id =$row_post['post_id'];
            $post_category_id=$row_post['post_category_id'];
            $post_title=$row_post['post_title'];
            $post_author=$row_post['post_author'];
            $post_content=$row_post['post_content'];
            $post_status=$row_post['post_status'];
            $post_tags=$row_post['post_tags'];
            $post_count=$row_post['post_viewed_count'];
            $post_image=$row_post['post_image'];
            $post_date=$row_post['post_date'];
           ?>
           <tr>
                    <td><?php echo $post_id; ?></td>
                    <td><?php echo $post_category_id; ?></td>
                    <td><?php echo $post_title; ?></td>
                    <td><?php echo $post_author; ?></td>
                    <td><?php echo $post_content; ?></td>
                    <td><?php echo $post_status; ?></td>
                    <td><?php echo $post_tags; ?></td>                    
                    <td><?php echo $post_count; ?></td>
                    <td><img src="<?php echo $post_image ?>" height='100px' width='100px'/></td>
                    <td><?php echo $post_date; ?></td>
      
    
                </tr>
                <?php            
        }
    }
}


function addPost(){
    global $connection;

    if(isset($_POST['submit'])){ 
        $post_category_id=$_POST['post_category_id'];
        $post_title=$_POST['post_title'];
        $post_author=$_POST['post_author'];
        $post_content=$_POST['post_content'];
        $post_status=$_POST['post_status'];
        $post_tags =$_POST['tags'];
        $post_count =$_POST['post_viewed_count'];
        $post_image =$_FILES['image']['name'];
        $post_image_tmp =$_FILES['image']['tmp_name'];
        $targetPath= "../uploads/".$post_image;
        $post_date=date('d-m-y');
    
        move_uploaded_file($post_image_tmp,$targetPath);
         
    
    
    
            $add_post= "INSERT INTO posts( `post_category_id`, `post_title`,
             `post_author`,  `post_date`, `post_image`, `post_content`, `post_tags`, 
              `post_status`, `post_viewed_count`)
              VALUES ('$post_category_id','$post_title','$post_author','$post_date',
            '$targetPath','$post_content','$post_tags','$post_status','$post_count')";
            $result_add_post= mysqli_query($connection,$add_post);
            if($result_add_post){
                header("location:posts.php");
            }else{
                echo "failed to add try again";
            }
    
    }
}



function updatePost(){
    global $connection;
    if(isset($_POST['submit'])){ 
        $post_category_id=$_POST['post_category_id'];
        $post_title=$_POST['post_title'];
        $post_author=$_POST['post_author'];
        $post_content=$_POST['post_content'];
        $post_status=$_POST['post_status'];
        $post_tags =$_POST['tags'];
        $post_count =$_POST['post_viewed_count'];
        $post_image =$_FILES['image']['name'];
        $post_image_tmp =$_FILES['image']['tmp_name'];
        $targetPath= "../uploads/".$post_image;
        $post_date=date('d-m-y');
    
        move_uploaded_file($post_image_tmp,$targetPath);
         
    
    
    
            $update_post= "UPDATE posts SET post_category_id ='$post_category_id', post_title= '$post_title',
             post_author='$post_author',  post_date='$post_date', post_image= '$post_image', 
             post_content ='$post_content', post_tags= '$post_tags', 
              post_status='$post_status', post_viewed_count= '$post_count'";
              
            $result_update_post= mysqli_query($connection,$update_post);
            if($result_update_post){
                header("location:posts.php");
            }else{
                echo "something is wrong";
            }
            
           
    
    }
}



?>