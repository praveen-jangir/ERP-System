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

  <link rel="stylesheet" type="text/css" href="../include/css/style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>

	<!-- Header -->
	<?php
   include "../include/headers/s_header.php";
   include "../include/dbcon.php";
  ?>


  <!-- Tag line -->

  <?php
    $qry = "SELECT * FROM `theme` WHERE `id`='2'";
    $run = mysqli_query($con,$qry);

    while ($data = mysqli_fetch_assoc($run)){
      ?>
      <marquee style="margin-top: 210px;" class="container-fluid tag-line"><i><?php echo $data['line'];?></i></marquee>
      <?php
    }
  ?>





	<!-- Slider -->

    <section id="home" class="p-0 container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <?php
                      $qry = "SELECT * FROM `event` WHERE `types`='image' AND `branch`='Solapur' ORDER BY `year` DESC";
                      $run = mysqli_query($con,$qry);
                      $row = mysqli_num_rows($run);
                      if ($row<1) {
                        ?>
                        <script type="text/javascript">
                          document.getElementById('home').style.visibility="hidden";
                        </script>
                        <?php
                      }


                      $count=0;
                      while ($years = mysqli_fetch_assoc($run)){
                        $count++;

                        if ($count<4) {
                          if ($count==1) {
                            ?>
                            <div class="carousel-item active">
                             <img class="d-block w-100" src="<?php echo '../dashboard/'.$years['image'];?>" style="max-height: 600px;">
                            </div>             
                            <?php
                          }
                          else{
                            ?>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="<?php echo '../dashboard/'.$years['image'];?>" style="max-height: 600px;">
                            </div>
                            <?php
                          }
                        }
                        else
                          break;
                        ?>
                        <?php
                      }
                    ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" id="carousel-btn" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" id="carousel-btn" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
    </section>



 
<p><br></p>

 <!-- Event at A Glance -->
  <section>
    <h2 align="center" class="display-4 titles">Events at a Glance</h2>
  </section>


<section class="container youtube">
  <center>
  <div class="row">

    <?php
      $qry = "SELECT * FROM `event` WHERE `types`='video' AND `branch`='Solapur' ORDER BY `year` DESC";
      $run = mysqli_query($con,$qry);

      $count=0;
      while ($years = mysqli_fetch_assoc($run)){
      $count++;

      if ($count<4) {
        ?>
        <div class="col-sm-4 col-md-4">
          <div class="m_video">
            <iframe src="<?php echo $years['link'];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" height=200 allowfullscreen></iframe>
          </div>
        </div>             
        <?php
      }
      else
        break;
      ?>
      <?php
      }
    ?>
</div>
  <p align="center"><a href="event.php"><button class="btn btn-lg videos-btn">More Videos</button></a></p>
  </center>
</section>


<p><br></p>

 <!-- Story Section -->
  <section>
    <h2 align="center" class="display-4 titles">Stories</h2>
  </section>

  <section class="container-fluid">
    <center>
    <div class="row">
      <?php
        $qry = "SELECT * FROM `story` WHERE `branch`='Solapur' ORDER BY `id` DESC";
        $run = mysqli_query($con,$qry);
        $count = 0;
        while ($result = mysqli_fetch_assoc($run)) {
          $count++;
          if ($count<5) {
            $name = $result['member'];
            $m_name = explode('_',$name);

            $qry1 = "SELECT * FROM `member` WHERE `first_name`='$m_name[0]' AND `last_name`='$m_name[1]'";
            $run1 = mysqli_query($con,$qry1);
            $i=0;
            while ($member = mysqli_fetch_assoc($run1)) {
              $i++;
              if ($i<2) {
                ?>
                  <div class="col-md-3 col-sm-3">
                    <div class="card" style="max-width: 18rem;">
                      <h5 class="card-title"><?php echo $m_name[0]; ?> <?php echo $m_name[1]; ?></h5>
                      <img class="card-img-top" src="dashboard/<?php echo $member['images']; ?>" height="200" width="300" alt="Card image cap">
                    
                      <div class="card-body">
                        <p class="card-text"><?php echo substr($result['story'],0,45); ?></p>
                        <p align="center"><a href="#" class="btn btn-primary"  data-toggle="modal" data-target="#Story<?php echo $result['id']; ?>">Continue Reading</a></p>
                      </div>
                    </div>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade" id="Story<?php echo $result['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Story</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-md-6 col-sm-6"><img src="dashboard/<?php echo $member['images']; ?>" height="200" width="200"></div>
                          <div class="col-md-6 col-sm-6"><p><b><?php echo $member['first_name']; ?> <?php echo $member['last_name']; ?></b></p> <?php echo $result['story']; ?></div>
                        </div> 
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                      </div>
                    </div>
                    </div>

                <?php
              }
            }
            ?>
              
            <?php
          }
        }
      ?>
    </div>
    <p><br></p>
    <p><a href="stories.php"><button class="btn btn-lg videos-btn">More Stories</button></a></p>
     </center>
  </section>


<p><br></p>

   <!-- Member BirthDays Section -->
  <section>
    <h2 align="center" class="display-4 titles">Member Birthdays</h2>
  </section>
  
  <section class="container-fluid">
    <center>
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
    <p><br></p>
    <p align="center"><a button href="birthday.php" class="btn btn-danger">Upcoming Birthdays</button></a></p>
    </center>
  </section> 



  <p><br></p>

   <!-- Tesitmonial Video -->
  <section>
    <h2 align="center" class="display-4 titles">Testimonial Videos</h2>
  </section>

  <section class="container">
    <center>
      <div class="row">
      <?php
      $qry = "SELECT * FROM `t_video` WHERE `uploader`='Solapur' ORDER BY `id` DESC";
      $run = mysqli_query($con,$qry);
      $count=0;
      while ($data = mysqli_fetch_assoc($run)) {
        $count++;
        if ($count<3) {
          ?>
            <div class="col-sm-6 col-md-6">
              <iframe class="t_video" src="<?php echo $data['link']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
          <?php
        }
        else
          break;
      }
      ?>
      </div>

      <p><br></p>
      <p><a href="testimonial.php" button class="btn videos-btn">More Videos</button></a></p>
    </center>
  </section>

  <p></p>


  <?php
  include "../include/footer/s_footer.php";
  ?>

</body>
</html>