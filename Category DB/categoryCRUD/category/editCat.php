<?php include("../components/header.php") ?>
<?php
    session_start();

   

    if ($_SERVER["REQUEST_METHOD"]  == "POST") {

        $errors = [];

   

        function validate($var) {
            return trim(htmlspecialchars(htmlentities($var)));
        }

        $row_id = validate($_POST['row_id']);
        

        if (!is_numeric($row_id)) {
            $errors[] = "DON'T PLAY HERE";
        }


        if (empty($errors)) {
            $conn = mysqli_connect("localhost" , "root" , "" , "ecommerce_project");
            $create_db = "CREATE DATABASE IF NOT EXISTS `ecommerce_project`";
            mysqli_query($conn , $create_db);
        
            $request = "SELECT cat_name FROM `categories` WHERE `id` = $row_id  ";
            $result = mysqli_query( $conn , $request );
            $data = mysqli_fetch_assoc($result);
            $_SESSION['cat_id'] = $row_id;
        } else {
            $_SESSION['erorrs'] = $errors;
            header("location:../category/showCat.php");
        }

        
    }

?>

<div class="container mt-5">
		<div class="row">
			<div class="col-md-6 offset-md-3">
                <form action="../handelars/edit.php" method="post">
					<div class="form-group mb-2">
						<label for="exampleFormControlInput1">EDIT category</label>
						<input type="text" class="form-control" name="edited-category" id="exampleFormControlInput1"
                         value = <?php foreach ($data as $value) { echo $value; } ?>>
					</div>
					<button  type="submit" name="add" class="btn btn-primary">EDIT</button>
				</form>
			</div>
		</div>
</div>


<?php include("../components/footer.php"); ?> 