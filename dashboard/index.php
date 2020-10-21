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
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard - Mcircle</title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="../include/css/style.css">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">MCIRCLE -<?php echo $name;?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar of mcircle Dasboard -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="request.php">Requests</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="edit_member.php">Edit Member</a>
      </li>
    </ul>
    <span class="form-inline my-2 my-lg-0">
      <font color="white"><i>Welcome, <?php echo $name;?></i></font>
    </span>
    <span class="form-inline my-2 my-lg-0">
      <font class="logout"><a href="../include/logout.php"><button class="btn btn-sm btn-danger">Logout</button></a></font>
    </span>
  </div>
</nav>

<!-- Cards of Dashboard features -->
<section class="container-fluid main-body">

	<div class="row">
		<div class="col-md-3 col-sm-3">
			<div class="card card-len text-white bg-primary mb-3" data-toggle="modal" data-target="#exampleModal" style="max-width: 18rem;">
			  <div class="card-header">Theme Line</div>
			  <div class="card-body">
			    <h5 class="card-title">Theme line of the year</h5>
			    <p class="card-text">Press it and change the theme line of the year for <?php echo $name;?>.</p>
			  </div>
			</div>	
		</div>

		<div class="col-md-3 col-sm-3">
			<div class="card card-len text-white bg-primary mb-3"  data-toggle="modal" data-target="#exampleModal2" style="max-width: 18rem;">
			  <div class="card-header">Project Icons - Home</div>
			  <div class="card-body">
			    <h5 class="card-title">Action on Icons</h5>
			    <p class="card-text">You can add/change data for <?php echo $name;?>.</p>
			  </div>
			</div>	
		</div>

		<div class="col-md-3 col-sm-3">
			<div class="card card-len text-white bg-primary mb-3"   data-toggle="modal" data-target="#exampleModal3" style="max-width: 18rem;">
			  <div class="card-header">Links</div>
			  <div class="card-body">
			    <h5 class="card-title">Change Links</h5>
			    <p class="card-text">Here you can change the links for <?php echo $name;?>.</p>
			  </div>
			</div>	
		</div>

		<div class="col-md-3 col-sm-3">
			<div class="card card-len text-white bg-primary mb-3"  data-toggle="modal" data-target="#exampleModal4" style="max-width: 18rem;">
			  <div class="card-header">Testimonial Videos</div>
			  <div class="card-body">
			    <h5 class="card-title">Actions for Testimonial Videos.</h5>
			    <p class="card-text">Upload and delete Testimonial videos for <?php echo $name;?>.</p>
			  </div>
			</div>	
		</div>

		<div class="col-md-3 col-sm-3">
			<div class="card card-len text-white bg-primary mb-3" data-toggle="modal" data-target="#exampleModal5" style="max-width: 18rem;">
			  <div class="card-header">Action on Member</div>
			  <div class="card-body">
			    <h5 class="card-title">Add/Delete Member</h5>
			    <p class="card-text">Here you can upload or delete member for <?php echo $name;?>.</p>
			  </div>
			</div>	
		</div>

		<div class="col-md-3 col-sm-3">
			<div class="card card-len text-white bg-primary mb-3"  data-toggle="modal" data-target="#exampleModal6" style="max-width: 18rem;">
			  <div class="card-header">Member Story</div>
			  <div class="card-body">
			    <h5 class="card-title">Add Member Story</h5>
			    <p class="card-text">Here you can add member story for <?php echo $name;?>.</p>
			  </div>
			</div>	
		</div>

		<div class="col-md-3 col-sm-3">
			<div class="card card-len text-white bg-primary mb-3" data-toggle="modal" data-target="#exampleModal7" style="max-width: 18rem;">
			  <div class="card-header">About Us</div>
			  <div class="card-body">
			    <h5 class="card-title">Image and Description</h5>
			    <p class="card-text">Here you can add Image and Description for About Us.</p>
			  </div>
			</div>	
		</div>

		<div class="col-md-3 col-sm-3">
			<div class="card card-len text-white bg-primary mb-3" data-toggle="modal" data-target="#exampleModal8" style="max-width: 18rem;">
			  <div class="card-header">Current Member - About Us</div>
			  <div class="card-body">
			    <h5 class="card-title">Add or remove member</h5>
			    <p class="card-text">Here you can add or remove current member for <?php echo $name;?>.</p>
			  </div>
			</div>	
		</div>

		<div class="col-md-3 col-sm-3">
			<div class="card card-len text-white bg-primary mb-3" data-toggle="modal" data-target="#exampleModal9" style="max-width: 18rem;">
			  <div class="card-header">Past President</div>
			  <div class="card-body">
			    <h5 class="card-title">Add/Remove President & Member</h5>
			    <p class="card-text">Add or remove president with members for <?php echo $name;?>.</p>
			  </div>
			</div>	
		</div>

		<div class="col-md-3 col-sm-3">
			<div class="card card-len text-white bg-primary mb-3" data-toggle="modal" data-target="#exampleModal10" style="max-width: 18rem;">
			  <div class="card-header">Sector Icon - Member List</div>
			  <div class="card-body">
			    <h5 class="card-title">Upload Icons</h5>
			    <p class="card-text">Here you can upload icons for sectors in Member_List <?php echo $name;?>.</p>
			  </div>
			</div>	
		</div>

		<div class="col-md-3 col-sm-3">
			<div class="card card-len text-white bg-primary mb-3"  data-toggle="modal" data-target="#exampleModal11" style="max-width: 18rem;">
			  <div class="card-header">Honrable Member</div>
			  <div class="card-body">
			    <h5 class="card-title">Add/Remove Member</h5>
			    <p class="card-text">Here you can add or remove honrable Members for <?php echo $name;?>.</p>
			  </div>
			</div>	
		</div>

		<div class="col-md-3 col-sm-3">
			<div class="card card-len text-white bg-primary mb-3" data-toggle="modal" data-target="#exampleModal12" style="max-width: 18rem;">
			  <div class="card-header">Events</div>
			  <div class="card-body">
			    <h5 class="card-title">Upload Events</h5>
			    <p class="card-text">Here you can upload events for <?php echo $name;?>.</p>
			  </div>
			</div>	
		</div>

		<div class="col-md-3 col-sm-3">
			<div class="card card-len text-white bg-primary mb-3" data-toggle="modal" data-target="#exampleModal13" style="max-width: 18rem;">
			  <div class="card-header">Alumni Members</div>
			  <div class="card-body">
			    <h5 class="card-title">Add/Remove Alumni Members</h5>
			    <p class="card-text">Here you can add/remove alumni members for <?php echo $name;?>.</p>
			  </div>
			</div>	
		</div>


