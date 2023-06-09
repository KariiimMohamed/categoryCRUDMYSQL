<?php session_start();?>
<?php include("../components/header.php") ?>

<?php if(isset($_SESSION['erorrs'])):
      foreach( $_SESSION['erorrs'] as $error ): ?>

<div class="alert alert-danger"><?= $error ?></div>

<?php endforeach;
 unset($_SESSION['erorrs']);
      endif;  ?>

<?php if (isset( $_SESSION['success'] )): ?>
    <div class="alert alert-danger ">

        <?php echo $_SESSION['success'] ; ?>

    </div>
<?php unset($_SESSION['success']); endif; ?>
<table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">category Name</th>
                    <th scope="col">EDIT category</th>
                    <th scope="col">DELETE category</th>
                </tr>
            </thead>
            <tbody>
                <?php 

                    $conn = mysqli_connect("localhost" , "root" , "" , "ecommerce_project");
                    $create_db = "CREATE DATABASE IF NOT EXISTS `ecommerce_project`";
                    mysqli_query($conn , $create_db);

                    $request = "SELECT * FROM `categories`";
                    $result = mysqli_query($conn , $request);
                    while ($row = mysqli_fetch_assoc($result) ):
        
                ?>     
                <tr>
                    <th scope="row"> <?= $row['id']; ?> </th>
                    <td> <?=  $row['cat_name']; ?> </td>
                    <form method="post" action="../category/editCat.php">
                        <td>
                            <button type="submit" name="row_id" value =" <?= $row['id'] ?> " class="btn btn-primary">Edit</button>
                        </td>
                    </form>
                    <form method="post" action="../handelars/delete.php">
                        <td>
                            <button type="submit" name="row_id" value =" <?= $row['id'] ?> " class="btn btn-primary">Delete</button>
                        </td>
                    </form>
                </tr>
                <?php endwhile; ?>
            </tbody>
</table>

<?php include("../components/footer.php") ?> 