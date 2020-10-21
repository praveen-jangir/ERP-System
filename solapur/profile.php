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

   if (!isset($_SESSION['uid'])) {
     ?>
     <script type="text/javascript">
       window.open('index.php','_self');
     </script>
     <?php
   }

  ?>

  
<section class="container" style="margin-top: 300px;">
  <div class="row profile-body">
    <?php
    $id = $_SESSION['uid'];
    $qry = "SELECT * FROM `member` WHERE `id`='$id'";
    $run = mysqli_query($con,$qry);

    while ($data = mysqli_fetch_assoc($run)) {
      ?>
      <div class="col-md-6 col-sm-6">
        <p><img src="../dashboard/<?php echo $data['images']; ?>" style="border-radius: 15px; max-width: 300px; max-height: 300px;"></p>
        <p style="padding-left: 80px;"><button class="btn btn-primary" data-toggle="modal" data-target="#edit_profile">Edit Profile</button></p>
      </div>

      <div class="col-md-6 col-sm-6">
        <p class="display-4"><?php echo $data['first_name']; ?> <?php echo $data['last_name']; ?></p>
        <font size="4">
        <?php
        $c_mem = $data['first_name']."_".$data['last_name'];
        $qry1 = "SELECT * FROM `cur_member` WHERE `name`='$c_mem'";
        $run1 = mysqli_query($con,$qry1);

        if (mysqli_num_rows($run1)>0) {
          while ($fetch = mysqli_fetch_assoc($run1)) {
            ?>
            <span class="text-secondary"><i class="fas fa-award" style="color: green;"></i> <b> <?php echo $fetch['designation'];?></b></span>
            <?php
          }
        }


        if (!empty($data['email'])) {
          ?><p class="text-secondary"><i><?php echo $data['email']; ?></i></p><?php
        }
        ?>
        <p><br></p>
        <p>Branch : <i><?php echo $data['branch']; ?></i></p>
        <p><i class="fas fa-phone-volume"></i> : <i><?php echo $data['contact']; ?></i></p>

        <?php
        if (!empty($data['company'])) {
          ?><p><i class="far fa-building"></i> : <i><?php echo $data['company']; ?></i></p><?php
        }

        if (!empty($data['products'])) {
          ?><p>Products : <i><?php echo $data['products']; ?></i></p><?php
        }  

        if (!empty($data['award'])) {
          ?><p>Awards : <i><?php echo $data['award']; ?></i></p><?php
        }

        if (!empty($data['club'])) {
          ?><p>Clubs : <i><?php echo $data['club']; ?></i></p><?php
        }

        if (!empty($data['r_address'])) {
          ?><p>Residencial Adress : <i><?php echo $data['r_address']; ?></i></p><?php
        }

        if (!empty($data['f_address'])) {
          ?><p>Factory Address : <i><?php echo $data['f_address']; ?></i></p><?php
        }

        if (!empty($data['o_address'])) {
          ?><p>Office Address : <i><?php echo $data['o_address']; ?></i></p><?php
        }
        ?>

        </font>
      </div>




        <!-- Become A Member Modal -->
        <div class="modal fade" id="edit_profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 700px;">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Your Profile</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" style="width: 700px;">
              <form class="form-group" action="../dashboard/p_edit.php" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
              
              <p>Profile Picture : <input type="file" name="file" class="form-control"></p>
              <p>Password : <input type="password" name="password" maxlength="8" class="form-control" required=""></p> 

              <p>Office Address: <input type="text" name="o_address" maxlength="500" class="form-control" value="<?php echo $data['o_address']; ?>"></p> 
              <p>Factory Address : <input type="text" name="f_address" maxlength="500" class="form-control" value="<?php echo $data['f_address']; ?>"></p>
              <p>Residential Address : <input type="text" name="r_address" maxlength="500" class="form-control" value="<?php echo $data['r_address']; ?>"></p>
              <p>Products : <input type="text" name="products" maxlength="200" class="form-control" value="<?php echo $data['products']; ?>" required=""></p>

              <p>Whatsapp : <input type="number" name="whatsapp" class="form-control" maxlength="200" value="<?php echo $data['whatsapp']; ?>"></p>
              <p>Instagram : <input type="text" name="insta" class="form-control" maxlength="200" value="<?php echo $data['instagram']; ?>"></p>
              <p>Facebook : <input type="text" name="fb" class="form-control" maxlength="200" value="<?php echo $data['facebook']; ?>"></p>
              <p>LinkedIn : <input type="text" name="linkedin" class="form-control" maxlength="200" value="<?php echo $data['linkedin']; ?>"></p>

            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">SUBMIT</button>
            </form>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
            </div>
          </div>
      <?php
    }
    ?>
    
  </div>
</section>


  <?php
  include "../include/footer/s_footer.php";
  ?>
</body>
</html>