</div>
</section>



<!-- Here starts models for inputs -->

<!-- Model for Theme -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tag line of The Year</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="post" action="action.php">
              <div class="form-group">
              	<input type="hidden" name="roll" value="theme">
              <p><input type="text" class="form-control" name="line" maxlength="300" placeholder="Enter Tag line of the year..." required></p>
               <input type="hidden" name="uploader" value="<?php echo $name;?>"> 
        
        </div>
    
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save changes</button>
           </form>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
        </div>
      </div>
    </div>
    </div>
</div>


<!-- Model for Project Icons -->
  <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Upload Project Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        	<!-- This form is filling for skill plus -->
        	<h4>Skill Plus</h4>
        	<hr>
            <form method="post" action="action.php">
              <div class="form-group">
              	<input type="hidden" name="roll" value="skill_plus">
              	<p><input type="text" class="form-control" maxlength="1800" placeholder="Enter your content" name="text" required=""></p>
              	<input type="hidden" name="uploader" value="<?php echo $name; ?>">
              	<input type="hidden" name="content" value="skill_plus">
              	<button type="submit" class="btn btn-sm btn-primary">Add Data</button>
	        </div>
	    </form>

	    <p><br></p>
	    <!-- This form is filling for MBS -->
	    <h4>MBS</h4>
        	<hr>
            <form method="post" action="action.php">
              <div class="form-group">
              	<input type="hidden" name="roll" value="mbs">
              	<p><input type="text" class="form-control" maxlength="1800" placeholder="Enter your content" name="text" required=""></p>
              	<input type="hidden" name="uploader" value="<?php echo $name; ?>">
              	<input type="hidden" name="content" value="mbs">
              	<button type="submit" class="btn btn-sm btn-primary">Add Data</button>
	        </div>
	    </form>

	    <!-- This form is filling for Profile Plus -->
	    <h4>Profile Plus</h4>
        	<hr>
            <form method="post" action="action.php" enctype="multipart/form-data">
              <div class="form-group">
              	<input type="hidden" name="roll" value="profile_plus">
              	<p>Title Image: <input type="file" class="form-control" name="file" required=""></p>
              	<p><input type="text" class="form-control" maxlength="1800"  placeholder="Enter your content" name="text" required=""> </p>
              	<input type="hidden" name="uploader" value="<?php echo $name; ?>">
              	<input type="hidden" name="content" value="profile_plus">
              	<button type="submit" class="btn btn-sm btn-primary">Add Data</button>
	        </div>
	    </form>

      <!-- This form is filling for Profile Plus -->
      <h4>Profile Plus - Images</h4>
          <hr>
            <form method="post" action="action.php" enctype="multipart/form-data">
              <div class="form-group">
                <input type="hidden" name="roll" value="profile_plus_img">
                <p>Title Image: <input type="file" class="form-control" name="file" required=""></p>
                <input type="hidden" name="content" value="image">
                <button type="submit" class="btn btn-sm btn-primary">Add Data</button>
          </div>
      </form>

      <!-- This form is filling for Profile Plus -->
      <h4>Profile Plus - Videos</h4>
          <hr>
            <form method="post" action="action.php" enctype="multipart/form-data">
              <div class="form-group">
                <input type="hidden" name="roll" value="profile_plus_vid">
                <p><input type="text" class="form-control" maxlength="1800"  placeholder="Enter video link" name="text" required=""> </p>
                <input type="hidden" name="content" value="video">
                <button type="submit" class="btn btn-sm btn-primary">Add Data</button>
          </div>
      </form>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
        </div>
      </div>
    </div>
    </div>
