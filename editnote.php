<?php include 'config/db.php' ; ?>
<?php include 'inc/head.php' ; ?>


<nav class="navbar fixed-top">

    <div class="container addcont">
        <h3 class="navbar-brand">
            Edit note
        </h3>
    </div>

</nav>
    <div class="addnote">
        <?php
            if (isset($_POST['submit'])) {
                $postid = $_POST['postid'];
                $title = $_POST['title'];
                $authur = $_POST['authur'];
                $body = $_POST['body'];

                if(empty($title) || empty($authur) || empty($body)){
                    echo "<div class='alert alert-danger'>Fields Cannot Be Empty</div>";
                }else{             
                    $id = $_GET['id'];
                    $sql = "UPDATE note 
                    SET title='$title',authur='$authur',body='$body'
                    WHERE id={$postid}";
                    if (mysqli_query($conn, $sql)) {
                        
                    header("location: home.php");
                    }else{
                        echo "error occur".mysqli_error($conn);
                    }
                }
            }
            $ids = $_GET['id'];
            $sqls = "SELECT * FROM note WHERE id='$ids'";
            $view = mysqli_query($conn, $sqls);
            $rows = mysqli_fetch_assoc($view);
           
        ?>
        <form action="#" method="post" class="form-group">

        <label for="email">Title:</label>
        <input type="text" name="title" class="form-control" value="<?php echo $rows['title']; ?>" id="email">

        <label for="text">Authur:</label>
        <input type="text" name="authur" class="form-control" value="<?php echo $rows['authur']; ?>" id="email">

        <label for="pwd">Body:</label>
        <input type="text" value="<?php echo $rows['body']; ?>" name="body" class="form-control" id="body">

        <input type="hidden" name="postid" value="<?php echo $rows['id']; ?>">
        <div class="clear-fix mt-4">
            <div class="float-left">
                <a href="home.php" class="btn btn-danger">Cancel</a>
            </div>
            <div class="float-right">
                <input type="submit" name="submit" class="btn btn-primary btn-block">
            </div>
        </div>
        
        </form>
    </div>
</body>
</html>