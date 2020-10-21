<?php
include "../include/dbcon.php";
session_start();

if (isset($_POST['sec'])) {
	$sector = $_POST['sec'];

	$qry = "SELECT * FROM `member` WHERE `branch`='Solapur' AND `admin`='0' AND `sector` LIKE '%$sector%' ORDER BY `first_name`";
	$run = mysqli_query($con,$qry);

	while ($mem = mysqli_fetch_assoc($run)) {
		?>
		<div class="col-md-6 col-sm-6">
			<div class="member-card">
				<div class="row">
					<div class="col-sm-6 col-md-6">
						<br><p><img align="center" src="../dashboard/<?php echo $mem['images'];?>" style="max-width: 200px; max-height: 200px; border-radius: 10px;"></p>

						<?php

						if (isset($_SESSION['uid'])) {
							?> 
							<p align="right" data-toggle="modal" data-target="#link<?php echo $mem['id'];?>">&#128279;</p>
							<?php
						}
						else{
							?>
							<p align="center"><button class="btn btn-danger" data-toggle="modal" data-target="#inquery<?php echo $mem['id'];?>">Leave Inquery</button></p>
							<?php
						}
						?>
					</div>

					<div class="col-sm-6 col-md-6">
						<br><h3 align="left"><?php echo $mem['first_name'];?> <?php echo $mem['last_name'];?></h3>
						<?php
						if (isset($mem['company'])){
							?>
							<p align="left"> Company Name :<?php echo $mem['company'];?></p>
							<?php
						}

						if (isset($mem['products'])){
							?>
							<p align="left">Product Name: <?php echo $mem['products'];?></p>
							<?php
						}
						?>	
					</div>
				</div>
			</div>
			<p><br></p>
		</div>


		<!-- Modal for links -->
		  <div class="modal fade" id="link<?php echo $mem['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
			  <div class="modal-content">
				<div class="modal-header">
				  <h5 class="modal-title" id="exampleModalLabel"><?php echo $mem['first_name'];?> <?php echo $mem['last_name'];?></h5>
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
				<div class="modal-body text-left">
				  Contact no.:<?php echo $mem['contact'];?><br><br>
				  <a href="<?php echo $mem['facebook'];?>" target="_blank"><img src="../assets/images/fb.png" height="30" width="30"></a> 

				  <a href="<?php echo $mem['instagram'];?>" target="_blank"><img src="../assets/images/insta.png" height="30" width="30"></a>

				  <a href="<?php echo $mem['whatsapp'];?>" target="_blank"><img src="../assets/images/whatsapp.png" height="30" width="30"></a>

				  <a href="<?php echo $mem['linkedin'];?>" target="_blank"><img src="../assets/images/linkedin.png" height="30" width="30"></a>

				  <a href="<?php echo $mem['website'];?>" target="_blank"><img src="../assets/images/web.png" height="30" width="30"></a>
				 
				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			  </div>
			</div>
		  </div>


		  <!-- Modal for Inquery-->
		  <div class="modal fade" id="inquery<?php echo $mem['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
			  <div class="modal-content">
				<div class="modal-header">
				  <h5 class="modal-title" id="exampleModalLabel"><?php echo $mem['first_name'];?> <?php echo $mem['last_name'];?></h5>
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
				<div class="modal-body">
				  <form method="post" action="" class="form-group">
				  	<p><input type="text" class="form-control" name="name" maxlength="100" placeholder="Enter your name" required=""></p>
				  	<p><input type="email" class="form-control" name="email" maxlength="100" placeholder="Enter your email" required=""></p>
				  	<p><input type="number" class="form-control" name="contact" maxlength="10" placeholder="Enter your contact no." required=""></p>
				  	<p><textarea name="msg" style="height: 200px;" class="form-control" required="" placeholder="Enter your message" maxlength="600"></textarea></p>
				  	<input type="hidden" name="member" value="<?php echo $mem['id'];?>">

				  	
				  </div>
				<div class="modal-footer">
					<p><button type="submit" class="btn btn-primary">Send</button></p>
				  </form>
				  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				</div>
			  </div>
			</div>
		  </div>
		<?php
	}
}
else{
	?>
	<script type="text/javascript">
		window.open('member.php','_self');
	</script>
	<?php
}
?>