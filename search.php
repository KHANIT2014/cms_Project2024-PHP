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

if (isset($_POST['submit'])) {
    $search = $_POST['search'];

    // $query_search = "SELECT * FROM posts WHERE post_tags = '$search'";  same meaning in line 73
    $query_search = "SELECT * FROM posts WHERE post_tags like '%$search%' or post_title like '%$search%' 
    or post_author like '%$search%'";
    // $query_search = "SELECT * FROM posts "; testing no meaning

    $search_result = mysqli_query($connection, $query_search);


    if (!$search_result) {
        echo "something wrong ";
    }
    $count = mysqli_num_rows($search_result);
    if ($count == 0) {
        echo "somthing is wrong";
    } else {
        while($row1 = mysqli_fetch_assoc($search_result)){

            $post_title= $row1['post_title'];
            $post_tags =$row1['post_tags'];
            $post_author= $row1['post_author'];
            $post_date= $row1['post_date'];
        
?>
            <h1><?php echo $post_tags  ?></h1>
            <h1><?php echo $post_title;  ?></h1>
            <h1><?php echo $post_author;  ?></h1>
<?php  }
    }
} ?>


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
                    <a href="#">Blog Post Title</a>
                    
                </h2>
                <p class="lead">
                    <!-- by <a href="index.php"><?php echo $post_author;  ?></a> -->
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
                <hr>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
               


                <hr>


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