</div>


<!-- Model for Testimonial Videos -->
  <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Upload Testimonial Videos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="post" action="action.php">
            	<input type="hidden" name="roll" value="t_video">

              <datalist id="members">
              	<?php
				  	$qry = "SELECT * FROM `member` WHERE `branch`='$name'";
				  	$run = mysqli_query($con,$qry);
				  	$count = 0;

				  	while ($members = mysqli_fetch_assoc($run)) {
				  		$count++;

				  		if ($members['admin']==0) {
				  		?>
				  		
						  <option value="<?php echo $members['first_name']."_".$members['last_name']; ?>">
						
				  		<?php	
				  		}
				  	}
				  	$count=0;
				  	?>
            </datalist>

				  	<p><input list="members" class="form-control" name="title" id="members" placeholder="Select Member" required="">
              	</p> 
          <p><input type="text" name="link" class="form-control" maxlength="800" placeholder="Link" required=""></p>
          <input type="hidden" name="uploader" value="<?php echo $name; ?>">
          <p><button type="submit" class="btn btn-primary">Upload</button></p>
        
        </div>
        </form>

        <hr>
        <div class="container">
        <h4>Delete Video</h4>

        <form method="post" action="action.php">
			<input type="hidden" name="roll" value="t_del">
	        <table >
	        	<tr>
	        	<td><select class="form-control" name="del">

		  	<?php
		  	$qry = "SELECT * FROM `t_video` WHERE `uploader`='$name'";
		  	$run = mysqli_query($con,$qry);
		  	$count = 0;

		  	while ($data = mysqli_fetch_assoc($run)) {
		  		$count++;
		  		?>
		  		<option value="<?php echo $data['id'];?>"><?php echo $data['title'];?></option>
		  		<?php
		  	}
		  	?>
	    </select></td>
	     <td><button class="btn btn-danger">Delete</button></td>
	     </tr>
    	</table>
    </form>
    </div>
    <p><br></p>
        <div class="modal-footer">
          
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
        </div>
      </div>
    </div>
    </div>
</div>



<!-- Model for All Links -->
  <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Links</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="post" action="action.php">
            	<input type="hidden" name="roll" value="links">
              <p>
            <select class="form-control" name="type">
            	<?php
            	if ($name=='Chennai') {
            	?>
                <option value="1">Chennai Address</option>
                <option value="2">footer facebook</option>
                <option value="3">footer Instagram</option>
                <option value="4">Footer Linkedin</option>
                <option value="5">Footer Youtube</option>
                <option value="6">footer Location Link</option>
                <option value="7">Footer whatsapp number</option>
                <option value="8">Footer Gmail Link</option>
                <option value="9">Zoom Link</option>
                <?php
          		  }
          		  else{
                ?>
                <option value="10">Solapur Address</option>
                <option value="11">footer facebook</option>
                <option value="12">footer Instagram</option>
                <option value="13">Footer Linkedin</option>
                <option value="14">Footer Youtube</option>
                <option value="15">footer Location Link</option>
                <option value="16">Footer whatsapp number</option>
                <option value="17">Footer Gmail Link</option>
                <option value="18">Zoom Link</option>
                <?php
                }
                ?>
            </select>
          </p> 
          <p><input type="text" name="link" class="form-control" maxlength="800" placeholder="Link" required=""></p>
        	
        	<button type="submit" class="btn btn-primary">Update Link</button>
          </form>
        </div>
    	
    	<p><br></p>

    	<div class="container">
    		<h4>Add Link</h4>
	    	<hr>

	    	<form class="form-group" method="post" action="action.php">
	    		<input type="hidden" name="roll" value="link_add">
	    		<p><input type="text" name="link_key" class="form-control" maxlength="800" placeholder="Link Title" required=""></p>

	    		<p><input type="text" name="link_value" class="form-control" maxlength="800" placeholder="Link" required=""></p>

	    		<button type="submit" class="btn btn-primary">Add Link</button>
	    	</form>
    	</div>

        <div class="modal-footer">
          
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
        </div>
      </div>
    </div>
    </div>
