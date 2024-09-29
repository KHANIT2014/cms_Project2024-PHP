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
                    <td>Comment ID</td>
                    <td>comment_post_id</td>
                    <td>comment_author</td>
                    <td>comment_content	</td>
                    <!-- <td>Post_content</td> -->
                    <td>comment_email</td>
                    <td>comment_status</td>
                    <td>comment Date</td>
                    <td>un Approve</td>
                    <td>Approve</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
                <?php
           
            viewAllComments();
                ?>

           
            </tbody>
        </div>

    </table>
    


</body>
</html>