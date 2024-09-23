<?php
	require('dbconfig.php');
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
			if(isset($_POST['email'])){
				$user_email 	= $_POST['email'];
				$user_password 	= $_POST['password'];
				
				$sql = "SELECT * FROM user WHERE email='$user_email' AND password = '$user_password'";
						
				$query = $db->query($sql);
				
				if(mysqli_num_rows($query) > 0){
					
					$data = mysqli_fetch_array($query);
					
					$user_first_name = $data['name'];
					
					
					$_SESSION['name'] = $user_first_name;
					
					
					header('location:abc.php');
				}else{
					echo 'Please Try Again Later';
				}
				
			}
		?>

<form action="" method="post">
       
       
        email  : <br>
        <input type="text" name="email"><br><br>
        password  : <br>
        <input type="text" name="password" ><br><br>
		
        <input type="submit" name="login" value="SUBMIT">
       
      
    </form>
</body>
</html>