</div>



 <!-- Model for Member -->
  <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Action on Member</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        	<h3>Add Member</h3>
        	<hr>
            <form method="post" action="action.php" enctype="multipart/form-data">
              <div class="form-group">
              <input type="hidden" name="roll" value="add_member">
              <p>Profile Image: <input type="file" class="form-control" name="file"></p>
              <p><input type="text" class="form-control" maxlength="100" id="f_name" name="f_name" placeholder="First Name" required=""></p>
              <p><input type="text" class="form-control" maxlength="200" name="l_name" placeholder="Last Name" required=""></p>
              <p><input type="number" class="form-control" maxlength="10" id="contact" name="contact" maxlength="12" placeholder="Contact Number" required="">
                <br><font color="red">This contact is consider as your username.</font></p>
              <p><input type="email" class="form-control" maxlength="200" name="email" placeholder="Email" required=""></p>
              <!-- <p><input type="password" class="form-control" maxlength="8" name="pass" placeholder="Create new password" required=""></p> -->

              <p>
                Sectors:
                <table>
                  <tr>
                <?php
                for ($i=0; $i < 7; $i++) { 
                  ?>
                  <td><select class="form-control" name="sector[]">
                    <option value="non">Non</option>
                    <?php
                    $qry = "SELECT * FROM `sector` WHERE `branch` = 'Chennai'";
                    $run = mysqli_query($con,$qry);
                    while ($data = mysqli_fetch_assoc($run)) {
                      ?>
                     <option value="<?php echo $data['title']; ?>"><?php echo $data['title']; ?></option>
                      <?php
                    }
                    ?>
                  </select></td>
                  <?php
                }
                ?>
                </tr>
                </table>
              </p>
              <!-- <p><input type="text" class="form-control" maxlength="500" name="sector" placeholder="Sectors" required=""></p> -->
              <p><input type="text" class="form-control" maxlength="500" name="products" placeholder="Products" required=""></p>
              <p><input type="text" class="form-control" maxlength="500" name="company" placeholder="Company" required=""></p>
              <!-- desc -->
              <p><input type="text" class="form-control" maxlength="500" name="o_addr" placeholder="Office Address" ></p>
              <p><input type="text" class="form-control" maxlength="500" name="f_addr" placeholder="Factory Address"></p>
              <p><input type="text" class="form-control" maxlength="500" name="r_addr" placeholder="Residential Address"></p>
              <p>Birth Date: <input type="date" class="form-control" name="b_date" required=""></p>
              <p><input type="text" class="form-control" maxlength="200" name="fb" placeholder="Facebook Link"></p>
              <p><input type="text" class="form-control" maxlength="200" name="linkedin" placeholder="LinkedIn Link"></p>
              <p><input type="text" class="form-control" maxlength="200" name="insta" placeholder="Instagram Link"></p>
              <p><input type="number" class="form-control" maxlength="200" name="whatsapp" placeholder="Whatsapp Link"></p>
              <p><input type="text" class="form-control" maxlength="200" name="web" placeholder="Website Link"></p>
              <p><input type="text" class="form-control" maxlength="200" name="branch" value="<?php echo $name;?>" disabled=""></p>
              <p><input type="text" class="form-control" maxlength="500" name="award" placeholder="Awards"></p>
              <p><input type="text" class="form-control" maxlength="500" name="club" placeholder="Club"></p>
              <p><input type="text" class="form-control" maxlength="500" name="keyword" placeholder="Add keyword" disabled=""></p>
              <p><button type="submit" id="m_btn" class="btn btn-primary btn-sm">Add Member</button></p>
        </div>
    </form>
        <div class="modal-footer">
          
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>        
      </div>
    </div>
    </div>
</div>




<!-- Model for Add Story -->
  <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Upload Member Story</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="post" action="action.php">
              <div class="form-group">
	              	<input type="hidden" name="roll" value="add_story">

                  <datalist id="s_members">
	              	<?php
					  	$qry = "SELECT * FROM `member` WHERE `branch`='$name'";
					  	$run = mysqli_query($con,$qry);
					  	$count = 0;

					  	while ($members = mysqli_fetch_assoc($run)) {
					  		$count++;

					  		if ($members['admin']==0) {
					  		?>
					  		
							  <option value="<?php echo $members['first_name']."_".$members['last_name']; ?>">
							
					  		<?php	
					  		}
					  	}
					  	$count=0;
					  	?>
              </datalist>

					  	<p><input list="s_members" class="form-control" name="member" id="s_members" placeholder="Select Member" required="">
	              	</p> 
	          <p><textarea maxlength="1800" class="form-control" name="story" placeholder="Enter Text" required=""></textarea></p>
              
        
        </div>
    
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Add Story</button>
           </form>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
        </div>
      </div>
    </div>
    </div>
