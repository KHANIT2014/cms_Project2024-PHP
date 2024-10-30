<?php
include "includes/header.php";
include "includes/db.php";
?>


<body>

    <!-- Navigation -->
    <?php
    include "includes/navigation.php";
    ?>

    <!-- <h1>Navigation should be here </h1> -->


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#">Services</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
    </nav>

    <!-- Page Content -->


    <?php
    $query_post = "SELECT * FROM posts";
    $result_post = mysqli_query($connection, $query_post);
    while ($row = mysqli_fetch_assoc($result_post)) {

        $post_id = $row['post_id'];
        $post_title = $row['post_title'];
        $post_author = $row['post_author'];
        $post_date = $row['post_date'];
        $post_image  =$row['post_image'];
        $post_content = substr($row['post_content'],0,100);

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
                        <a href="post.php?p_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a>
                    </h2>
                    <p class="lead">
                        by <a href="authors_post.php?author=<?php echo $post_author;?>&p_id=<?php echo $post_id; ?>"><?php echo $post_author; ?></a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date; ?></p>
                    <hr>
                    <img class="img-responsive" src="./admin/uploads/<?php echo $post_image; ?>"  alt="">
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, 
                        necessitatibus inventore nisi quam quia 
                        repellat ut tempore laborum possimus eum 
                        dicta id animi corrupti debitis ipsum officiis rerum.<?php echo $post_content; ?></p>
                    <a class="btn btn-primary" href="#">Read More <span 
                    class="glyphicon glyphicon-chevron-right"></span></a>
    
                    <hr>
    
    <?php } ?>

   

                <hr>

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->





            <H1>side Bar should include here</H1>
            <?php
            include "includes/sidebar.php";
            ?>
        
    

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->