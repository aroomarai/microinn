<?php include "include/admin_header.php"; ?>
<?php include "crud.php"; ?>

<body>

    <div id="wrapper">

        <?php include "include/admin_navBar.php" ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Microinn Portal
                        </h1>
                        <?php
                            //include "include/view_all_posts.php";
                            if(isset($_GET['source'])){
                                $source = $_GET['source'];
                            } else $source = ''; 
                            switch ($source) {
                                case 'add_post':
                                    include "include/add_post.php";
                                    break;
                                case 'edit_post':
                                    include "include/edit_post.php";
                                    break;
                                default:
                                    include "include/view_all_posts.php";
                                    break;
                            }
                            
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>