</div>



<!-- Model for About Us Description -->
  <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">About Us</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="post" action="action.php" enctype="multipart/form-data">
              <div class="form-group">
	              	<input type="hidden" name="roll" value="add_desc">
	              	
	              	<p>Title Image: <input type="file" class="form-control" id="file" oninput="file_check()" name="file" required=""></p>
	          <p><textarea maxlength="1000" class="form-control" id="abt_desc" name="about" oninput="verification_txt()" placeholder="Upload About Us Text" required=""></textarea></p>
              
        
        </div>
    
        <div class="modal-footer">
          <button type="submit" id="s_btn" class="btn btn-primary">Upload Description</button>
           </form>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
        </div>
      </div>
    </div>
    </div>
</div>


<!-- Model for Add Current Member -->
  <div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Current Member</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="post" action="action.php">
              <div class="form-group">
                  <input type="hidden" name="roll" value="add_cur_mem">

                  <datalist id="c_members">
                  <?php
              $qry = "SELECT * FROM `member` WHERE `branch`='$name'";
              $run = mysqli_query($con,$qry);
              $count = 0;

              while ($members = mysqli_fetch_assoc($run)) {
                $count++;

                if ($members['admin']==0) {
                ?>
                
                <option value="<?php echo $members['first_name']."_".$members['last_name']; ?>">
              
                <?php 
                }
              }
              $count=0;
              ?>
              </datalist>

              <p><input list="c_members" class="form-control" name="member" id="c_members" placeholder="Select Member" required="">
                  </p> 

              <p><input type="text" class="form-control" maxlength="800" name="desc" placeholder="Member Short Intro" required=""></p>    
            <p>
              <select class="form-control" name="designation">
                <option value="President">President</option>
                <option value="Vice President">Vice President</option>
                <option value="Secretary">Secretary</option>
                <option value="Joint Secretary">Joint Secretary</option>
                <option value="Treasurer">Treasurer</option>
                <option value="HR Director">HR Director</option>
                <option value="PR Director">PR Director</option>
                <option value="Entertainment Director">Entertainment Director</option>
                <option value="BD Director">BD Director</option>
                <option value="Greeter">Greeter</option>
                <option value="Tour Director">Tour Director</option>
                <option value="Editor">Editor</option>
                <option value="Extension Director">Extension Director</option>
                <option value="Immediate Past President">Immediate Past President</option>
              </select>
            </p>
           <p> <button type="submit" class="btn btn-primary">Add Member</button></p>
           </form>
              
        
        <div class="container">
        <h4>Delete Member</h4>

        <form method="post" action="action.php">
      <input type="hidden" name="roll" value="del_cur_mem">
          <table >
            <tr>
            <td><select class="form-control" name="del">

        <?php
        $qry = "SELECT * FROM `cur_member` WHERE `branch`='$name'";
        $run = mysqli_query($con,$qry);
        $count = 0;

        while ($data = mysqli_fetch_assoc($run)) {
          $count++;
          ?>
          <option value="<?php echo $data['id'];?>"><?php echo $data['name'];?> (<?php echo $data['designation'];?>)</option>
          <?php
        }
        ?>
      </select></td>
       <td><button class="btn btn-danger">Delete</button></td>
       </tr>
      </table>
    </form>
    </div>
        </div>
    
        <div class="modal-footer">
          
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
        </div>
      </div>
    </div>
    </div>
</div>



