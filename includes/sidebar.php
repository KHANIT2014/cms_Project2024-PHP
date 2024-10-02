<div class="col-md-4">

                <!-- Blog Search Well -->


                <div class="well">
                    <h4>Blog Search</h4>
                    <form action="search1.php" method="post">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control">
                        <span class="input-group-btn">
                            <button name="submit" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    </form>
                    

                    <!-- Blog Search End -->


                    <!-- login form starts  -->

                    <div class="form-group">
            <form action="includes/login.php" method="post">
                <div class="input-group">
                    <label for="Login">Username</label>
                    <input type="text" name="name_index" id="">
                </div>
                <div class="input-group">
                    <label for="password">password</label>
                    <input type="password" name="password_index" id="">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" name="index_form" value="index_form">submit</button>
                    </span>
                </div>
            </form>
        </div>


                    <!-- login form Ends  -->




                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->

                <!-- the below mentioned lines has been hided by me  -->


                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                            <?php
                     $sql_category = "SELECT * FROM categories ";
                     $result_category = mysqli_query($connection,$sql_category);
                     while($row_category=mysqli_fetch_assoc($result_category)){
                         $cat_id= $row_category['cat_id'];
                         $cat_title=$row_category['cat_title'];
         
                         echo "<option value='.$cat_title.'>$cat_title </option>";
                       
                     }
                     
                     ?>                              
                              
                            </ul>
                        </div>
                </div>
                <!-- the above lines hided -->




                <!-- Side Widget Well -->




                <!-- <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div> -->

            </div>