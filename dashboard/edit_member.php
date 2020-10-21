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
      <li class="nav-item">
        <a class="nav-link" href="request.php">Requests</a>
      </li>
      <li class="nav-item active">
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

  <div class="container edit_member">
    <div class="member_data">
      <p align="center" class="display-4 text-secondary">Select Member</p>

      <p><br></p>
      <p align="center"><button class="btn btn-primary" data-toggle="modal" data-target="#edit_member_btn" style="width: 200px; border-radius: 25px;">Edit Member</button></p>
    </div>
  </div>
</section>

<!-- Modal for edit member -->
      <div class="modal fade" id="edit_member_btn" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Select Member</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
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

                    <p><input list="s_members" class="form-control" name="member" id="member_name" placeholder="Select Member" required="">

                      <input type="hidden" name="roll" id="form_roll" value="edit">
                        </p>
            </div>
            <div class="modal-footer">
              <button type="button" onclick="m_search()" class="btn btn-primary">Edit</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>


<script type="text/javascript">
  function m_search() {
    var member_id = document.getElementById('member_name').value;
    var roll = document.getElementById('form_roll').value;

      $(document).ready(function() {
        $.ajax({
          url: "admin_edit.php",
          type: "POST",
          data: {id : member_id,roll : roll},

          success: function(data) {
            $(".member_data").html(data);
          }
        }); 
    });
  }
</script>
</body>
</html>


