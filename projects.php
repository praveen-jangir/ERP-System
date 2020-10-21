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

   if (isset($_GET['project'])) {
     $project = $_GET['project'];
   }
   else{
    ?>
    <script type="text/javascript">
      window.open('index.php','_self');
    </script>
    <?php
   }
  ?>


<section>
  <?php
  if ($project=='Skill_Plus') {
    $qry = "SELECT * FROM `project_icon` WHERE `id`='1'";
    $run = mysqli_query($con,$qry);

    ?>
    <!-- Skill Plus -->
      <section style="margin-top: 200px; margin-bottom: 50px;">
        <h2 align="center" class="display-4 titles">Skill Plus</h2>
      </section>

      <div align="center" class="container">
        <?php
        while ($data = mysqli_fetch_assoc($run)) {
          ?>
          <p align="left"><?php echo $data['text'];?></p>
          <?php
        }
        ?>
      </div>
    <?php
  }


  if ($project=='MBS') {
    $qry = "SELECT * FROM `project_icon` WHERE `id`='2'";
    $run = mysqli_query($con,$qry);

    ?>
    <!-- MBS -->
      <section style="margin-top: 200px; margin-bottom: 50px;">
        <h2 align="center" class="display-4 titles">MBS</h2>
      </section>

      <div align="center" class="container">
        <?php
        while ($data = mysqli_fetch_assoc($run)) {
          ?>
          <p align="left"><?php echo $data['text'];?></p>
          <?php
        }
        ?>
      </div>
    <?php
  }


  if ($project=='profile_plus') {
    $qry = "SELECT * FROM `project_icon` WHERE `id`='3'";
    $run = mysqli_query($con,$qry);

    ?>
    <!-- MBS -->
      <section style="margin-top: 200px; margin-bottom: 50px;">
        <h2 align="center" class="display-4 titles">Profile Plus</h2>
      </section>

      <div align="center" class="container">
        <div class="row">
        <?php
        while ($data = mysqli_fetch_assoc($run)) {
          ?>
          <div class="col-md-6 col-sm-6">
          <img align="left" src="dashboard/<?php echo $data['images'];?>" style="max-height: 200px; max-width: 200px;"> 
          </div>
          <div class="col-md-6 col-sm-6">
          <p align="left"><b><?php echo substr($data['text'],0,586);
            $len=strlen($data['text']);
            ?>
          </div>
          <br><?php echo substr($data['text'],586,$len);?></b></p>
          
          <?php
        }
        ?>
        </div>
        <p><br></p>
        <div class="row">
        <?php
        $qry1 = "SELECT * FROM `profile_plus` WHERE `branch`='Chennai'";
        $run1 = mysqli_query($con,$qry1);

        while ($result = mysqli_fetch_assoc($run1)) {
          if ($result['types']=='image') {
            ?>
            <div class="col-sm-3 col-md-3">
              <img src="dashboard/<?php echo $result['image'];?>" style="max-height: 200px; max-width: 200px;">
            </div>
            <?php
          }

          if ($result['types']=='video') {
            ?>
            <div class="col-sm-3 col-md-3">
              <iframe width="180" height="180" src="<?php echo $result['link'];?>" frameborder="0"
       allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
      </iframe>
            </div>
            <?php
          }
        }
        ?>
      </div>

      </div>
    <?php
  }
  ?>
</section>


  <?php
  include "include/footer/footer.php";
  ?>

</body>
</html>