<!-- Model for Past President -->
  <div class="modal fade" id="exampleModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Past President</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h3>Add Past President</h3>
          <hr>
            <form method="post" action="action.php" enctype="multipart/form-data">
              <div class="form-group">
              <input type="hidden" name="roll" value="add_president">

                <datalist id="p_members">

                <?php
                $qry = "SELECT * FROM `member` WHERE `branch`='$name'";
                $run = mysqli_query($con,$qry);

                $qry1 = "SELECT * FROM `alumni` WHERE `branch`='$name'";
                $run1 = mysqli_query($con,$qry1);
                $count = 0;
                while ($members = mysqli_fetch_assoc($run)) {
                  $count++;

                  if ($members['admin']==0) {
                  ?>
                  <option value="<?php echo $members['first_name']."_".$members['last_name']."_".'Member'; ?>">
                  <?php 
                  }
                }
                $count=0;
                while ($members1 = mysqli_fetch_assoc($run1)) {
                  $count++;
                  ?>
                  <option value="<?php echo $members1['first_name']."_".$members1['last_name']."_".'Alumni'; ?>">
                  <?php 
                }
                $count =0;
                ?>
                </datalist>

                <p><input list="p_members" class="form-control" name="president" id="p_members" placeholder="Select Member" required="">
                    </p>
                <p>
                  <select class="form-control" name="from">
                    <option value="" disabled="">From</option>

                    <?php
                    $yr = date("Y");
                     for ($i=1970; $i <=$yr; $i++) { 
                       ?>
                       <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                       <?php
                     }
                    ?>  
                  </select>
                </p>    

                <p>
                  <select class="form-control" name="to">
                    <option value="" disabled="">To</option>

                    <?php
                    $yr = date("Y");
                     for ($i=1970; $i <=$yr; $i++) { 
                       ?>
                       <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                       <?php
                     }
                    ?>  
                  </select>
                </p>    
              <p><button type="submit" id="m_btn" class="btn btn-primary btn-sm">Add Member</button></p>
        </div>
    </form>

    <div class="container">
        <h4>Delete Member</h4>

        <form method="post" action="action.php">
      <input type="hidden" name="roll" value="del_president">
          <table >
            <tr>
            <td><select class="form-control" name="del">

        <?php
        $qry = "SELECT * FROM `p_president` WHERE `branch`='$name'";
        $run = mysqli_query($con,$qry);
        $count = 0;

        while ($data = mysqli_fetch_assoc($run)) {
          $count++;
          ?>
          <option value="<?php echo $data['id'];?>"><?php echo $data['name'];?> (<?php echo $data['y_from'];?>-<?php echo $data['y_to'];?>)</option>
          <?php
        }
        ?>
      </select></td>
       <td><button class="btn btn-danger">Delete</button></td>
       </tr>
      </table>
    </form>
    <hr>
    <p><br></p>

   <!--  Add member under president -->
    <form method="post" action="action.php">
       <input type="hidden" name="roll" value="president_member">

    <h3>Add Members Under <select class="form-control" name="under_president">
      <?php
        $qry = "SELECT * FROM `p_president` WHERE `branch`='$name'";
        $run = mysqli_query($con,$qry);
        $count = 0;

        while ($data = mysqli_fetch_assoc($run)) {
          $count++;
          ?>
          <option value="<?php echo $data['id'] ?>"><?php echo $data['name'];?></option>
          <?php
        }
      ?>
    </select></h3>

      <p></p>

    <table class="table" border="2">
      <tr>
        <th>Name</th><th>Designation</th>
      </tr>
      <tbody>
        <?php
        for ($i=0; $i < 13; $i++) { 
          ?>
          <tr>
            <td>
              <input list="p_members" class="form-control" name="pre_member[]" id="p_members" placeholder="Select Member" required="">
            </td>

            <td>
              <select class="form-control" name="m_designation[]">
                <option value="Vice President">Vice President</option>
                <option value="Secretary">Secretary</option>
                <option value="Joint Secretary">Joint Secretary</option>
                <option value="Treasurer">Treasurer</option>
                <option value="HR Director">HR Director</option>
                <option value="PR Director">PR Director</option>
                <option value="Entertainment Director">Entertainment Director</option>
                <option value="BD Director">BD Director</option>
                <option value="Greeter">Greeter</option>
                <option value="Tour Director">Tour Director</option>
                <option value="Editor">Editor</option>
                <option value="Extension Director">Extension Director</option>
                <option value="Immediate Past President">Immediate Past President</option>
              </select>
            </td>
          </tr>
          <?php
        }
        ?>
        <tr><td></td><td><button type="submit" class="btn btn-primary btn-sm">Add Members</button></td></tr>
      </tbody>
    </table>
    
  </form>
    </div>
        <div class="modal-footer">
          
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>        
      </div>
    </div>
    </div>
</div>



<!-- Model for Sector Icons -->
  <div class="modal fade" id="exampleModal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sector Icons</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h4>Upload Sector</h4>
            <form method="post" action="action.php" enctype="multipart/form-data">
              <div class="form-group">
                  <input type="hidden" name="roll" value="add_sector">
                  
                  <p>Sector Icon : <input type="file" class="form-control" name="file" required=""></p>
                  <p><input type="text" name="sector" class="form-control" placeholder="Sector Title" maxlength="500" required=""></p>
              
        
              </div>
              <button type="submit" id="s_btn" class="btn btn-primary">Upload Description</button>
            </form>

            <hr>
            <p><br></p>

            <div class="container">
              
            <h4>Delete Sector</h4>
              <div class="form-group">
                  <form method="post" action="action.php">
                    <input type="hidden" name="roll" value="del_sector">

                    <table>
                    <tr>
                    <td><select class="form-control" name="del">

                      <?php
                      $qry = "SELECT * FROM `sector` WHERE `branch`='$name'";
                      $run = mysqli_query($con,$qry);
                      $count = 0;

                      while ($data = mysqli_fetch_assoc($run)) {
                        $count++;
                        ?>
                        <option value="<?php echo $data['id'];?>"><?php echo $data['title'];?></option>
                        <?php
                      }
                      ?>
                    </select></td>
                     <td><button class="btn btn-danger">Delete</button></td>
                     </tr>
                    </table>
                  </form>                
              </div>
            </div>
        <div class="modal-footer">
          
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
        </div>
      </div>
    </div>
    </div>
