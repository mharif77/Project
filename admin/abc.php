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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
</head>
<body>
    <div class="container bg-info"  >
        <div class="container-fluid border-bottom border-success"><!--topbar-->
           
        <?php include "partial/top_bar.php" ?>   
        
            </div><!--end of topbar-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-3 .bg-success p-0 m-0"><!-- left bar-->
                       
<?php include "partial/left_bar.php" ?>

                    </div><!--end of left-->
                    <div class="col-sm-9 border-start border-success"><!--right bar-->
                        <div class="row p-4">
                            <div class="col-sm-3">
                            <a href="branch_entry.php"><i class="fas fa-folder-plus fa-7x text-success"></i></a>
                            <p>Add Branch</p>
                            </div>


                            <div class="col-sm-3">
                            <a href="branch_list.php"><i class="fas fa-folder-open fa-7x text-success"></i></a>
                            <p>Branch List</p>
                            </div>


                            <div class="col-sm-3">
                            <a href="parcel_tracks _entry.php"><i class="fas fa-box-open fa-7x text-success"></i></a>
                            <p>Add_Parcel_tracks</p>
                            </div>


                            <div class="col-sm-3">
                            <a href="parcel_tracks _list.php"><i class="fas fa-window-restore fa-7x text-success"></i></a>
                            <p>Parcel_tracks_List</p>
                            </div>
                        </div>

                <hr/>

                <div class="row p-4">
                            <div class="col-sm-3">
                            <a href="parcels_entry.php"><i class="fas fa-plus-circle fa-7x text-success"></i></a>
                            <p>Add Parcel</p>
                            </div>


                            <div class="col-sm-3">
                            <a href="parcels _list.php"><i class="fas fa-folder-open fa-7x text-success"></i></a>
                            <p>Parcel List</p>
                            </div>


                            <div class="col-sm-3">
                            <a href="user_entry.php"><i class="fas fa-user-plus fa-7x text-success"></i></a>
                            <p>Add_User</p>
                            </div>
                            

                            <div class="col-sm-3">
                            <a href="user_list.php"><i class="fas fa-users fa-7x text-success"></i></a>
                            <p>User List</p>
                            </div>
                        </div>
         
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
