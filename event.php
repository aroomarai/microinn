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
            
            <div id="demo" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <?php    
                        foreach($slides as $key => $slide){
                            echo "<li class=''.($key==0?' active':'').'' data-target='#demo' data-slide-to='{$key}'></li>";
                        }
                    ?>
                </ul>

                <!-- The slideshow -->
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
            </div>
        
    <?php    }
    ?>
    </div>

    <?php
        if(isset($_GET['event'])) {
            $eventId = $_GET['event'];
            $query = "select * from posts where post_cat_id = {$eventId}";
            $conn = getDbConnection();
            $posts = mysqli_query($conn,$query);
            $num_rows = mysqli_num_rows($posts);
            if($num_rows > 0) {
                $images = array();
                while($row = mysqli_fetch_assoc($posts) ){
                    $images[] = $row['post_image1'];
                    $images[] = $row['post_image2'];
                    $images[] = $row['post_image3'];
                    $images[] = $row['post_image4'];
                    $images[] = $row['post_image5'];
                } ?>

                <div class="row">
                    <div class="column">
                        <?php
                            foreach($images as $key => $image) {
                                if($image != null) {
                                    echo ('
                                        <img src="./images/'.$image.'" style="width:100%;">
                                    ');
                                }
                            } 
                        ?>
                    </div>
                </div>                
    <?php   }
        }
    ?>

<?php
    include_once('includes/footer.php');
?>