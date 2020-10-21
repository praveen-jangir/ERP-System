<section class="footer footer_res bg-dark youtube container-fluid-footer">
  <p><br></p>
  <div class="row">
    <div class="col-md-3">
      <img src="assets/images/logo.png" height="150" width="220"><p></p>
      <div class="icon-sec">
        <?php
      $qry = "SELECT * FROM `links` WHERE `id`<10";
      $run = mysqli_query($con,$qry);
      while ($data = mysqli_fetch_assoc($run)) {
        if ($data['id']==2) {
          ?>
          <span class="social-icons"><a href="<?php echo $data['link']; ?>" target="_blank"><img src="assets/images/fb.png" height="25" width="25"></a></span>
          <?php
        }
        if ($data['id']==3) {
          ?>
      <span class="social-icons"><a href="<?php echo $data['link']; ?>" target="_blank"><img src="assets/images/insta.png" height="25" width="25"></a></span>
      <?php
        }
        if ($data['id']==4) {
          ?>
      <span class="social-icons"><a href="<?php echo $data['link']; ?>" target="_blank"><img src="assets/images/linkedin.png" height="25" width="25"></a></span>
      <?php
        }
        if ($data['id']==5) {
          ?>
          <span class="social-icons"><a href="<?php echo $data['link']; ?>" target="_blank"><img src="assets/images/youtube.png" height="25" width="25"></a></span>
          <?php
        }
      }
        ?>
      <p><br></p>
      </div>
    </div>

    <div class="col-md-3">
      <span class="footer-text">
        Chennai address :<br>
        <?php
      $qry = "SELECT * FROM `links` WHERE `id`=1";
      $run = mysqli_query($con,$qry);
      while ($data = mysqli_fetch_assoc($run)) {
        if ($data['id']==1) {
          ?>
          <?php echo $data['link'];?><br>
        <?php
      }
    }
      ?>
        <p><br></p>
      </span>
    </div>
    
    <div class="col-md-3">
      <span class="footer-text">
        Solapur address :<br>
        <?php
      $qry = "SELECT * FROM `links` WHERE `id`=10";
      $run = mysqli_query($con,$qry);
      while ($data = mysqli_fetch_assoc($run)) {
        if ($data['id']==10) {
          ?>
          <?php echo $data['link'];?><br>
        <?php
      }
    }
      ?>
        <p><br></p>
      </span>
    </div>

    <div class="col-md-3">
      <span class="footer-link">
        <p class="footer_res" style=" text-align: right; margin-left: 50px;">
        <a style="color: aqua;" href="index.php">Home</a><br>
        <a style="color: aqua;" href="about.php">About us</a><br>
        <a style="color: aqua;" href="member.php">Members List</a><br>
        <a style="color: aqua;" href="event.php">Events</a><br>
        <a style="color: aqua;" href="contact.php">Contact</a><br>
        <a data-toggle="modal" data-target="#exampleModals1">Start a Chapter</a><br>
        <a data-toggle="modal" data-target="#exampleModalm1">Become a Member</a><br>
        <p><br></p>
      </p>
      </span>
    </div>

  </div>
</section>