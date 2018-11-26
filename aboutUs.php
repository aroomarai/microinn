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
    
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="text-center">WELCOME MESSAGE</h1> 
            <p class="text-center">
                Welcome New Students Dear VU Students, Welcome and congratulations on your acceptance 
                to the Virtual University of Pakistan. We are thrilled that you will be joining our vibrant family! 
                We are committed to helping you create a positive university experience, 
                which we hope will be one of the best experiences of your life! 
                Successful students tend to take advantage of the numerous opportunities VU offers. 
                It is our hope you will do the same. As a new student at VU, you are bound to have questions. 
                Orientation is designed around you, helping to uncover the answers to the questions you have, 
                and providing you information about campus resources, programs and services. By the time you leave orientation,
                you’ll be on your way to becoming a successful VU student. You will learn a lot about VU at Orientation.
                The program is an opportunity for you to learn how to navigate campus and will introduce CCI community.
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="./images/ceo.jpg" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Ayub Bhatti</h4>
                        <p class="card-text">(CEO of Microinn)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <p class="text-center">
                    Establishment of Virtual University in March 2002 by the Government of Pakistan 
                    is a dream comes true both for the Male and Female students aspiring Higher Education 
                    (working or home based) and their parents. We are all aware that IT revolution has impacted
                    the field of education all over the world. ON-LINE universities are extending around the world 
                    and offering degree programs at a fraction of the cost of conventional universities. Underdeveloped 
                    countries like ours need to spread Higher Education on emergency bases and it is not possible for the Government 
                    to establish universities all over Pakistan to accommodate large number of students and provide them quality 
                    education and afford world class professors. Virtual University of Pakistan, which provides quality education from Ghawadar to Gilgit, 
                </p>
            </div>
        </div>
    </div>
    <div class="jumbotron" style="margin-top:30px">
        <div class="container" style="margin-bottom:30px;">
            <h1 class="text-center text-uppercase">AFFLICITATION</h1>
            <div class="row">
                <!-- <div class="col-md-1"></div>
                    <div class="col-md-10"> -->
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-center list-group-item-success">
                                Virtual University of Govt. of Pakistan. Computer Connection Institute is the 
                                Sialkot Virtual Campus of Virtual University of Government of Pakistan whose 
                                founder is Dr. Atta-ur-Rehman/Dr. Naveed A Malik and Chancellor is President of Pakistan. 
                                It offers PhD, MS, BS, Masters, PGD, Bachelors, ADP, Additional Specializations, Zero Semester
                                 for students having less percentage and various Professional Certificate programs. Established in March 2002.
                            </li>
                            <li class="list-group-item text-center list-group-item-success">
                                Pakistan Computer Bureau of Govt. of Pakistan of Ministry of Information Technology, 
                                Islamabad has also chosen Computer Connection Institute as Computer Training Institute for 
                                Government Employees of Pakistan.
                            </li>
                            <li class="list-group-item text-center list-group-item-success">
                                Skill Development Council of Govt. of Pakistan. The Skill Development Council 
                                has extended their accreditation to CCI to conduct one-year advance diploma courses. (DIT Advance.)
                            </li>
                            <li class="list-group-item text-center list-group-item-success">
                                The UN Information Center has chosen Computer Connection Institute to conduct on-line 
                                training for journalists on the occasion of World Press Freedom Day Workshop and for on going 
                                such programmes. Computer connection Institute also trains Pakistan Government Employees as 
                                Data Operators and Machine Readable Passport Project in partnership with Applied Excellence (Pvt.) Ltd. Islamabad.
                            </li>
                        </ul>
                    <!-- </div>
                <div class="col-md-1"></div> -->
            </div>
        </div>
    </div>
<?php
    include_once('includes/footer.php');
?>