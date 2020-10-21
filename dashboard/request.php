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
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="request.php">Requests</a>
      </li>
      <li class="nav-item">
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

<p><br></p>
<p><br></p>

<section class="container-fluid">
  <h2 class="display-5">Become A Member</h2>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sr. No.</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Native</th>
      <th scope="col">Current City</th>
      <th scope="col">Buisness</th>
      <th scope="col">Reason</th>
      <th scope="col">Products</th>
      <th scope="col">Year in Buisness</th>
      <th scope="col">Birth Date</th>
      <th scope="col">Known Member</th>
      <th scope="col">How Reached Us</th>
      <th scope="col">Club</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $qry = "SELECT * FROM `b_member` WHERE `branch`='$name'";
    $run = mysqli_query($con,$qry);
    $count = 0;
    while ($data = mysqli_fetch_assoc($run)) {
      $count++;
      ?>
      <tr>
      <th scope="row"><?php echo $count;?></th>
      <td><?php echo $data['first_name'];?></td>
      <td><?php echo $data['last_name'];?></td>
      <td><?php echo $data['native'];?></td>
      <td><?php echo $data['cur_city'];?></td>
      <td><?php echo $data['buisness'];?></td>
      <td><?php echo $data['reason'];?></td>
      <td><?php echo $data['products'];?></td>
      <td><?php echo $data['buisness_year'];?></td>
      <td><?php echo $data['b_date'];?></td>
      <td><?php echo $data['known_member'];?></td>
      <td><?php echo $data['reached'];?></td>
      <td><?php echo $data['club'];?></td>
    </tr>
      <?php
    }

    ?>
    
  </tbody>
</table>

<p><br></p>
<p><br></p>

<!-- Chapter Data -->

<h2 class="display-5">Start Chapter</h2>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sr. No.</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Native</th>
      <th scope="col">Living In</th>
      <th scope="col">Buisness</th>
      <th scope="col">City</th>
      <th scope="col">Reason</th>
      <th scope="col">Population</th>
      <th scope="col">Actives</th>
      <th scope="col">Known Member</th>
      <th scope="col">How Reached Us</th>
      <th scope="col">Club</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $qry = "SELECT * FROM `chapter` WHERE `branch`='$name'";
    $run = mysqli_query($con,$qry);
    $count = 0;
    while ($data = mysqli_fetch_assoc($run)) {
      $count++;
      ?>
      <tr>
      <th scope="row"><?php echo $count;?></th>
      <td><?php echo $data['name'];?></td>
      <td><?php echo $data['surname'];?></td>
      <td><?php echo $data['native'];?></td>
      <td><?php echo $data['living'];?></td>
      <td><?php echo $data['buisness'];?></td>
      <td><?php echo $data['city'];?></td>
      <td><?php echo $data['reason'];?></td>
      <td><?php echo $data['population'];?></td>
      <td><?php echo $data['actives'];?></td>
      <td><?php echo $data['member'];?></td>
      <td><?php echo $data['know'];?></td>
      <td><?php echo $data['club'];?></td>
    </tr>
      <?php
    }

    ?>
    
  </tbody>
</table>
</section>
</body>
</html>


