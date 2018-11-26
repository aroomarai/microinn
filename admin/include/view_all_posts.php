<div class="table-responsive">
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Date</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $obj = new Database;
                $obj->connect();
                $row =  $obj->select("*","posts","");
                foreach($row as $rec){
                    $post_cat_id = $rec["post_cat_id"];
                    echo "<tr>";
                    echo "<td>{$rec["post_title"]}</td>";
                    $obj = new Database;
                    $obj->connect();
                    $row = $obj->select("*","categories","cat_id = $post_cat_id");
                    foreach($row as $res){
                        echo "<td>{$res["cat_title"]}</td>";
                    }
                    echo "<td>{$rec["post_date"]}</td>";
                    echo "<td><a href='posts.php?source=edit_post&update={$rec["post_id"]}'><i class='fa fa-edit text-success' style='font-size:24px'></i></a></td>";
                    echo "<td><a href='posts.php?delete={$rec["post_id"]}'><i class='fa fa-trash text-danger' style='font-size:24px'></i></a></td>";
                    echo "</tr>";
                }

                if(isset($_GET['delete'])){
                    $obj = new Database;
                    $obj->connect();
                    $post_id = $_GET['delete'];
                    $row = $obj->delete("posts","post_id","$post_id");
                    header("Location: posts.php");
                }

            ?>
        </tbody>
    </table>
</div>