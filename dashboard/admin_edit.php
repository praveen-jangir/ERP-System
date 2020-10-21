<?php
session_start();
if (isset($_SESSION['admin']) && $_SESSION['admin']==1) {
	$name=$_SESSION['name'];
}
else{
	?>
	<script>
		window.open('../index.php','_self');
	</script>
	<?php
}
include '../include/dbcon.php';



if ($_POST['roll']=='edit') {


	$name = $_POST['id'];
	$member = explode("_",$name);
	$qry = "SELECT * FROM `member` WHERE `first_name`='$member[0]' AND `last_name`='$member[1]'";
	$run = mysqli_query($con,$qry);

	while ($data = mysqli_fetch_assoc($run)) {
		?>
		<div class="row">
			<div class="col-sm-6 col-md-6" align="center">
				<p><img src="<?php echo $data['images'];?>" style="max-width: 200px; max-height: 200px; border-radius: 25px;"></p>
				<p><button class="btn btn-primary"  data-toggle="modal" data-target="#upload_img">Upload Image</button></p>
				<form method="post" action="admin_edit.php">
					<input type="hidden" name="roll" value="del_member">
					<input type="hidden" name="user_id" value="<?php echo $data['id'];?>">
				<p><button class="btn btn-danger">Delete Member</button></p>
				</form>
				<p><button class="btn btn-dark"  data-toggle="modal" data-target="#member_pass">Change Password</button></p>


				<!-- Modal for image member -->
				<div class="modal fade" id="upload_img" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-centered" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLongTitle">Upload Image</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form method="post" action="admin_edit.php" enctype="multipart/form-data">
				        	<input type="hidden" name="user_id" value="<?php echo $data['id'];?>">
							<input type="hidden" name="roll" value="m_image">
							<p><input type="file" name="file" class="form-control" required=""></p>

							<button class="btn btn-primary btn-sm btn-lg btn-block">Upload</button>
				        </form>
				      </div>
				    </div>
				  </div>
				</div>

				<!-- Modal for password member -->
				<div class="modal fade" id="member_pass" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-centered" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLongTitle">Change Password</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form method="post" action="admin_edit.php">
				        	<input type="hidden" name="user_id" value="<?php echo $data['id'];?>">
							<input type="hidden" name="roll" value="m_password">
							<p><input type="password" name="pass" class="form-control" placeholder="Enter new password" required=""></p>

							<button class="btn btn-dark btn-sm btn-lg btn-block">Update Password</button>
				        </form>
				      </div>
				    </div>
				  </div>
				</div>


			</div>
			<div class="col-sm-6 col-md-6"  align="left">
				<form action="admin_edit.php" method="post">
					<input type="hidden" name="user_id" value="<?php echo $data['id'];?>">
					<input type="hidden" name="roll" value="basic_info">
				<p><lable>First Name:</lable>
				<input type="text" name="fname" class="form-control" value="<?php echo $data['first_name'];?>"></p>
				<p><lable>Last Name:</lable>
				<input type="text" name="lname" class="form-control" value="<?php echo $data['last_name'];?>"></p>

				<p>Office Address: <input type="text" name="o_address" maxlength="500" class="form-control" value="<?php echo $data['o_address']; ?>"></p> 
              <p>Factory Address : <input type="text" name="f_address" maxlength="500" class="form-control" value="<?php echo $data['f_address']; ?>"></p>
              <p>Residential Address : <input type="text" name="r_address" maxlength="500" class="form-control" value="<?php echo $data['r_address']; ?>"></p>
              <p>Products : <input type="text" name="products" maxlength="200" class="form-control" value="<?php echo $data['products']; ?>" required=""></p>

              <p>Whatsapp : <input type="number" name="whatsapp" class="form-control" maxlength="200" value="<?php echo $data['whatsapp']; ?>"></p>
              <p>Instagram : <input type="text" name="insta" class="form-control" maxlength="200" value="<?php echo $data['instagram']; ?>"></p>
              <p>Facebook : <input type="text" name="fb" class="form-control" maxlength="200" value="<?php echo $data['facebook']; ?>"></p>
              <p>LinkedIn : <input type="text" name="linkedin" class="form-control" maxlength="200" value="<?php echo $data['linkedin']; ?>"></p>

              <button class="btn btn-primary btn-lg btn-block">Update Member</button>
              </form>
			</div>
		</div>
		<?php
	}
}

if ($_POST['roll']=='basic_info') {


	$id = $_POST['user_id'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$o_addr = $_POST['o_address'];
	$f_addr = $_POST['f_address'];
	  $r_addr = $_POST['r_address'];
	  $products = $_POST['products'];
	  $whatsapp = $_POST['whatsapp'];
	  $insta = $_POST['insta'];
	  $fb = $_POST['fb'];
	  $linkedin = $_POST['linkedin'];

	   $img=$_FILES['file'];
	    $filename=$img['name'];


	    $qry = "UPDATE `member` SET `first_name`='$fname',`last_name`='$lname',`o_address`='$o_addr',`r_address`='$r_addr',`f_address`='$f_addr',`products`='$products',`facebook`='$fb',`instagram`='$insta',`whatsapp`='$whatsapp',`linkedin`='$linkedin' WHERE `id`='$id'";
	    $run = mysqli_query($con,$qry);

	    if ($run==true) {
	      ?>
	      <script type="text/javascript">
	      	alert('Updated Successfully');
	       window.open('edit_member.php','_self');
	      </script>
	      <?php
	    }
}

if ($_POST['roll']=='m_image') {
	$id = $_POST['user_id'];
	$img=$_FILES['file'];
    $filename=$img['name'];

    if(empty($filename)){
      $defile = 'upload/members/default_person.png';
      
    }
    else{
      $fileerror=$img['error'];
      $filetmp=$img['tmp_name'];

      $fileext = explode('.',$filename);
      $filechck= strtolower(end($fileext));

      $fileet = array('png','jpg','jpeg');

      if(in_array($filechck,$fileet))
      {
        $defile='upload/members/'.$filename;
        move_uploaded_file($filetmp,$defile);
      }
    }

    $qry = "UPDATE `member` SET `images`='$defile' WHERE `id`='$id'";
    $run = mysqli_query($con,$qry);

    if ($run==true) {
      ?>
      <script type="text/javascript">
	      	alert('Updated Successfully');
	       window.open('edit_member.php','_self');
	      </script>
      <?php
    }
}


if ($_POST['roll']=='m_password') {
	$id = $_POST['user_id'];
	$pass = md5($_POST['pass']);

	$qry = "UPDATE `member` SET `password`='$pass' WHERE `id`='$id'";
    $run = mysqli_query($con,$qry);

    if ($run==true) {
      ?>
      <script type="text/javascript">
	      	alert('Updated Successfully');
	       window.open('edit_member.php','_self');
	      </script>
      <?php
    }
}

if ($_POST['roll']=='del_member') {
	$id = $_POST['user_id'];

	$qry = "DELETE FROM `member` WHERE `id`='$id'";
    $run = mysqli_query($con,$qry);

    if ($run==true) {
      ?>
      <script type="text/javascript">
	      	alert('Member Delete Successfully');
	       window.open('edit_member.php','_self');
	      </script>
      <?php
    }
}

?>