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

  
<section class="container" style="margin-top: 300px;">
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
                      <img class="card-img-top" src="../dashboard/<?php echo $member['images']; ?>" height="200" width="300" alt="Card image cap">
                    
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
                          <div class="col-md-6 col-sm-6"><img src="../dashboard/<?php echo $member['images']; ?>" height="200" width="200"></div>
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
    <p><br></p></center>
</section>


  <?php
  include "../include/footer/s_footer.php";
  ?>
</body>
</html>