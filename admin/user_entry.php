<?php
 require_once("dbconfig.php");

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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    </head>
    
    <body>
       

    <!-- <a href="all_products.php">product list</a> -->



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

                   
                    <h3>users Entry</h3>
        
                    <?php
			if(isset($_POST['name'])){
				$user_first_name 	= $_POST['name'];
				
				$user_email 		=$_POST['email'];
				$user_password 		=$_POST['password'];
				
				$sql =  "INSERT INTO user (name,email,password) VALUES ('$user_first_name', '$user_email', '$user_password')";
		

          

				if($db->query($sql) == TRUE){
					echo 'Data Inserted!';
				}else{
					echo 'Data not Inserted!';
				}
				
			}
			
		?>

    <legend>users Entry</legend>
    <form action="" method="post">
        name : <br>
        <input type="text" name="name"><br><br>
       
        email  : <br>
        <input type="text" name="email"><br><br>
        password  : <br>
        <input type="text" name="password"><br><br>
        <input type="submit" name="login" value="SUBMIT" class="btn btn-success">
       
        <!-- <button class="btn btn-primary btn-block waves-effect waves-light" type="submit" name="login" >Log In</button> -->
    </form>

    </div><!--end of container-->
                    </div><!--end of right-->
                </div><!--end of row-->
            </div>
            <div class="container-fluid border-top border-success">
                <?php include "partial/footer.php" ?>
            </div>
    </div><!--end of container-->

</body>

</html>
<?php
}else{
	header('location:login.php');
}
?>