</div>



<!-- Model for Honrary Member -->
  <div class="modal fade" id="exampleModal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Honrary Member</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h4>Upload Sector</h4>
            <form method="post" action="action.php" enctype="multipart/form-data">
              <div class="form-group">
                  <input type="hidden" name="roll" value="add_honrary">
                  
                  <p>Profile Image: <input type="file" class="form-control" name="file"></p>
                  <p><input type="text" class="form-control" maxlength="100" id="f_name" name="f_name" placeholder="Name" required=""></p>
                  <p><input type="text" class="form-control" maxlength="200" name="l_name" placeholder="Surname" required=""></p>
                  <p><input type="number" class="form-control" maxlength="10" id="contact" name="contact" maxlength="12" placeholder="Contact Number" required=""></p>
                  <p><input type="email" class="form-control" maxlength="200" name="email" placeholder="Email" required=""></p>
                  
                  <p>Period : 
                    <table>
                      <tr>
                        <td>
                         From : <select class="form-control" name="from" id="from_h" onchange="year()">
                            <?php

                            for ($i=1980; $i <=$yr; $i++) { 
                              ?>
                              <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                              <?php
                            }
                            ?>
                          </select>
                        </td>
                        <td>
                         To : <input type="text" class="form-control" name="to" id="to_h" disabled="">
                        </td>
                      </tr>
                    </table>
                  </p>
                  <p><input type="text" class="form-control" maxlength="500" name="products" placeholder="Products" required=""></p>
                  <p><input type="text" class="form-control" maxlength="500" name="company" placeholder="Company" required=""></p>
                  
                  <p><input type="text" class="form-control" maxlength="500" name="o_addr" placeholder="Office Address" ></p>
                  <p><input type="text" class="form-control" maxlength="500" name="r_addr" placeholder="Residential Address"></p>
                  <p>Birth Date: <input type="date" class="form-control" name="b_date" required=""></p>
                  <p><input type="text" class="form-control" maxlength="200" name="fb" placeholder="Facebook Link"></p>
                  <p><input type="text" class="form-control" maxlength="200" name="linkedin" placeholder="LinkedIn Link"></p>
                  <p><input type="text" class="form-control" maxlength="200" name="insta" placeholder="Instagram Link"></p>
                  <p><input type="number" class="form-control" maxlength="200" name="whatsapp" placeholder="Whatsapp Link"></p>
                  <p><input type="text" class="form-control" maxlength="200" name="web" placeholder="Website Link"></p>
                  <p><input type="text" class="form-control" maxlength="200" name="branch" value="<?php echo $name;?>" disabled=""></p>
                  <p><input type="text" class="form-control" maxlength="500" name="award" placeholder="Awards"></p>
                  <p><input type="text" class="form-control" maxlength="500" name="club" placeholder="Club"></p>
                  <p><input type="text" class="form-control" maxlength="500" name="keyword" placeholder="Add keyword"></p>
        
              </div>
              <button type="submit" class="btn btn-primary">Add Member</button>
            </form>

            <hr>
            <p><br></p>

            <div class="container">
              
            <h4>Delete Sector</h4>
              <div class="form-group">
                  <form method="post" action="action.php">
                    <input type="hidden" name="roll" value="del_honrary">

                    <table>
                    <tr>
                    <td><select class="form-control" name="del">

                      <?php
                      $qry = "SELECT * FROM `honrary` WHERE `branch`='$name'";
                      $run = mysqli_query($con,$qry);
                      $count = 0;

                      while ($data = mysqli_fetch_assoc($run)) {
                        $count++;
                        ?>
                        <option value="<?php echo $data['id'];?>"><?php echo $data['name'];?> <?php echo $data['surname'];?></option>
                        <?php
                      }
                      ?>
                    </select></td>
                     <td><button class="btn btn-danger">Delete</button></td>
                     </tr>
                    </table>
                  </form>                
              </div>
            </div>
        <div class="modal-footer">
          
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
        </div>
      </div>
    </div>
    </div>
