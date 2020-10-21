<!DOCTYPE html>
<html>
<head>
	<title>Buisness and Services - Mcircle</title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="include/css/style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>

	<!-- Header -->
	<?php
   include "include/headers/c_header.php";
   include "include/dbcon.php";
  ?>


<section class="container-fluid" style="margin-top: 200px;">
  <div align="right">
    <div class="filter" style="max-width: 150px;">
      <p align="left"><span class="fas fa-filter"></span> Filter</p>
      <select class="form-control" onchange="fetchings(this.value)">
        <option value="all">All Member</option>
        <?php
        $qry = "SELECT * FROM `sector` WHERE `branch`='Chennai'";
        $run = mysqli_query($con,$qry);

        while ($data = mysqli_fetch_assoc($run)) {
          ?>
          <option value="<?php echo $data['title']; ?>"><?php echo $data['title']; ?></option>
          <?php
          }
          ?>
      </select>
    </div>
  </div>
    
    <script type="text/javascript">
      function filter(fl) {
        alert(fl);
      }
    </script>

  <p><br></p>
  <div class="container">
    <center>
    <div class="row" id="members">
      <?php
        $qry = "SELECT * FROM `member` WHERE `branch`='Chennai' AND `admin`='0' AND `sector` LIKE 'all%' ORDER BY `first_name`";
        $run = mysqli_query($con,$qry);

        while ($mem = mysqli_fetch_assoc($run)) {
          ?>
          <div class="col-md-6 col-sm-6">
            <div class="member-card">
              <div class="row">

                <div class="col-sm-6 col-md-6">
                  <p><br><img align="center" src="dashboard/<?php echo $mem['images'];?>" style="max-width: 200px; max-height: 200px; border-radius: 10px;"></p>
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
                  <h3 align="left"><br><?php echo $mem['first_name'];?> <?php echo $mem['last_name'];?></h3>
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
          <a href="<?php echo $mem['facebook'];?>" target="_blank"><img src="assets/images/fb.png" height="30" width="30"></a> 

          <a href="<?php echo $mem['instagram'];?>" target="_blank"><img src="assets/images/insta.png" height="30" width="30"></a>

          <a href="<?php echo $mem['whatsapp'];?>" target="_blank"><img src="assets/images/whatsapp.png" height="30" width="30"></a>

          <a href="<?php echo $mem['linkedin'];?>" target="_blank"><img src="assets/images/linkedin.png" height="30" width="30"></a>

          <a href="<?php echo $mem['website'];?>" target="_blank"><img src="assets/images/web.png" height="30" width="30"></a>
         
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
      ?>
    </div>
    </center>
  </div>
</section>


  <?php
  include "include/footer/footer.php";
  ?>


<script type="text/javascript">
  function fetchings(sector) {
    $(document).ready(function() {
        $.ajax({
          url: "m_sectors.php",
          type: "POST",
          data: {sec : sector},

          success: function(data) {
            $("#members").html(data);
          }
        }); 
    });
  }

  
</script>
</body>
</html>