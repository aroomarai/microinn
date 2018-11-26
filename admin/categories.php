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
                        <div class="col-md-6 col-xs-6">
                            <?php
                                if(isset($_GET['source'])){
                                    $source = $_GET['source'];
                                } else $source = '';
                                switch ($source) {
                                    case 'update_cat':
                                        $obj = new Database;
                                        $obj->connect();
                                        $cat_id = $_GET['update'];
                                        $row =  $obj->select("*","categories","cat_id = $cat_id");
                                        foreach($row as $rec){
                                            $cat_title = $rec["cat_title"]; 
                                            ?>
                                            <form action="" method="post">
                                                <div class="form-group" style = "font-size:150%;">
                                                    <span class="input input--juro">
                                                        <input class="input__field input__field--juro " type="text" id="input-28" name="cat_title"  />
                                                        <label class="input__label input__label--juro" for="input-28">
                                                            <span class="input__label-content input__label-content--juro"> <?php echo $cat_title ?></span>
                                                        </label>
                                                    </span>
                                                </div>
                                                    <div class="form-group">
                                                        <input class="btn btn-color" type="submit" name="update" id="" value="Update Category">
                                                    </div>
                                            </form>
                                            <?php    
                                        }
                                        if(isset($_POST['update'])){
                                            $cat_title = $_POST['cat_title'];
                                            $row = $obj->update("categories","cat_title = '{$cat_title}'","cat_id","$cat_id");
                                            //$query = "update categories set cat_title = '{$cat_title}' , cat_ref = '{$cat_ref}' where cat_id = {$cat_id} ";
                                            //$update_category = mysqli_query($link, $query);
                                            header("Location: categories.php");
                                        }
                                    break;
                                    default:
                                        $errors[] = "";
                                        if(isset($_POST['submit'])){
                                            $cat_title = $_POST['cat_title'];
                                            if($cat_title == "" || empty($cat_title)){
                                                $errors[0] .= "<li class='alert-danger'>Please Add Category Title</li>";
                                            } 
                                            else if($cat_title <> ""){
                                                $obj = new Database;
                                                $obj->connect();
                                                $row =  $obj->insert("categories","cat_title","'$cat_title'");
                                                // $query = "insert into categories(cat_title,cat_ref) ";
                                                // $query .= "value ('{$cat_title}','{$cat_ref}')";
                                                // $category = mysqli_query($link,$query);
                                                // if(!$category){
                                                //     die('QueryFailed'. mysqli_error($link));
                                                // }
                                            }
                                        }
                                        ?>
                                        <form action="" method="post">
                                            
                                            <div class="form-group" style = "font-size:150%;" >
                                                <span class="input input--juro">
                                                    <input class="input__field input__field--juro " type="text" id="input-28" name="cat_title" />
                                                    <label class="input__label input__label--juro" for="input-28">
                                                        <span class="input__label-content input__label-content--juro">Category Title</span>
                                                    </label>
                                                </span>
                                            </div>
                                                <?php
                                                    if($errors[0]<>""){
                                                        echo "<ul>{$errors[0]}</ul>";
                                                    }
                                                ?>
                                            <div class="form-group">
                                                <input class="btn btn-color" type="submit" name="submit" id="" value="Add Category">
                                            </div>
                                        </form> <?php
                                    break;
                                }
                                
                            
                                if(isset($_GET['delete'])) {
                                    $obj = new Database;
                                    $obj->connect();
                                    $cat_id = $_GET['delete'];
                                    $row = $obj->delete("categories","cat_id","$cat_id");
                                    header("Location: categories.php");
                                }
                            ?>   
                            
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Category Title</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $obj = new Database;
                                            $obj->connect();
                                            $row =  $obj->select("*","categories","");
                                            foreach($row as $rec){
                                                echo "<tr>";
                                                echo "<td>{$rec["cat_title"]}</td>";
                                                echo "<td><a href='categories.php?delete={$rec["cat_id"]}'><i class='fa fa-trash text-danger' style='font-size:24px'></i></a></td>";
                                                echo "<td><a href='categories.php?source=update_cat&update={$rec["cat_id"]}'><i class='fa fa-edit text-success' style='font-size:24px'></i></a></td>";
                                                echo "</tr>";
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>         
                        </div>
                         
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>