<?php
session_start();
?>

<style type="text/css">
	.fixed-topx {
    position: fixed;
    top: 0px;
    right: 0;
    left: 0;
    z-index: 1030;
}
</style>

<section class="fixed-topx">
<section class="f-header">
	<div class="container">
		<div class="row">
			<div class="col">
				<span class="top-bar-margin">
					<div class="custom-control custom-radio custom-control-inline ">
					  <input type="radio" id="customRadioInline2" onclick="chennai()" name="customRadioInline1" class="custom-control-input">
					  <label class="custom-control-label" for="customRadioInline2">Chennai</label>
					</div>
					</span>

				<span class="top-bar-margin">
				<div class="custom-control custom-radio custom-control-inline">
				  <input type="radio" onclick="solapur()"  id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
				  <label class="custom-control-label" for="customRadioInline1">Solapur</label>
				</div>
				
				</span>
				
			</div>

			<div class="col text-center">
				<span>Welcome to Chennai Chapter</span>
			</div>

			<div class="col text-right">
				<a data-toggle="modal" data-target="#exampleModals1" href="#"><span class="top-bar-margin">Start A Chapter</span></a>
				<span class="top-bar-margin">|</span>

				
				<?php
				if (isset($_SESSION['uid'])) {
					if($_SESSION['admin']==0){
						?>
						<span class="dropdown show">
						  <a class="btn btn-danger dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    <?php echo $_SESSION['name'];?>
						  </a>

						  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
						    <a class="dropdown-item" href="profile.php">Profile</a>
						    <a class="dropdown-item" href="include/logout.php">Logout</a>
						  </div>
						</span>
						<?php
					}
					else{
						?>
						<script type="text/javascript">
							window.open('dashboard/index.php','_self');
						</script>
						<?php
					}
				}
				else{
					?>
					<span class="dropdown"><a href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span><button class="dropdown-toggle btn btn-success btn-sm">Login</button></a>

						<div class="dropdown-menu" style="padding: 15px;width: 200px; padding-bottom: 10px;">
						<form class="form-horizontal" action=""  method="post" accept-charset="UTF-8">
						  <p><input id="sp_uname" class="form-control login" type="text" name="email" placeholder="Phone no. or Email" required=""/></p>
						  <p><input id="sp_pass" class="form-control login" type="password" name="pass" placeholder="Password.." required=""/></p>
						  <p><input class="btn btn-primary" type="submit" name="submit" value="login" /></p>
						  <font color="red"><p id="warn"></p></font>
						</form>
					</div>
				
					<?php
				}
				?>
				</div>
				

				
				
					<script>
						//window.open('/dash/','_self');
					</script>
				
				<!-- <i>sdfsdfs</i><a style="padding-left: 5%;" href="/logout/"><button class="btn btn-danger btn-sm">Logout</button></a> -->

				<!-- <span class="glyphicon glyphicon-log-in top-bar-margin"><button class="dropdown-toggle btn btn-success btn-sm" data-toggle="dropdown">Login</button></span> -->
			</div>
		</div>
	</div>
</font>
</section>

<section>
	<nav class="navbar navbar-expand-lg navbar-light main-top w3-bar w3-border w3-card-4" style="background-color: white;">
	<div class="container-fluid">
  <a class="navbar-brand" href="#"><img src="assets/images/logo.jpg" height="70" width="100"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link a1" href="index.php"><b>Home</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link a1" href="about.php"><B>About Us</B></a>
      </li>
      <li class="nav-item">
        <a class="nav-link a1" href="member.php"><B>Buisness & Services</B></a>
      </li>
      <li class="nav-item">
        <a class="nav-link a1" href="honrary.php"><B>Honorary</B></a>
      </li>
      <li class="nav-item">
        <a class="nav-link a1" href="alumni.php"><B>Alumni</B></a>
	  </li>
	  <li class="nav-item">
        <a class="nav-link a1" href="event.php"><B>Events</B></a>
	  </li>
	  <li class="nav-item">
        <a class="nav-link a1" href="contact.php"><B>Contact</B></a>
      </li>
      <li class="nav-item">
        <a class="nav-link a1" data-toggle="modal" data-target="#exampleModalm1"><B>Become a Member</B></a>
      </li>
      
    </ul>
    <form class="form" method="post" action="search.php">
      <div class="container h-100">
      <div class="d-flex justify-content-center h-100">
        <div class="searchbar">
          <input class="search_input" type="text" name="search" placeholder="Search..." required="">
          <button style="background: none; border: none;" type="submit" class="search_icon"><i class="fas fa-search"></i></button>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>
</nav>
</section>
</section>




  <!-- Start A Chapter Modal -->
