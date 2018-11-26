<?php
    include_once('includes/topNav.php');
?>  
    <div style = "margin-top : 59px;" >
    <?php
        $query = "select * from posts limit 5;";
        $conn = getDbConnection();
        $posts = mysqli_query($conn,$query);
        $num_rows = mysqli_num_rows($posts);
        $count = 0;
        if($num_rows > 0) { ?>
        <?php
            $slides = array();
            while($row = mysqli_fetch_assoc($posts) ){
                $slides[] = $row['post_image1'];
            }
        ?>
            
            <!-- <div id="demo" class="carousel slide" data-ride="carousel">
  
                <ul class="carousel-indicators">
                    <?php    
                        foreach($slides as $key => $slide){
                            echo "<li class=''.($key==0?' active':'').'' data-target='#demo' data-slide-to='{$key}'></li>";
                        }
                    ?>
                </ul>

                <div class="carousel-inner">
                    
                    <?php    
                        foreach($slides as $key => $slide){
                            echo('
                                <div class="carousel-item'.($key==0?' active':'').'">
                                    <img src="./images/'.$slide.'" alt="" width="100%" height="300px">
                                </div>
                            ');
                        }
                    ?>
                    </div>
                </div>
            </div> -->
        
    <?php    }
    ?>
    </div>
    <!-- hero image -->
    <div class="img-block">
        <div class="text-block text-center">
            <span class="block-title">Slider</span>
        </div>
    </div>

    <!-- Feature block -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center feature-title">WELCOME</h3> 
            </div>
            <div class="col-md-12">
                <p class="text-center feature-dec">
                    Welcome New Students Dear VU Students, Welcome and congratulations on your acceptance 
                    to the Virtual University of Pakistan. We are thrilled that you will be joining our vibrant family! 
                    We are committed to helping you create a positive university experience, 
                    which we hope will be one of the best experiences of your life! 
                    Successful students tend to take advantage of the numerous opportunities VU offers. 
                    It is our hope you will do the same. As a new student at VU, you are bound to have questions. 
                    Orientation is designed around you, helping to uncover the answers to the questions you have, 
                    and providing you information about campus resources, programs and services. By the time you leave orientation,
                    you’ll be on your way to becoming a successful VU student. You will learn a lot about VU at Orientation.
                    The program is an opportunity for you to learn how to navigate campus and will introduce microinn community.
                </p>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-4">
                <div class="info-box">
                    <div class="info-box-icon">
                        <img src="images/seo-expert.png" width="40" alt="">
                    </div>
                    <div class="info-box-title">
                        The Experts
                    </div>
                    <div class="info-box-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo a mollitia consequuntur ducimus consectetur repudiandae neque natus fugiat eligendi nam.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-box">
                    <div class="info-box-icon">
                    <img src="images/write-board.png" width="40" alt="">
                    </div>
                    <div class="info-box-title">
                        Best Courses
                    </div>
                    <div class="info-box-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo a mollitia consequuntur ducimus consectetur repudiandae neque natus fugiat eligendi nam.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-box">
                    <div class="info-box-icon">
                        <img src="images/books.png" width="40" alt="">
                    </div>
                    <div class="info-box-title">
                        Books & Library
                    </div>
                    <div class="info-box-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo a mollitia consequuntur ducimus consectetur repudiandae neque natus fugiat eligendi nam.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br>
    <!-- parallax -->
    <div class="parallax">
        <div class="parallax-content">
            World's Best Education At Your Doorstep
        </div>
    </div>
    <br><br>
    <!-- Feature block -->
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center feature-title">Offers we have</h3> 
        </div>
        <div class="col-md-12">
            <p class="text-center feature-dec">
                Special offers that we have in microinn
            </p>
        </div>
    </div>
    <div class="row">
        
    </div>


    <div class="container" style="margin-bottom:30px;">
        <div class="row">
            <div class="col-md-4"></div>
                <div class="col-md-4 list-style">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-center list-group-item-info">Internationally recognised degree</li>
                        <li class="list-group-item text-center list-group-item-info">Affordable Fee</li>
                        <li class="list-group-item text-center list-group-item-info">Country best professors</li>
                        <li class="list-group-item text-center list-group-item-info">Education to both males and females in their home towns</li>
                    </ul>
                </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <br><br>
<?php
    include_once('includes/footer.php');
?>