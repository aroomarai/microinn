<?php
    if(isset($_POST['create_post'])){
        $post_title = $_POST['post_title'];
        $post_cat_id = $_POST['post_category'];

        $post_image1 = $_FILES['image1']['name'];
        $post_image1_temp = $_FILES['image1']['tmp_name'];

        $post_image2 = $_FILES['image2']['name'];
        $post_image2_temp = $_FILES['image2']['tmp_name'];

        $post_image3 = $_FILES['image3']['name'];
        $post_image3_temp = $_FILES['image3']['tmp_name'];

        $post_image4 = $_FILES['image4']['name'];
        $post_image4_temp = $_FILES['image4']['tmp_name'];

        $post_image5 = $_FILES['image5']['name'];
        $post_image5_temp = $_FILES['image5']['tmp_name'];

        $post_content = $_POST['post_content'];
        $post_date = date('d-m-y');
       // $post_comment_id = 4;

        move_uploaded_file($post_image1_temp, "../images/$post_image1");
        move_uploaded_file($post_image2_temp, "../images/$post_image2");
        move_uploaded_file($post_image3_temp, "../images/$post_image3");
        move_uploaded_file($post_image4_temp, "../images/$post_image4");
        move_uploaded_file($post_image5_temp, "../images/$post_image5");
        $obj = new Database;
        $obj->connect();
        $row =  $obj->insert("posts","post_title,post_cat_id,post_image1,post_image2,post_image3,post_image4,post_image5,post_content,post_date","'$post_title','$post_cat_id','$post_image1','$post_image2','$post_image3','$post_image4','$post_image5','$post_content',now()");
        echo "<p class='bg-success'>Event Created.</a></p>";
    }
?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Event Title</label>
        <input type="text" name="post_title" id="" class="form-control" >
    </div>
    <div class="form-group">
        <label for="category">Event Category</label>
        <select name="post_category" id="">
            <?php
                $obj = new Database;
                $obj->connect();
                $row =  $obj->select("*","categories","");
                foreach($row as $res){
                    $cat_title = $res["cat_title"];
                    $cat_id = $res["cat_id"];
                    echo "<option value='{$cat_id}'>{$cat_title}</option>";
                }    
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="post_image">Event Image</label>
        <div class="row">
            <div class="col-md-2">
                <input type="file"  name="image1">
            </div>
            <div class="col-md-2" style="margin-left:10px;" >
                <input type="file"  name="image2">
            </div>
            <div class="col-md-2" style="margin-left:10px;">
                <input type="file"  name="image3">
            </div>
            <div class="col-md-2" style="margin-left:10px;">
                <input type="file"  name="image4">
            </div>
            <div class="col-md-2" style="margin-left:10px;">
                <input type="file"  name="image5">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="post_content">Event Content</label>
        <textarea class="form-control "name="post_content" id="" cols="30" rows="10">
        </textarea>
    </div>
    <div class="form-group">
          <input class="btn btn-primary" type="submit" name="create_post" value="Publish Event">
    </div>
</form>