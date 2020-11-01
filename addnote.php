<?php include 'config/db.php' ; ?>
<?php include 'inc/head.php' ; ?>


<nav class="navbar fixed-top">

    <div class="container addcont">
        <h3 class="navbar-brand">
            Add note
        </h3>
    </div>

</nav>

    <div class="addnote">
        <?php
        if (isset($_POST['submit'])) {
            $title = $_POST['title'];
            $body = $_POST['body'];
            $authur = $_POST['authur'];

            $sql = "INSERT INTO note(title, body, authur)
            VALUES('$title', '$body','$authur')";
            if (mysqli_query($conn, $sql)) {
                echo "Note added";
                header("location: home.php");
            }else{
                echo "error occur";
            }
        }
            
        ?>
        <form action="#" method="post" class="form-group">

        <label for="email">Title:</label>
        <input type="text" name="title" class="form-control" id="email">

        <label for="text">Authur:</label>
        <input type="text" name="authur" class="form-control" id="email">

        <label for="pwd">Body:</label>
        <input type="text" name="body" class="form-control" id="body">


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