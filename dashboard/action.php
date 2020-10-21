<?php
	
	//Admin Info...
	session_start();
	$admin = $_SESSION['name'];


	
	include '../include/dbcon.php';
	$roll = $_POST['roll']; 	//Here identifying the values for...
	
	//data Inputs for Theme
	if ($roll == 'theme') {
		$line = $_POST['line'];
		$uploader = $_POST['uploader'];
		
		if ($uploader=='Chennai')
			$qry = "UPDATE `theme` SET `line`='$line',`uploader`='$uploader' WHERE 	`id`=1";
		else
			$qry = "UPDATE `theme` SET `line`='$line',`uploader`='$uploader' WHERE 	`id`=2";

		$run = mysqli_query($con,$qry);

		?>
		<script>
			window.open('index.php','_self');
		</script>
		<?php
	}


	//Add project_icon with data for --------skill_Plus:
	if ($roll=='skill_plus') {
		$text = $_POST['text'];
		$uploader = $_POST['uploader'];
		$content = $_POST['content'];

		$qry = "UPDATE `project_icon` SET `text`='$text' WHERE `id`=1";
		$run = mysqli_query($con,$qry);

		?>
		<script>
			window.open('index.php','_self');
		</script>
		<?php
	}

	//Add project_icon with data--------------MBS:
	if ($roll=='mbs') {
		$text = $_POST['text'];
		$uploader = $_POST['uploader'];
		$content = $_POST['content'];

		$qry = "UPDATE `project_icon` SET `text`='$text' WHERE `id`=2";
		$run = mysqli_query($con,$qry);
		?>
		<script>
			window.open('index.php','_self');
		</script>
		<?php
	}

	//Add project_icon with data---------------Profile_Plus:
	if ($roll=='profile_plus') {
		$text = $_POST['text'];
		$uploader = $_POST['uploader'];
		$content = $_POST['content'];

		$img=$_FILES['file'];
		$filename=$img['name'];
		$fileerror=$img['error'];
			$filetmp=$img['tmp_name'];

			$fileext = explode('.',$filename);
			$filechck= strtolower(end($fileext));

			$fileet = array('png','jpg','jpeg');

			if(in_array($filechck,$fileet))
			{
				$defile='upload/project_images/'.$filename;
				move_uploaded_file($filetmp,$defile);
			}

		$qry = "UPDATE `project_icon` SET `text`='$text',`images`='$defile' WHERE `id`=3";
		$run = mysqli_query($con,$qry);
		?>
		<script>
			window.open('index.php','_self');
		</script>
		<?php
	}

	if ($roll=='profile_plus_img') {
		$types = $_POST['content'];

		$img=$_FILES['file'];
		$filename=$img['name'];
		$fileerror=$img['error'];
			$filetmp=$img['tmp_name'];

			$fileext = explode('.',$filename);
			$filechck= strtolower(end($fileext));

			$fileet = array('png','jpg','jpeg');

			if(in_array($filechck,$fileet))
			{
				$defile='upload/project_images/'.$filename;
				move_uploaded_file($filetmp,$defile);
			}

		$qry = "INSERT INTO `profile_plus`(`image`, `branch`, `types`) VALUES ('$defile','$admin','$types')";
		$run = mysqli_query($con,$qry);
		?>
		<script>
			window.open('index.php','_self');
		</script>
		<?php
	}

	//Add project_icon with data--------------MBS:
	if ($roll=='profile_plus_vid') {
		$text = $_POST['text'];
		$types = $_POST['content'];

		$qry = "INSERT INTO `profile_plus`(`link`, `branch`, `types`) VALUES ('$text','$admin','$types')";
		$run = mysqli_query($con,$qry);
		?>
		<script>
			window.open('index.php','_self');
		</script>
		<?php
	}



	//Add Member Data
	if ($roll=='add_member') {
		$f_name = $_POST['f_name'];
		$l_name = $_POST['l_name'];
		$email = $_POST['email'];
		$pass = md5('abcd1234');
		$keyword = $_POST['keyword'];
		$contact = $_POST['contact'];
		$sector = $_POST['sector'];
		$sector = "all".", ".$sector[0].", ".$sector[1].", ".$sector[2].", ".$sector[3].", ".$sector[4].", ".$sector[5].", ".$sector[6].", ".$sector[7];
		$products = $_POST['products'];
		$company = $_POST['company'];
		$keyword = $keyword.", ".$f_name." ".$l_name.", ".$company.", ".$products;
		//desc
		$o_addr = $_POST['o_addr'];
		$f_addr = $_POST['f_addr'];
		$r_addr = $_POST['r_addr'];
		$b_date = $_POST['b_date'];
		$fb = $_POST['fb'];
		$linkedin = $_POST['linkedin'];
		$whatsapp = $_POST['whatsapp'];
		$insta = $_POST['insta'];
		$web = $_POST['web'];
		$award = $_POST['award'];
		$club = $_POST['club'];

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


 		$qry1="INSERT INTO `member`(`first_name`, `last_name`, `email`, `password`, `contact`, `images`, `sector`, `products`, `company`, `o_address`, `f_address`, `r_address`, `b_date`, `facebook`, `whatsapp`, `linkedin`, `instagram`, `website`, `award`, `keyword`, `club`,`branch`) VALUES ('$f_name','$l_name','$email','$pass','$contact','$defile','$sector','$products','$company','$o_addr','$f_addr','$r_addr','$b_date','$fb','$whatsapp','$linkedin','$insta','$web','$award','$keyword','$club','$admin')";
		$run1 = mysqli_query($con,$qry1);

		if ($run1==true) {
			
		}
		else{
			?>
			<script>
				alert("Don't use ' in Theme line or description!!!");
			</script>
			<?php
		}

		?>
		<script>
			window.open('index.php','_self');
		</script>
		<?php
	}


	// add links
	if ($roll=='links') {
		$types = $_POST['type'];
		$link = $_POST['link'];


		$qry = "UPDATE `links` SET `link`='$link' WHERE `id`='$types'";
		$run = mysqli_query($con,$qry);
		?>
		<script>
			window.open('index.php','_self');
		</script>
		<?php
	}

	//add new links
	if ($roll=='link_add') {
		$k_link = $_POST['link_key'];
		$v_link = $_POST['link_value'];


		$qry = "INSERT INTO `links`(`title`, `link`,`branch`) VALUES ('$k_link','$v_link','$admin')";
		$run = mysqli_query($con,$qry);
		?>
		<script>
			window.open('index.php','_self');
		</script>
		<?php
	}


	// add Testimonial Videos
	if ($roll=='t_video') {
		$title = $_POST['title'];
		$link = $_POST['link'];
		$uploader = $_POST['uploader'];


		$qry = "INSERT INTO `t_video`(`title`, `link`, `uploader`) VALUES ('$title','$link','$uploader')";
		$run = mysqli_query($con,$qry);
		?>
		<script>
			window.open('index.php','_self');
		</script>
		<?php
	}


	// Delete Testimonial Videos
	if ($roll=='t_del') {
		$id = $_POST['del'];


		$qry = "DELETE FROM `t_video` WHERE `id`='$id'";
		$run = mysqli_query($con,$qry);
		?>
		<script>
			window.open('index.php','_self');
		</script>
		<?php
	}


	// Add story for member
	if ($roll=='add_story') {
		$member = $_POST['member'];
		$story = $_POST['story'];

		$qry = "INSERT INTO `story`(`member`, `story`, `branch`) VALUES ('$member','$story','$admin')";
		$run = mysqli_query($con,$qry);
		?>
		<script>
			window.open('index.php','_self');
		</script>
		<?php
	}


	// Add about us description
	if ($roll=='add_desc') {
		$about = $_POST["about"];
		$img=$_FILES['file'];
		$filename=$img['name'];

		if(empty($filename)){
			
			
		}
		else{
			$fileerror=$img['error'];
			$filetmp=$img['tmp_name'];

			$fileext = explode('.',$filename);
			$filechck= strtolower(end($fileext));

			$fileet = array('png','jpg','jpeg');

			if(in_array($filechck,$fileet))
			{
				$defile='upload/about/'.$filename;
				move_uploaded_file($filetmp,$defile);
			}
		}


		if ($admin=='Chennai'){
			$qry = "UPDATE `about` SET `image`='$defile',`text`='$about',`uploader`='$admin' WHERE `id`='1'";
			$run = mysqli_query($con,$qry);
		}
		elseif($admin=='Solapur'){
			$qry = "UPDATE `about` SET `image`='$defile',`text`='$about',`uploader`='$admin' WHERE `id`='2'";
			$run = mysqli_query($con,$qry);
		}
		else{
			?>
			<script type="text/javascript">
				alert("Dont Use ' in text!!!");
				window.open('index.php','_self');
			</script>
			<?php
		}


		
		?>
		<script>
			window.open('index.php','_self');
		</script>
		<?php
	}


	// Add Current Member
	if ($roll=='add_cur_mem') {
		$member = $_POST['member'];
		$desc = $_POST['desc'];
		$desig = $_POST['designation'];

		$qry = "INSERT INTO `cur_member`(`name`, `designation`,`description`, `branch`) VALUES ('$member','$desig','$desc','$admin')";
		$run = mysqli_query($con,$qry);
		?>
		<script>
			window.open('index.php','_self');
		</script>
		<?php
	}


	// Delete Current  Member
	if ($roll=='del_cur_mem') {
		$id = $_POST['del'];


		$qry = "DELETE FROM `cur_member` WHERE `id`='$id'";
		$run = mysqli_query($con,$qry);
		?>
		<script>
			window.open('index.php','_self');
		</script>
		<?php
	}
	


	// Add past_president
	if ($roll=='add_president') {
		$president = $_POST['president'];
		$d_from = $_POST['from'];
		$d_to = $_POST['to'];


		$name = explode("_",$president);

		//Verify this member
		if ($name[2]=='Member'){
			$v_qry = "SELECT * FROM `member` WHERE `branch`='$admin' AND `first_name`='$name[0]' AND `last_name`='$name[1]'";

			$qry = "INSERT INTO `p_president`(`name`, `y_from`, `y_to`, `branch`) VALUES ('$president','$d_from','$d_to','$admin')";
			$run = mysqli_query($con,$qry);
			?>
			<script>
				window.open('index.php','_self');
			</script>
			<?php
		}

		elseif ($name[2]=='Alumni'){
			$v_qry = "SELECT * FROM `alumni` WHERE `branch`='$admin' AND `first_name`='$name[0]' AND `last_name`='$name[1]'";

				$qry = "INSERT INTO `p_president`(`name`, `y_from`, `y_to`, `branch`) VALUES ('$president','$d_from','$d_to','$admin')";
			$run = mysqli_query($con,$qry);
			?>
			<script>
				window.open('index.php','_self');
			</script>
			<?php
		}
		else{
			?>
			<script type="text/javascript">
				alert("Member doesn't exists!!");
				window.open('index.php','_self');
			</script>
			<?php
		}
	}

	// Delete Past President  
	if ($roll=='del_president') {
		$id = $_POST['del'];


		$qry = "DELETE FROM `p_president` WHERE `id`='$id'";
		$run = mysqli_query($con,$qry);

		$qry1 = "DELETE FROM `p_member` WHERE `president`='$id'";
		$run1 = mysqli_query($con,$qry1);
		?>
		<script>
			window.open('index.php','_self');
		</script>
		<?php
	}



	// Add Alumni Member
	if ($roll=='add_alumni') {
		$name = $_POST['f_name'];
		$sname = $_POST['l_name'];
		$company = $_POST['company'];
		$sector = $_POST['sector'];

		$img=$_FILES['file'];
		$filename=$img['name'];

		if(empty($filename)){
			$defile='upload/alumni/default_person.png';
		}
		else{
			$fileerror=$img['error'];
			$filetmp=$img['tmp_name'];

			$fileext = explode('.',$filename);
			$filechck= strtolower(end($fileext));

			$fileet = array('png','jpg','jpeg');

			if(in_array($filechck,$fileet))
			{
				$defile='upload/alumni/'.$filename;
				move_uploaded_file($filetmp,$defile);
			}
		}


		$qry = "INSERT INTO `alumni`(`images`, `first_name`, `last_name`, `sector`, `company`, `branch`) VALUES ('$defile','$name','$sname','$sector','$company','$admin')";
		$run = mysqli_query($con,$qry);
		?>
		<script>
			window.open('index.php','_self');
		</script>
		<?php
	}

	// Delete Alumni Member
	if ($roll=='del_alumni_mem') {
		$id = $_POST['del'];


		$qry = "DELETE FROM `alumni` WHERE `id`='$id'";
		$run = mysqli_query($con,$qry);
		?>
		<script>
			window.open('index.php','_self');
		</script>
		<?php
	}

	//President Members
	if ($roll=='president_member') {
		$president = $_POST['under_president'];
		$name = $_POST['pre_member'];
		$desig = $_POST['m_designation'];

		for ($i=0; $i < 13; $i++) { 
			$nm = $name[$i];
			$des = $desig[$i];
			$qry = "INSERT INTO `p_member`(`president`, `members`, `designation`) VALUES ('$president','$nm','$des')";
			$run = mysqli_query($con,$qry);
		}
		
		?>
		<script>
			window.open('index.php','_self');
		</script>
		<?php
		}


	// Add Sector
	if ($roll=='add_sector') {
		$title = $_POST['sector'];

		$img=$_FILES['file'];
		$filename=$img['name'];

		if(empty($filename)){
			
		}
		else{
			$fileerror=$img['error'];
			$filetmp=$img['tmp_name'];

			$fileext = explode('.',$filename);
			$filechck= strtolower(end($fileext));

			$fileet = array('png','jpg','jpeg');

			if(in_array($filechck,$fileet))
			{
				$defile='upload/sector/'.$filename;
				move_uploaded_file($filetmp,$defile);
			}
		}


		$qry = "INSERT INTO `sector`(`title`, `image`, `branch`) VALUES ('$title','$defile','$admin')";
		$run = mysqli_query($con,$qry);
		?>
		<script>
			window.open('index.php','_self');
		</script>
		<?php
	}


	// Delete Sector
	if ($roll=='del_sector') {
		$id = $_POST['del'];


		$qry = "DELETE FROM `sector` WHERE `id`='$id'";
		$run = mysqli_query($con,$qry);
		?>
		<script>
			window.open('index.php','_self');
		</script>
		<?php
	}



	//Add Honrary Member Data
	if ($roll=='add_honrary') {
		$f_name = $_POST['f_name'];
		$l_name = $_POST['l_name'];
		$from = $_POST['from'];
		$to = $from;
		$to++;
		$period = $from."-".$to;
		$email = $_POST['email'];
		$keyword = $_POST['keyword'];
		$contact = $_POST['contact'];
		$products = $_POST['products'];
		$company = $_POST['company'];
		$keyword = $keyword.", ".$f_name." ".$l_name.", ".$company.", ".$products;
		$o_addr = $_POST['o_addr'];
		$r_addr = $_POST['r_addr'];
		$b_date = $_POST['b_date'];
		$fb = $_POST['fb'];
		$linkedin = $_POST['linkedin'];
		$whatsapp = $_POST['whatsapp'];
		$insta = $_POST['insta'];
		$web = $_POST['web'];
		$award = $_POST['award'];
		$club = $_POST['club'];

		$img=$_FILES['file'];
		$filename=$img['name'];

		if(empty($filename)){
			$defile = 'upload/honrary/default_person.png';
			
		}
		else{
			$fileerror=$img['error'];
			$filetmp=$img['tmp_name'];

			$fileext = explode('.',$filename);
			$filechck= strtolower(end($fileext));

			$fileet = array('png','jpg','jpeg');

			if(in_array($filechck,$fileet))
			{
				$defile='upload/honrary/'.$filename;
				move_uploaded_file($filetmp,$defile);
			}
		}


 		$qry1="INSERT INTO `honrary`(`name`, `surname`, `email`, `contact`, `product`, `company`, `o_address`, `r_address`, `b_date`, `facebook`, `insta`, `whatsapp`, `linkedin`, `web`, `award`, `club`, `image`, `keyword`,`branch`,`period`) VALUES ('$f_name','$l_name','$email','$contact','$products','$company','$o_addr','$r_addr','$b_date','$fb','$insta','$whatsapp','$linkedin','$web','$award','$club','$defile','$keyword','$admin','$period')";
		$run1 = mysqli_query($con,$qry1);

		if ($run1==true) {
			
		}
		else{
			?>
			<script>
				alert("Don't use ' in Theme line or description!!!");
			</script>
			<?php
		}

		?>
		<script>
			window.open('index.php','_self');
		</script>
		<?php
	}

	// Delete Honrary Member
	if ($roll=='del_honrary') {
		$id = $_POST['del'];


		$qry = "DELETE FROM `honrary` WHERE `id`='$id'";
		$run = mysqli_query($con,$qry);
		?>
		<script>
			window.open('index.php','_self');
		</script>
		<?php
	}


	// Add Image for Event
	if ($roll=='add_event_img') {
		$title = $_POST['title'];
		$desc = $_POST['description'];
		$yr = $_POST['ei_yr'];

		$img=$_FILES['file'];
		$filename=$img['name'];

		if(empty($filename)){
			
		}
		else{
			$fileerror=$img['error'];
			$filetmp=$img['tmp_name'];

			$fileext = explode('.',$filename);
			$filechck= strtolower(end($fileext));

			$fileet = array('png','jpg','jpeg');

			if(in_array($filechck,$fileet))
			{
				$defile='upload/event/'.$filename;
				move_uploaded_file($filetmp,$defile);
			}
		}


		$qry = "INSERT INTO `event`(`image`, `title`, `texts`, `types`, `year`, `branch`) VALUES ('$defile','$title','$desc','image','$yr','$admin')";
		$run = mysqli_query($con,$qry);
		?>
		<script>
			window.open('index.php','_self');
		</script>
		<?php
	}


	// Add Video for Event
	if ($roll=='add_event_vid') {
		$title = $_POST['title'];
		$link = $_POST['link'];
		$yr = $_POST['ev_yr'];


		$qry = "INSERT INTO `event`(`link`, `title`, `types`, `year`, `branch`) VALUES ('$link','$title','video','$yr','$admin')";
		$run = mysqli_query($con,$qry);
		?>
		<script>
			window.open('index.php','_self');
		</script>
		<?php
	}

session_write_close();
?>



