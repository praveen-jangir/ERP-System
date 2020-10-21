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
  <center>
      <div class="row">
      <?php
      $qry = "SELECT * FROM `t_video` WHERE `uploader`='Chennai' ORDER BY `id` DESC";
      $run = mysqli_query($con,$qry);
      $count=0;
      while ($data = mysqli_fetch_assoc($run)) {
        $count++;
          ?>
            <div class="col-sm-6 col-md-6">
              <iframe class="t_video" src="<?php echo $data['link']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <p><br></p>
              </div>
          <?php
      }
      ?>
      </div>
    </center>
</section>


  <?php
  include "include/footer/footer.php";
  ?>
</body>
</html>