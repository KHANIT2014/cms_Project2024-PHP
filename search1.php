<?php
include "includes/header.php";
include "includes/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
     crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
     crossorigin="anonymous"></script> -->

    <title>Document</title>
</head>
<body>
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
    <?php 
if (isset($_POST['submit'])) {
    $search = $_POST['search'];

    $query_search = "SELECT * FROM posts WHERE post_id like '%$search%' or post_title like'%$search%' or post_author like'%$search%'
     or post_tags like'%$search%'"; 
   

    $search_result = mysqli_query($connection, $query_search);


    if($search_result){
        if(mysqli_num_rows($search_result)>0){
            echo '<thead>
            <tr>
            <th></th>
            <th></th>
            <th></th>
            </tr>        
            </thead>';

            while($row=mysqli_fetch_assoc($search_result)){
                echo'
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
                    <a href="userinfo.php?data='.$row['post_id'].' ">'.$row['post_id'].'</a>
                    
                </h2>
                <p class="lead">
                    by <a href="index.php">'.$row['post_author'].'</a> 
                </p>
                <p><span class="glyphicon glyphicon-time"></span>'.$row['post_date'].'</p>
                <hr>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
               ';
            }

        }else
        echo "Data not found";
        
    }
}


   
        ?>





 







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

    
</body>



</html>











