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
                            Welcome to Admin
                            <small >Ahmed Mirza</small>
                        </h1>
                        <?php
                            if(isset($_GET['source'])){
                                $source = $_GET['source'];
                            } else $source = ''; 
                            switch ($source) {
                                default:
                                    include "include/view_all_comments.php";
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