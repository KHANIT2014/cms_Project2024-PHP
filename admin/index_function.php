<?php
include "./database/db.php";
include "./includesadmin/header.php";
// session_start();
// ob_start();

function view_Posts(){
    global $connection;

    $sql_posts= "SELECT * FROM posts";
    $sql_posts_query = mysqli_query($connection,$sql_posts);
    $post_count = mysqli_num_rows($sql_posts_query);
    echo "<div class='huge'>$post_count</div>";
}

function view_comments(){
    global $connection;

    $sql_comments= "SELECT * FROM comments";
    $sql_comments_query = mysqli_query($connection,$sql_comments);
    $comment_count = mysqli_num_rows($sql_comments_query);
    echo "<div class='huge'>$comment_count</div>";
}


function view_Users(){
    global $connection;

    $sql_users= "SELECT * FROM users";
    $sql_users_query = mysqli_query($connection,$sql_users);
    $user_count = mysqli_num_rows($sql_users_query);
    echo "<div class='huge'>$user_count</div>";
}

function view_Categories(){
    global $connection;

    $sql_categories= "SELECT * FROM categories";
    $sql_categories_query = mysqli_query($connection,$sql_categories);
    $category_count = mysqli_num_rows($sql_categories_query);
    echo "<div class='huge'>$category_count</div>";
}

function chart_detail(){

    $elements = ['Posts','users','comments','categories'];
    $elements_values = ['$post_count'];

    // $elements_values = [$post_count, $user_count,$comment_count,$category_count];

    for($i=0;$i<4; $i++){

        echo "['$elements[$i]'" . "," . "$elements_values[$i] ],"  ;

    }
}

















?>


