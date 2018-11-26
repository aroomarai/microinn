
<nav class="navbar navbar-fixed-top top-nav" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar" style="background-color:white;"></span>
                    <span class="icon-bar" style="background-color:white;"></span>
                    <span class="icon-bar" style="background-color:white;"></span>
                </button>
                <a class="navbar-brand" href="index.php">MicroInn Technologies</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li><a href="../index.php">Home Site</a></li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="collapse navbar-collapse navbar-ex1-collapse">

                <ul class="nav navbar-nav side-nav">
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#events_dropdown">
                            <i class="fa fa-calendar"></i> Events 
                            <i class="fa fa-fw fa-caret-down"></i>
                        </a>
                        <ul id="events_dropdown" class="collapse">
                            <li>
                                <a href="./posts.php"> View All Events</a>
                            </li>
                            <li>
                                <a href="posts.php?source=add_post">Add Event</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="./categories.php"><i class="fa fa-calendar"></i> Event Types</a>
                    </li>
                    <!-- <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#users_dropdown">
                            <i class="fa fa-fw fa-user"></i> Users 
                            <i class="fa fa-fw fa-caret-down"></i>
                        </a>
                        <ul id="users_dropdown" class="collapse">
                            <li>
                                <a href="users.php">View All Users</a>
                            </li>
                            <li>
                                <a href="users.php?source=add_user">Add User</a>
                            </li>
                        </ul>
                    </li> -->
                </ul>
            </div>
        </nav>