</div>


 <!-- Model for Events -->
  <div class="modal fade" id="exampleModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Events</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h3>Add Images</h3>
          <hr>
            <form method="post" action="action.php" enctype="multipart/form-data">
              <div class="form-group">
              <input type="hidden" name="roll" value="add_event_img">
              <p>Event Image: <input type="file" class="form-control" name="file" required=""></p>
              <p><input type="text" class="form-control" maxlength="300" name="title" placeholder="Event Title" required=""></p>
              <p><textarea class="form-control" maxlength="500" name="description" placeholder="Short Description of Event..."></textarea></p>
              <p>Event in the Year : <select class="form-control" name="ei_yr">
                            <?php

                            for ($i=1980; $i <=$yr; $i++) { 
                              ?>
                              <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                              <?php
                            }
                            ?>
                          </select></p>

                          <p><input type="hidden" name="types" value="image"></p>
              
              <p><button type="submit" class="btn btn-primary btn-sm">Add Image</button></p>
        </div>
    </form>

    <p></p>

    <h3>Add Video</h3>
          <hr>
            <form method="post" action="action.php" enctype="multipart/form-data">
              <div class="form-group">
              <input type="hidden" name="roll" value="add_event_vid">
              <p><input type="text" class="form-control" maxlength="700" name="link" placeholder="Event Video Link" required=""></p>
              <p><input type="text" class="form-control" maxlength="300" name="title" placeholder="Event Title" required=""></p>
              <p>Event in the Year : <select class="form-control" name="ev_yr">
                            <?php

                            for ($i=1980; $i <=$yr; $i++) { 
                              ?>
                              <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                              <?php
                            }
                            ?>
                          </select></p>

                          <p><input type="hidden" name="types" value="video"></p>
              
              <p><button type="submit" class="btn btn-primary btn-sm">Add Video</button></p>
        </div>
    </form>

        <div class="modal-footer">
          
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>        
      </div>
    </div>
    </div>
</div>



 <!-- Model for Alumni Member -->
  <div class="modal fade" id="exampleModal13" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Alumni Member</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h3>Add Member</h3>
          <hr>
            <form method="post" action="action.php" enctype="multipart/form-data">
              <div class="form-group">
              <input type="hidden" name="roll" value="add_alumni">
              <p>Profile Image: <input type="file" class="form-control" name="file"></p>
              <p><input type="text" class="form-control" maxlength="100" id="f_name" name="f_name" placeholder="Name" required=""></p>
              <p><input type="text" class="form-control" maxlength="200" name="l_name" placeholder="Surname Name" required=""></p>
              <p><input type="text" class="form-control" maxlength="200" name="sector" placeholder="Sector" required=""></p>
              <p><input type="text" class="form-control" maxlength="800" name="company" placeholder="Company Name" required=""></p>
              <p><input type="text" class="form-control" maxlength="200" name="branch" value="<?php echo $name;?>" disabled=""></p>
              <p><button type="submit" id="m_btn" class="btn btn-primary btn-sm">Add Member</button></p>
        </div>
    </form>

    <div class="container">
        <h4>Delete Alumni Member</h4>

        <form method="post" action="action.php">
      <input type="hidden" name="roll" value="del_alumni_mem">
          <table >
            <tr>
            <td><select class="form-control" name="del">

        <?php
        $qry = "SELECT * FROM `alumni` WHERE `branch`='$name'";
        $run = mysqli_query($con,$qry);
        $count = 0;

        while ($data = mysqli_fetch_assoc($run)) {
          $count++;
          ?>
          <option value="<?php echo $data['id'];?>"><?php echo $data['name'];?> (<?php echo $data['company'];?>)</option>
          <?php
        }
        ?>
      </select></td>
       <td><button class="btn btn-danger">Delete</button></td>
       </tr>
      </table>
    </form>
    
    </div>
        <div class="modal-footer">
          
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>        
      </div>
    </div>
    </div>
</div>

</body>
</html>


<!-- Image Verifiy for About Us page -->
<script type="text/javascript">

  function verification_txt() {
    var txt = document.getElementById('abt_desc').value;

    var letters = /^'/;
    if(txt.match(letters))
    {
    alert("Don't Use ' in text!!!");
    document.getElementById("s_btn").disabled=true;
    }
    else{
      document.getElementById("s_btn").disabled=false;
    }
  }

  function year() {
    var one = document.getElementById('from_h').value;
    one = parseInt(one);

    one++;
    document.getElementById('to_h').value = one;
  }

	function file_check() {
		var fileUpload = document.getElementById("file");
		var reader = new FileReader();
        reader.readAsDataURL(fileUpload.files[0]); 
        reader.onload = function (e) {
            var image = new Image();
            image.src = e.target.result;
            image.onload = function () {
                var height = this.height;
                var width = this.width;
                if (height<width) {
                	alert('Height must be greater than the width!!!');
                	document.getElementById("s_btn").disabled=true;
                }
                else{
                	document.getElementById("s_btn").disabled=false;
                }
            }
        }
	}
</script>