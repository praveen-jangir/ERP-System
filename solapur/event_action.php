<?php
include "include/dbcon.php";

if (isset($_POST['year'])) {		
	$yr = $_POST['year'];

	$qry = "SELECT * FROM `event` WHERE `branch`='Solapur' AND `year`='$yr'";
	$run = mysqli_query($con,$qry);
	$i_count=0;

	while ($data = mysqli_fetch_assoc($run)) {	
		if ($data['types']=='image') {
			$i_count++;
		      ?>
		      <div align="center" class="col-sm-3 col-md-3">
		        <img src="../dashboard/<?php echo $data['image'] ?>" onclick="openModal();currentSlide(<?php echo $i_count; ?>)" class="event hover-shadow cursor">
		        <p><b><?php echo $data['title'] ?></b><br><?php echo $data['texts'] ?></p>
		      </div>
		      <?php
		}

		elseif ($data['types']=='video') {
			?>
			<div class="col-md-3 col-sm-3">
				<div class="card" style="width: 182px; height: auto;">
				  <iframe width="180" height="180" src="<?php echo $data['link'] ?>" frameborder="0"
				   allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
				  </iframe>
				  <button class="btn btn-primary"  data-toggle="modal" data-target="#event<?php echo $data['id'] ?>">Full View</button>
				</div>
			</div>


			<!-- video modal -->
			<div class="modal fade" id="event<?php echo $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
				  <div class="modal-content">
					<div class="modal-header">
					  <h5 class="modal-title" id="exampleModalLabel"><?php echo $data['title'] ?></h5>
					  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					  </button>
					</div>
					<div class="modal-body">
						<center>
						<iframe class="event-video" src="<?php echo $data['link'] ?>" frameborder="0"
						   allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
						</iframe>
					</center>
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

$i_count=0;
	//image modal
?>

 <!-- for modal -->
<div id="myModal" class="modal-gl">
  <span class="close-gl cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content-gl">
    <center>

    
  <?php
    $qry1 = "SELECT * FROM `event` WHERE `branch`='Solapur' AND `year`='$yr'";
  $run1 = mysqli_query($con,$qry1);
  $i_count = 0;
  $row = mysqli_num_rows($run1);

  while ($data = mysqli_fetch_assoc($run1)) {  
    if ($data['types']=='image') {
      $i_count++;
      ?>
      <div class="mySlides">
      <div class="numbertext"><?php echo $i_count." / ".$row; ?></div>
        <img src="../dashboard/<?php echo $data['image']; ?>" style="width: 100%;">
      </div>
      <?php
    }
  }
  $i_count=0;
    ?>
</center>
  
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

  </div>
</div> 

	  <?php

}
?>
