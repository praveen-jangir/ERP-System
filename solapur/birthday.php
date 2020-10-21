<!DOCTYPE html>
<html>
<head>
	<title>Home - Mcircle</title>

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

  
<section class="container" style="margin-top: 300px;">
  <div class="row">
      <?php
      $qry = "SELECT * FROM `member` WHERE `admin`='0'";
      $run = mysqli_query($con,$qry);

      $count=0;
      while ($data = mysqli_fetch_assoc($run)) {
        if ($count<5) {
          

          $dates = explode('-',$data['b_date']);


          if ((date("m")==$dates[1] && date("d")==$dates[2])==true) {
            $count++;
          ?>

          <div class="col-md-3 col-sm-3">
              <div class="w3-card-4 card card-birth"  style="height: 370px; max-width: 200px;">
                <div class="card-img"><div class="text-block"></div>
                <img src="dashboard/<?php echo $data['images']; ?>" height="200" width="200"></div>
                <center>
                  <p></p>
                <div class="card-title text-secondary"><b><?php echo $data['first_name']; ?> <?php echo $data['last_name']; ?></b></div>
                <div class="card-text title text-dark"> <?php echo $data['branch']; ?> 
                <p><img src="assets/images/today.png" height="80" style="width: 170px; padding-right: 0px;"></p>
                </div>
                </center>
                <p></p>
              </div>
            </div>
          <?php
          }
        }
      }




      $qry1 = "SELECT * FROM `member` WHERE `admin`='0'";
      $run1 = mysqli_query($con,$qry1);
      while ($data = mysqli_fetch_assoc($run1)) {
        if ($count<5) {
          
          $dates = explode('-',$data['b_date']);
          if (((date("m")==$dates[1] && date("d")<$dates[2]) || (date("m")<$dates[1]))==true) {
            $count++;
            ?>
            <div class="col-md-3 col-sm-3">
              <div class="w3-card-4 card card-birth"  style="height: 370px; max-width: 200px;">
                <div class="card-img"><div class="text-block"></div>
                <img src="dashboard/<?php echo $data['images']; ?>" height="200" width="200"></div>
                <center>
                  <p></p>
                <div class="card-title text-secondary"><b><?php echo $data['first_name']; ?> <?php echo $data['last_name']; ?></b></div>
                <div class="card-text title text-dark"> <?php echo $data['branch']; ?> 
                </div>
                </center>
                <p></p>
              </div>
            </div>
            <?php
          }
        }
      }
      ?>

    </div>
</section>


  <?php
  include "include/footer/footer.php";
  ?>
</body>
</html>