<?php include 'config/db.php' ; ?>

<?php include 'inc/head.php' ; ?>

<?php include 'inc/nav.php' ; ?>

<section class="section">
    <?php 
    $sql = "SELECT * FROM note";
    $q = mysqli_query($conn, $sql);
    if(mysqli_num_rows($q) > 0){
        
    }
    
    
    
    ?>
    <div class="boxes">
        <?php while($rows = mysqli_fetch_assoc($q)): ?>
        <div class="box shadow-lg">
            <h5><?php echo $rows['title'] ;?></h5>
            <div class="body">
                <?php echo $rows['body'] ;?>
            </div>
            <div class="clear-fix">
                <div class="float-left">
                    <small><?php echo $rows['posted_at'] ;?></small>
                </div>
                <div class="float-right">
                    <a href="editnote.php?id=<?php echo $rows['id'] ;?>" class="btn btn-default del" name="edit">
                        <img src="icon\edit-interface-sign.png" alt="">
                    </a>
                    <a href="delete.php?id=<?php echo $rows['id'] ;?>" class="btn btn-danger del" name="delete">
                        <img src="icon\trash.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>

    <div class="addbtn">
        <a href="addnote.php" class="a">+</a>
    </div>
</section>
<?php include 'inc/footer.php' ; ?>