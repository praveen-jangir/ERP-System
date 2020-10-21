<?php
//Become a Member
include "include/dbcon.php";

if ($_POST['roll']=='become_member') {
	$name = strtoupper($_POST['name']);
	$sname = strtoupper($_POST['sname']);
	$native = strtoupper($_POST['native']);
	$living = strtoupper($_POST['living']);
	$buisness = strtoupper($_POST['buisness']);
	$reason = strtoupper($_POST['reason']);
	$product = strtoupper($_POST['product']);
	$years = $_POST['years'];
	$birth = $_POST['birth'];
	$m_member = strtoupper($_POST['m_member']);
	$know = strtoupper($_POST['know']);
	$club = strtoupper($_POST['club']);


	$qry1 = "INSERT INTO `b_member`(`branch`, `first_name`, `last_name`, `native`, `cur_city`, `buisness`, `reason`, `products`, `buisness_year`, `b_date`, `known_member`, `reached`, `club`) VALUES ('Chennai','$name','$sname','$native','$living','$buisness','$reason','$product','$years','$birth','$m_member','$know','$club')";

	$run1 = mysqli_query($con,$qry1);

	if ($run1==true) {
		?>
		<script type="text/javascript">
			alert('Your request is submited.');
			window.open('index.php','_self');
		</script>
		<?php
	}
}

if ($_POST['roll']=='chapter') {
	$name = strtoupper($_POST['name']);
	$sname = strtoupper($_POST['sname']);
	$native = strtoupper($_POST['native']);
	$living = strtoupper($_POST['living']);
	$buisness = strtoupper($_POST['buisness']);
	$city = strtoupper($_POST['city']);
	$reason = strtoupper($_POST['reason']);
	$m_population = $_POST['m_population'];
	$actives = strtoupper($_POST['actives']);
	$m_member = strtoupper($_POST['m_member']);
	$know = strtoupper($_POST['know']);
	$club = strtoupper($_POST['club']);

	$qry = "INSERT INTO `chapter`(`branch`, `name`, `surname`, `native`, `living`, `buisness`, `city`, `reason`, `population`, `actives`, `member`, `know`, `club`) VALUES ('Chennai','$name','$sname','$native','$living','$buisness','$city','$reason','$m_population','$actives','$m_member','$know','$club')";
	$run = mysqli_query($con,$qry);
	if ($run==true) {
		?>
		<script type="text/javascript">
			alert('Your request is submited.');
			window.open('index.php','_self');
		</script>
		<?php
	}
}

else{
	?>
		<script type="text/javascript">
			window.open('index.php','_self');
		</script>
		<?php
}

?>