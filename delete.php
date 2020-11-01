<?php include 'config/db.php' ; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body{
            display:flex !important;
            align-items:center !important;
            justify-content:center !important;
            overflow-x:hidden;
        }
        .delnote{
        margin:20px auto;
        width:300px;
        height:20vh;
        }
        .delnote::-webkit-scrollbar{
        display:none;
        }
    </style>
</head>
<body>
    <?php 
        if (isset($_POST['del'])) {
            $id = $_GET['id'];
            $sql = "DELETE FROM note WHERE id='$id'";
            if (mysqli_query($conn, $sql)) {
                echo "Note Deleted";
                header("location: home.php");
            }
        }
    ?>
  <div class="delnote alert alert-danger">
        <p>Deleting Note, Are you sure!</p>
        <div class="clear-fix">
            <div class="float-left">
                <a href="home.php" class="btn btn-primary">Cancel</a>
            </div>
            <div class="float-right">
               <form action="#" method="post">
                    <input type="submit" name="del" class="btn btn-danger" value="Delete">
               </form>
            </div>
        </div>
    </div>
</body>
</html>