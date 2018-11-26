<?php
    function view_categories(){
        global $link;
        $query = "select * from categories";
        $category = mysqli_query($link,$query);
        $num_rows = mysqli_num_rows($category); 
        if($num_rows>0){ ?>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category Title</th>
                        <th>Category Reference</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
            <?php
            while($row = mysqli_fetch_assoc($category) ){ ?>
                <tr> <?php
                $cat_id =  $row['cat_id'];
                $cat_title =  $row['cat_title'];
                $cat_ref = $row['cat_ref'];
                echo "<td>{$cat_id}</td>";
                echo "<td>{$cat_title}</td>";
                echo "<td>{$cat_ref}</td>";
                echo "<td><a href='categories.php?delete={$cat_id}'><i class='fa fa-trash text-danger' style='font-size:24px'></i></a></td>";
                echo "<td><a href='categories.php?update={$cat_id}'><i class='fa fa-edit text-success' style='font-size:24px'></i></a></td>";?>
                </tr>
                </tbody>
                <?php
            }
        } 
    } //end view_categories
    function create_categories(){
        global $link;
        global $errors;
        $errors[] = "";
        if(isset($_POST['submit'])){
            $cat_title = $_POST['cat_title'];
            $cat_ref = $_POST['cat_ref'];
            if($cat_title == "" || empty($cat_title)){
                $errors[0] .= "<li class='alert-danger'>Please Add Category Title</li>";
            }
            if($cat_ref == "" || empty($cat_ref)){
                $errors[1] .= "<li class='alert-danger'>Please Add Category Reference</li>";
            } 
            else if($cat_title <> "" && $cat_ref <> ""){
                $query = "insert into categories(cat_title,cat_ref) ";
                $query .= "value ('{$cat_title}','{$cat_ref}')";
                $category = mysqli_query($link,$query);
                if(!$category){
                    die('QueryFailed'. mysqli_error($link));
                }
            }
        } 
    } // end create_categories
    function delete_categories(){
        global $link;
            $cat_id = $_GET['delete'];
            $query = "delete from categories where cat_id = {$cat_id}";
            $delete = mysqli_query($link,$query);
            header("Location: categories.php");
    } //end delete_catogories
    function update_categories(){
        global $link;
        $cat_id = $_GET['update'];
        $query = "select * from categories where cat_id = {$cat_id} ";
        $category_id = mysqli_query($link,$query); 
        while($row = mysqli_fetch_assoc($category_id) ){
            $cat_id =  $row['cat_id'];
            $cat_title =  $row['cat_title'];
            $cat_ref = $row['cat_ref'];   
        ?>    
            <form action="" method="post">
                <div class="form-group">
                    <label for="cat-title">Category Title</label>
                    <input class="form-control" type="text" name="cat_title" id="" value = <?php echo $cat_title ?> >
                </div>
                <div class="form-group">
                    <label for="cat-title">Category Reference</label>
                    <input class="form-control" type="text" name="cat_ref" id="" value = <?php echo $cat_ref ?> >
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="update" id="" value="Update Category">
                    </div>
            </form>
    <?php    }
        if(isset($_POST['update'])){
            global $link;
            $cat_title = $_POST['cat_title'];
            $cat_ref = $_POST['cat_ref'];
            $query = "update categories set cat_title = '{$cat_title}' , cat_ref = '{$cat_ref}' where cat_id = {$cat_id} ";
            $update_category = mysqli_query($link, $query);
            header("Location: categories.php");
        }
    } //end update category
?>