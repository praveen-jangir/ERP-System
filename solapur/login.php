<?php
include "include/dbcon.php";
if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$pass = md5($_POST['pass']);

	include 'include/dbcon.php';

	$qry = "SELECT * FROM `member` WHERE contact='$email' AND password ='$pass'";
	$run = mysqli_query($con,$qry);

	if (mysqli_num_rows($run)>0) {
		$data=mysqli_fetch_assoc($run);
	   $id=$data['id'];
	   $email=$data['email'];
	   $name = $data['first_name'];
	   $admin = $data['admin'];
	   $img = $data['images'];
	   
	   $_SESSION['uid']=$id;
	   $_SESSION['email']=$email;
	   $_SESSION['name']=$name;
	   $_SESSION['admin']=$admin;

	   ?>
		<script type="text/javascript">
			window.open('index.php','_self');
		</script>
		<?php
	}
	else{
		?>
		<script type="text/javascript">
			alert('Incorrect Username or password!!');
			window.open('index.php','_self');
		</script>
		<?php
	}
}


?>