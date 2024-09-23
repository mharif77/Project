<?php
require('dbconfig.php');
	session_start();
	
	$user_first_name = $_SESSION['name'];
	
	
	if(!empty($user_first_name)){

    
		
		
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    
    <body>
        <h3>branches Entry</h3>
        <div class="container bg-info">
        <div class="container-fluid border-bottom border-success"><!--topbar-->
           
        <?php include "partial/top_bar.php" ?>   
        
            </div><!--end of topbar-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-3 .bg-success p-0 m-0"><!-- left bar-->
                       
<?php include "partial/left_bar.php" ?>

                    </div><!--end of left-->
                    <div class="col-sm-9 border-start border-success"><!--right bar-->
                    <div class="container p-2 m-2">

                   
                    <?php
                            $id = $_REQUEST['id'];

                            if (isset($_POST['submit'])) {
                                extract($_POST);

                                $sql = "UPDATE parcel_tracks SET id='$id',parcel_id='$parcel_id',date_created='$date_created' WHERE id='$id'";

                                $update = mysqli_query($db, $sql);

                                if ($update) {
                                    echo "Updated";
                                    
                                } else {
                                    echo "Not updated";
                                }
                            }


                            $sql = $db->query("SELECT * FROM parcel_tracks WHERE id='$id'");
                                $row = $sql->fetch_assoc();

                            ?>

    <legend>branches Entry</legend>
    <form action="" method="post">
    id : <br>
        <input type="text" name="id" value="<?php echo $row['id']  ?>"><br><br>
        
        parcel_id : <br>
        <input type="text" name="parcel_id" value="<?php echo $row['parcel_id']  ?>"><br><br>
      
        date_created : <br>
        <input type="text" name="date_created" value="<?php echo $row['date_created']  ?>"><br><br>
       
        <input type="submit" name="submit" value="UPDATE" class="btn btn-success">
    </form>

    </div><!--end of container-->
                    </div><!--end of right-->
                </div><!--end of row-->
            </div>
            <div class="container-fluid border-top border-success">
                <?php include "partial/footer.php" ?>
            </div>
    </div><!--end of container-->
        
       

    <!-- <a href="all_products.php">product list</a> -->





</body>

</html>
<?php
}else{
	header('location:login.php');
}
?>