<!DOCTYPE html>
<html>
<head>
	<title>About Us - Mcircle</title>

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

   <!-- About Us -->

   <section class="container" style="margin-top: 180px;">
    <center>
      <div class="row about">
        <?php
          $qry = "SELECT * FROM `about` WHERE `id`='1'";
          $run = mysqli_query($con,$qry);

          while ($data = mysqli_fetch_assoc($run)){
            ?>
          <div class="col-md-6 col-sm-6">
           <img align="left" src="dashboard/<?php echo $data['image'];?>" height="400" width="300"><br>
          </div>

          
          <div class="col-md-6 col-sm-6">
            <p align="left"><b><?php echo substr($data['text'],0,1391);
            $len=strlen($data['text']);
            ?>
          </div>
          <br><?php echo substr($data['text'],1392,$len);?></b></p>
          <?php
          }
        ?>
      </div>
    </center>
  </section>


  <p><br></p>
   <!-- Current Team -->
  <section>
    <h2 align="center" class="display-4 titles">Current Team</h2>
  </section>

  <section class="container-fluid bg-light story-sec">
    <center>
  <div class="row">
    <?php
      $qry = "SELECT * FROM `cur_member` WHERE `branch`='Chennai'";
      $run = mysqli_query($con,$qry);

      while ($data = mysqli_fetch_assoc($run)){
        $name = explode("_",$data['name']);
        $qry1 = "SELECT * FROM `member` WHERE `first_name`='$name[0]' AND `last_name`='$name[1]'";
        $run1 = mysqli_query($con,$qry1);
        while ($c_data = mysqli_fetch_assoc($run1)) {
          ?>
            <div class="col-md-3">
              <div class="w3-card-4 card card-birth" style="height: 300px;">
                <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img src="dashboard/<?php echo $c_data['images']; ?>" alt="Avatar" style="width:200px;height:200px;">
                    </div>
                    <div class="flip-card-back" style="color: black;background-color: white">
                      <p><br></p><p><br></p>
                        <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal<?php echo $data['id'];?>">Know More</button>
                    </div>
                  </div>
                </div>
                <div class="card-title text-secondary" style="margin-top: 5px;margin-bottom: 5px"><b><?php echo $c_data['first_name']; ?> <?php echo $c_data['last_name']; ?> </b></div>
                <div class="card-text title text-dark"><?php echo $data['designation']; ?></div>
                <p></p>
              </div>
              <p></p>
            </div>


          <div class="modal fade" id="exampleModal<?php echo $data['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><?php echo $c_data['first_name'];?> <?php echo $c_data['last_name'];?></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p><?php echo $data['description'];?></p>
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
    
  </center>
   </div>
</section>



<p><br></p>
   <!-- Past Presidents -->
  <section>
    <h2 align="center" class="display-4 titles">Past Presidents</h2>
  </section>

  <section class="container-fluid bg-light story-sec">
    <center>
  <div class="row">
    <?php
      $qry = "SELECT * FROM `p_president` WHERE `branch`='Chennai'";
      $run = mysqli_query($con,$qry);

      while ($data = mysqli_fetch_assoc($run)){
        $name = explode("_",$data['name']);

        if ($name[2]=='Member') {
          $qry1 = "SELECT * FROM `member` WHERE `first_name`='$name[0]' AND `last_name`='$name[1]'";
          $run1 = mysqli_query($con,$qry1);
        }
        elseif($name[2]=='Alumni'){
          $qry1 = "SELECT * FROM `alumni` WHERE `name`='$name[0]' AND `surname`='$name[1]'";
          $run1 = mysqli_query($con,$qry1);
        }
        
        while ($c_data = mysqli_fetch_assoc($run1)) {
          ?>
            <div class="col-md-3">
              <div class="w3-card-4 card card-birth" style="height: 300px;">
                <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img src="dashboard/<?php echo $c_data['images']; ?>" alt="Avatar" style="width:200px;height:200px;">
                    </div>
                    <div class="flip-card-back" style="color: black;background-color: white">
                      <p><br></p><p><br></p>
                        <button class="btn btn-success" data-toggle="modal" data-target="#<?php echo $data['name'];?><?php echo $data['id'];?>">Know More</button>
                    </div>
                  </div>
                </div>
                <div class="card-title text-secondary" style="margin-top: 5px;margin-bottom: 5px"><b><?php echo $c_data['first_name']; ?> <?php echo $c_data['last_name']; ?> </b></div>
                <div class="card-text title text-dark"><?php echo $data['y_from']; ?> - <?php echo $data['y_to']; ?></div>
                <p></p>
              </div>
              <p></p>
            </div>


            <div class="modal fade" id="<?php echo $data['name'];?><?php echo $data['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><span id="board-member">Board Members for Year : <?php echo $data['y_from'];?> - <?php echo $data['y_to'];?></span></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Members</th>
                        <th scope="col">Designations</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                            <td><?php echo $c_data['first_name']; ?> <?php echo $c_data['last_name']; ?></td>
                            <td>President</td>
                          </tr>

                      <?php
                      $id = $data['id'];
                      $qry2 = "SELECT * FROM `p_member` WHERE `president`='$id'";
                      $run2 = mysqli_query($con,$qry2);

                      while ($p_mem = mysqli_fetch_assoc($run2)) {
                        $m_name = $p_mem['members'];
                        $m_name = explode("_",$m_name);
                        ?>
                          <tr>
                            <td><?php echo $m_name[0]." ".$m_name[1];?></td>
                            <td><?php echo $p_mem['designation'];?></td>
                          </tr>
                        <?php
                      }
                      ?>
                      
                    </tbody>
                  </table>
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
    
  </center>
   </div>
</section>

      

  <?php
  include "include/footer/footer.php";
  ?>

</body>
</html>