<div class="modal fade" id="exampleModals1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content chapter_body" style="width: 700px;">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Start A Chapter</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body chapter_body" style="width: 700px;">
		  <form action="m_request.php" method="post"> 
			  <table>
				  <div class="form-group">
				  <input type="hidden" name="roll" value="chapter">
				<tr><td>Name </td><td><input type="text" class="form-control chapter_form" name="name" maxlength="30" style="text-transform: uppercase; width: 460px;" required></td></tr>
				<tr><td>Surname </td><td><input type="text" class="form-control chapter_form" name="sname" style="text-transform: uppercase;  width: 460px;" required></td></tr>
				<tr><td>Native of </td><td><input type="text" class="form-control chapter_form" name="native" placeholder="Enter City  " maxlength="200" style="text-transform: uppercase; width: 460px;"></td></tr>
				<tr><td>Currently living in </td><td><input type="text" class="form-control chapter_form" name="living" placeholder="Enter Current City"  style="text-transform: uppercase; width: 460px;" required></td></tr>
				<tr><td>Business/ Profession Name </td><td><!-- <input type="text" class="form-control chapter_form" name="buisness" style="text-transform: uppercase; width: 460px;" required> -->
					<textarea  class="form-control chapter_form" name="buisness" style="text-transform: uppercase; width: 460px;" required></textarea></td></tr>

				<tr><td>City You are interested for new chapter </td><td><input type="text" class="form-control chapter_form" name="city" placeholder="Enter city name" style="text-transform: uppercase; width: 460px;" required></td></tr>
				<tr><td>You are interested to start because </td><td><!-- <input type="text" class="form-control chapter_form" name="reason" placeholder="Enter your reason" style="text-transform: uppercase; width: 460px;" required> -->
					<textarea class="form-control chapter_form" name="reason" placeholder="Enter your reason" style="text-transform: uppercase; width: 460px;" required></textarea>
				</td></tr>
				<tr><td>Maheswari population approx in proposed city </td><td><input type="number" class="form-control chapter_form" name="m_population" style=" width: 460px;"></td></tr>
				<tr><td>Associations/ Groups active for Maheswaris </td><td><input type="text" class="form-control chapter_form" name="actives" placeholder="Enter Text" style="text-transform: uppercase; width: 460px;"></td></tr>
				<tr><td>Mcircle Members you know </td><td>
					<!-- <input type="text" name="m_member" class="form-control chapter_form" placeholder="Enter member in Mcircle name" style="text-transform: uppercase; width: 460px;"> -->
					<textarea name="m_member" class="form-control chapter_form" placeholder="Enter member in Mcircle name" style="text-transform: uppercase; width: 460px;"></textarea>
				</td></tr>
				<tr><td>How you reached us </td><td>
					<!-- <input type="text" name="know" class="form-control chapter_form" style="text-transform: uppercase; width: 460px;"> -->
					<textarea name="know" class="form-control chapter_form" style="text-transform: uppercase; width: 460px;"></textarea>
				</td></tr>
				<tr><td>Other clubs you are member of </td><td>
					<!-- <input type="text" class="form-control chapter_form" name="club" style="text-transform: uppercase; width: 460px;"> -->
					<textarea input type="text" class="form-control chapter_form" name="club" style="text-transform: uppercase; width: 460px;"></textarea>
				</td></tr>
			  </table>	
			
			  <input type="hidden" name="user" value="Chennai">
		</div>
		<div class="modal-footer">
			<button type="submit" class="btn btn-primary">SUBMIT</button>
		</form>
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		</div>
	  </div>
	</div>
	</div>
  </div>




  <!-- Become A Member Modal -->
<div class="modal fade" id="exampleModalm1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content chapter_body" style="width: 700px;">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Become A Member</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body chapter_body" style="width: 700px;">
		  <form action="m_request.php" method="post">
			<input type="hidden" name="roll" value="become_member">
			<input type="hidden" name="branch" value="Chennai">
			  <table>
				  <div class="form-group">
				<tr><td>Name </td><td><input type="text" name="name" class="form-control chapter_form" placeholder="Enter your name" style="text-transform: uppercase; width: 460px;" required></td></tr>
				<tr><td>Surname </td><td><input type="text" name="sname" class="form-control chapter_form" placeholder="Enter your Surname" style="text-transform: uppercase; width: 460px;" required></td></tr>
				<tr><td>Native of </td><td><input type="text" name="native" class="form-control chapter_form" placeholder="Enter Native of  " style="text-transform: uppercase; width: 460px;"></td></tr>
				<tr><td>Currently living in </td><td><input type="text" name="living" class="form-control chapter_form" placeholder="Currently living in" style="text-transform: uppercase; width: 460px;" required></td></tr>
				<tr><td>Buisness/ Profession Name </td><td>
					<textarea name="buisness" class="form-control chapter_form" placeholder="Enter Buisness/ Profession Name" style="text-transform: uppercase; width: 460px;" required maxlength="400"></textarea>
				</td></tr>
				<tr><td>You are interested to join because </td><td>
					<textarea  class="form-control chapter_form" name="reason" placeholder="You are interested to start because" style="text-transform: uppercase; width: 460px;" ></textarea></td></tr>

				<tr><td>Products/ Services </td><td>

					<textarea name="product" class="form-control chapter_form" placeholder="Enter Products/ Services" style="text-transform: uppercase; width: 460px;"></textarea></td></tr>

				<tr><td>Year into Buisness </td><td>
					<input type="number" name="years" class="form-control chapter_form" placeholder="Maheswari population approx in proposed city" style=" width: 460px;" >
				</td></tr>

				<tr><td>Date of Birth </td><td>
					<input type="date" name="birth" class="form-control chapter_form" placeholder="Groups active for Maheswaris" style=" width: 460px;" required>
				 </td></tr>
				<tr><td>Mcircle Members you know </td><td>
					<textarea class="form-control chapter_form" name="m_member" placeholder="Mcircle Members you know" style="text-transform: uppercase; width: 460px;"></textarea></td></tr>

				<tr><td>How you reached us </td><td>
					<textarea  name="know" class="form-control chapter_form" placeholder="How you reached us" style="text-transform: uppercase; width: 460px;"></textarea></td></tr>

				<tr><td>Other clubs you are member of </td><td>
					<textarea class="form-control chapter_form" name="club" placeholder="Other clubs you are member of" style="text-transform: uppercase; width: 460px;"></textarea></td></tr>
			  </table>	
			  <input type="hidden" name="user" value="Chennai">
		</div>
		<div class="modal-footer">
			<button type="submit" name="submit1" class="btn btn-primary">SUBMIT</button>
		</form>
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		</div>
		</div>
	  </div>
	</div>



<?php
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
			document.getElementById('warn').innerHTML="Incorrect Email or Password!";
		</script>
		<?php
	}
}

?>


