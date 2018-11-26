<?php include_once('header.php'); ?>
<nav class="navbar navbar-expand-lg fixed-top navColor">
    <a class="navbar-brand" href="#">
        <img src="./images/logo.jpeg" alt="MicroInn" style="width:60px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style = "background-color: white">
        <span class="navbar-toggler-icon" style = "background:white;" > <hr> </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="studyProgramDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Study Programs
                </a>
                <div class="dropdown-menu" aria-labelledby="studyProgramDropdownMenuLink">
                    <a class="dropdown-item" href="http://www.vu.edu.pk/pages/AllPrograms.aspx" target="_blank">VU Courses</a>
                    <a class="dropdown-item" href="#">MicroInn Courses</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="eventsDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Events
                </a>
                <div class="dropdown-menu" aria-labelledby="eventsDropdownMenuLink">
                    <?php
                        $query = "select * from categories;";
                        $conn = getDbConnection();
                        $events = mysqli_query($conn,$query);
                        $num_rows = mysqli_num_rows($events);
                        if($num_rows > 0) {
                            while($row = mysqli_fetch_assoc($events) ){
                                $cat_title =  $row['cat_title'];
                                $cat_id =  $row['cat_id'];
                                echo "<a class='dropdown-item' href='./event.php?event={$cat_id}'>$cat_title</a>";
                            }
                        }
                    ?>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./aboutUs.php">
                    About Us
                </a>
                <!-- <div class="dropdown-menu" aria-labelledby="aboutUsDropdownMenuLink">
                    <a class="dropdown-item" href="#">Introduction</a>
                    <a class="dropdown-item" href="#">CEO Speech</a>
                    <a class="dropdown-item" href="#">Campus Manager</a>
                </div> -->
            </li>
            <li class="nav-item">
                <!-- <a class="nav-link" href="./contactUs.php">Contact Us</a> -->
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" style="background-color: #2980b9;" >
                    Contact Us
                </button>
            </li>
        </ul>
    </div>
</nav>

<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Contact Us</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form action="">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <textarea type="text" class="form-control" id="subject"></textarea>
                </div>
                <button type="submit" class="btn btn-dark float-right btn-block">Send</button>
            </form>
        </div>
        
      </div>
    </div>
</div>