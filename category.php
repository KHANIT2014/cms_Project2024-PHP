<?php
include "includes/header.php";
include "includes/db.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Post - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-post.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
     <?php include "./includes/navigation.php" ?>
    

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">
                <?php
                if(isset($_GET['category'])){
                    $main_category_id =$_GET['category'];
                }


                $query_post = "SELECT * FROM posts WHERE post_category_id = $main_category_id ";
                $result_post = mysqli_query($connection, $query_post);
                while ($row = mysqli_fetch_assoc($result_post)) {

                    $post_title = $row['post_title'];
                    $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_image  = $row['post_image'];
                    $post_content = $row['post_content'];

                ?>
                    <div class="container">

                        <div class="row">

                            <!-- Blog Entries Column -->
                            <div class="col-md-8">

                                <h1 class="page-header">
                                    Page Heading
                                    <small>Secondary Text</small>
                                </h1>

                                <!-- First Blog Post -->
                                <h2>
                                    <!-- <a href="#">Blog Post Title</a><br> -->
                                    <a href="#"><?php echo $post_title; ?></a>
                                </h2>
                                <p class="lead">
                                    by <a href="index.php"><?php echo $post_author; ?></a>
                                </p>
                                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date; ?></p>
                                <hr>
                                <img class="img-responsive" src="./admin/uploads/<?php echo $post_image; ?>" alt="">
                                <hr>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora,
                                    necessitatibus inventore nisi quam quia
                                    repellat ut tempore laborum possimus eum
                                    dicta id animi corrupti debitis ipsum officiis rerum.<?php echo $post_content; ?></p>
                                <a class="btn btn-primary" href="#">Read More <span
                                        class="glyphicon glyphicon-chevron-right"></span></a>

                                <hr>

                            <?php } ?>


                            <!-- Blog Post -->







                            <!-- Title -->
                            <h1>Blog Post Title</h1>

                            <!-- Author -->
                            <p class="lead">
                                by <a href="#">Start Bootstrap</a>
                            </p>

                            <hr>

                            <!-- Date/Time -->
                            <p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>

                            <hr>

                            <!-- Preview Image -->
                            <img class="img-responsive" src="http://placehold.it/900x300" alt="">

                            <hr>

                            <!-- Post Content -->
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>

                            <hr>

                            <!-- Blog Comments -->
                            <!-- <h3 class="text-aling:center">Data has been uploaded successfully</h3> -->

                            <!-- Comments Form -->
                            <!-- <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <?php $successMessage; ?>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to use margin 
    utilities to keep things nice and tidy.</p>
</div> -->
                            <?php
                            include "./admin/comments/functions.php";
                            addComment();

                            ?>



                            <div class="well">
                                <h4>Leave a Comment:</h4>
                                <form action="post.php" method="post" role="form">
                                    <div class="form-group">
                                        <label for="Author">Author</label>
                                        <input type="text" name="comment_author" id="" required=" field dos't empty">
                                    </div>
                                    <div class="form-group">
                                        <label for="Author">Email</label>
                                        <input type="email" name="comment_email" id="" required=" field dos't empty">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="comment_text" rows="3"></textarea>
                                    </div>
                                    <button type="submit" name="create_comment" value="create_comment" class="btn btn-primary">Submit</button>
                                </form>
                            </div>

                            <hr>

                            <!-- Posted Comments -->

                            <!-- Comment -->
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="http://placehold.it/64x64" alt="">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Start Bootstrap
                                        <small>August 25, 2014 at 9:30 PM</small>
                                    </h4>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </div>

                            <!-- Comment -->
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="http://placehold.it/64x64" alt="">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Start Bootstrap
                                        <small>August 25, 2014 at 9:30 PM</small>
                                    </h4>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    <!-- Nested Comment -->
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object" src="http://placehold.it/64x64" alt="">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">Nested Start Bootstrap
                                                <small>August 25, 2014 at 9:30 PM</small>
                                            </h4>
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                        </div>
                                    </div>
                                    <!-- End Nested Comment -->
                                </div>
                            </div>

                            </div>

                            <!-- Blog Sidebar Widgets Column -->
                            <div class="col-md-4">

                                <!-- Blog Search Well -->
                                <div class="well">
                                    <h4>Blog Search</h4>
                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button">
                                                <span class="glyphicon glyphicon-search"></span>
                                            </button>
                                        </span>
                                    </div>
                                    <!-- /.input-group -->
                                </div>

                                <!-- Blog Categories Well -->
                                <div class="well">
                                    <h4>Blog Categories</h4>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <ul class="list-unstyled">
                                                <li><a href="#">Category Name</a>
                                                </li>
                                                <li><a href="#">Category Name</a>
                                                </li>
                                                <li><a href="#">Category Name</a>
                                                </li>
                                                <li><a href="#">Category Name</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <ul class="list-unstyled">
                                                <li><a href="#">Category Name</a>
                                                </li>
                                                <li><a href="#">Category Name</a>
                                                </li>
                                                <li><a href="#">Category Name</a>
                                                </li>
                                                <li><a href="#">Category Name</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>

                                <!-- Side Widget Well -->
                                <div class="well">
                                    <h4>Side Widget Well</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                                </div>

                            </div>

                        </div>
                        <!-- /.row -->

                        <hr>

                        <!-- Footer -->
                        <footer>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p>Copyright &copy; Your Website 2014</p>
                                </div>
                            </div>
                            <!-- /.row -->
                        </footer>

                    </div>
                    <!-- /.container -->

                    <!-- jQuery -->
                    <script src="js/jquery.js"></script>

                    <!-- Bootstrap Core JavaScript -->
                    <script src="js/bootstrap.min.js"></script>

</body>

</html>