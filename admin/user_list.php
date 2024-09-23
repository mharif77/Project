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
    <title>all products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
</head>

<body>
   
    <!-- <a href="product_entry.php">New Product</a> -->


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

                   
                    <h3>user list</h3>
    <?php
    $sql = "SELECT * FROM  user";
    $data = $db->query($sql); ?>

<table class="table table-success table-striped" >
        <tr>
            <th>id</th>
            <th>name </th>
            
            <th>email </th>
            <th>password </th>
            <th>Action</th>
            
        </tr>
        <?php

        while ($row = $data->fetch_assoc()) { ?>

            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
               
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['password'] ?></td>

               <td>
                <a href="edit_user.php?id=<?php echo $row['id'] ?>">Edit</a>
                    <a onclick="return confirm('Are you sure to delete')" href="user_delete.php?id=<?php echo $row['id'] ?>">Delete</a>
                    </td>
            </tr>

            <?php
        }
        // echo "<pre>";
        // print_r($row);
        ?>
    </table>
    <br><br>

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