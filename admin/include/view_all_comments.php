<div class="table-responsive">
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Author</th>
                <th>Email</th>
                <th>Comment</th>
                <th>Status</th>
                <th>In Responce to</th>
                <th>Date</th>
                <th colspan = "3" >Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $obj = new Database;
                $obj->connect();
                $row =  $obj->select("*","comments","");
                foreach($row as $rec){
                    $comment_post_id = $rec["comment_post_id"];
                    echo "<tr>";
                    echo "<td>{$rec["comment_id"]}</td>";
                    echo "<td>{$rec["comment_author"]}</td>";
                    echo "<td>{$rec["comment_email"]}</td>";
                    echo "<td>{$rec["comment_content"]}</td>";
                    echo "<td>{$rec["comment_status"]}</td>";
                    $obj = new Database;
                    $obj->connect();
                    $row = $obj->select("*","posts","post_id = $comment_post_id");
                    foreach($row as $res){
                        echo "<td><a href='../post.php?post_id={$res["post_id"]}'>{$res["post_title"]}</a></td>";
                    }
                    echo "<td>{$rec["comment_date"]}</td>";
                    echo "<td><a href='comments.php?approve={$rec["comment_id"]}'>Approve</a></td>";
                    echo "<td><a href='comments.php?unapprove={$rec["comment_id"]}'>Unapprove</a></td>";
                    echo "<td><a href='comments.php?delete={$rec["comment_id"]}'><i class='fa fa-trash text-danger' style='font-size:24px'></i></a></td>";
                    echo "</tr>";
                }
                if(isset($_GET['delete'])){
                    $obj = new Database;
                    $obj->connect();
                    $comment_id = $_GET['delete'];
                    $row = $obj->delete("comments","comment_id","$comment_id");
                    header("Location: comments.php");
                }
                if(isset($_GET['approve'])){
                    $obj = new Database;
                    $obj->connect();
                    $comment_approve_id = $_GET['approve'];
                    $row = $obj->update("comments","comment_status = 'approved'","comment_id","$comment_approve_id");
                    header("Location: comments.php");
                }
                if(isset($_GET['unapprove'])){
                    $obj = new Database;
                    $obj->connect();
                    $comment_approve_id = $_GET['unapprove'];
                    $row = $obj->update("comments","comment_status = 'unapproved'","comment_id","$comment_approve_id");
                    header("Location: comments.php");
                }
            ?>
        </tbody>
    </table>
</div>