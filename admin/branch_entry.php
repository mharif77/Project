<?php
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
        require_once("dbconfig.php");
    if (isset($_POST['submit'])) {
        extract($_POST);
        $sql = "INSERT INTO branches (id,country,branch_code,Division ,zip_code,Thana,contact) 
        VALUES (NULL,'$country','$Branch','$Division' ,'$zip_code','$Thana','$contact')";

        
        $result = $db->query($sql);

        echo $db->affected_rows;

        if ($db->affected_rows) {
            echo "Successfully Added";
        } else {
            echo "Failed";
        }

    }
    ?>

    <legend>branches Entry</legend>
    <form action="" method="post">
        country : <br>
        <input type="text" name="country"><br><br>
        Branch code : <br>
        <input type="text" name="Branch"><br><br>
        Division : <br>
        <input type="text" name="Division"><br><br>
        zip code : <br>
        <input type="text" name="zip_code"><br><br>
        Thana : <br>
        <input type="text" name="Thana"><br><br>
        contact : <br>
        <input type="text" name="contact"><br><br>
        <input type="submit" name="submit" value="SUBMIT" class="btn btn-success">
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