<?php
	include 'dbcon.php';

	session_start();
	session_destroy();
	?>
	<script>
		window.open('../index.php','_self');
	</script>
	<?php
?>