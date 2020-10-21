<!DOCTYPE html>
<html>
<head>
	<title>Events - Mcircle</title>

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
   $c_year = date("Y");
  ?>


  <?php
    $qry = "SELECT * FROM `event` WHERE `branch`='Chennai' ORDER BY `year` DESC";
    $run = mysqli_query($con,$qry);
    $yr = array();
    $i=0;
    while ($data = mysqli_fetch_assoc($run)) {
      $yr[$i] = $data['year'];
      $i++;
    }

    $years = array_unique($yr);

  ?>


<section class="container-fluid" style="margin-top: 200px;">
  <center>
  <div class="row">
    <div class="col-md-5 col-sm-5">
      <p class="display-4"><font size='6'>Events of The Year : <span id="year"><?php echo $c_year;?></span></font></p>
    </div>
    <div class="col-md-3 col-sm-3"></div>
    <div class="col-md-4 col-sm-4">
      <h4>Select Year</h4>
      <select onchange="s_years(this.value)" style="padding: 10px 14px;">
        <?php
        $s_yr = sizeof($years);
        foreach ($years as $value){ 
          ?>
          <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
          <?php
        }
        ?>
      </select>
    </div>
  </div>
</center>
  <p><br></p>

  <div class="row" id="events">
    <?php
    $qry = "SELECT * FROM `event` WHERE `branch`='Chennai' AND `year`='$c_year'";
  $run = mysqli_query($con,$qry);

  $i_count = 0;

  while ($data = mysqli_fetch_assoc($run)) {  
    if ($data['types']=='image') {
      $i_count++;
      ?>
      <div align="center" class="col-sm-3 col-md-3">
        <img src="dashboard/<?php echo $data['image'] ?>" onclick="openModal();currentSlide(<?php echo $i_count; ?>)" class="event hover-shadow cursor">
        <p><b><?php echo $data['title'] ?></b><br><?php echo $data['texts'] ?></p>
      </div>
      <?php
    }
  $i_count=0;

    if ($data['types']=='video') {
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
    ?>


 <!-- for modal -->
<div id="myModal" class="modal-gl">
  <span class="close-gl cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content-gl">
    <center>

    
  <?php
    $qry1 = "SELECT * FROM `event` WHERE `branch`='Chennai' AND `year`='$c_year'";
  $run1 = mysqli_query($con,$qry1);
  $i_count = 0;
  $row = mysqli_num_rows($run1);

  while ($data = mysqli_fetch_assoc($run1)) {  
    if ($data['types']=='image') {
      $i_count++;
      ?>
      <div class="mySlides">
      <div class="numbertext"><?php echo $i_count." / ".$row; ?></div>
        <img src="dashboard/<?php echo $data['image']; ?>" style="width: 100%;">
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

  </div>
  </center>
</section>

<p><br></p>

  
  

<style type="text/css">
  img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

.cursor-gl {
    cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 50px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

/* The Modal (background) */
.modal-gl {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 120px;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content-gl {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close-gl {
  color: white;
  position: absolute;
  top: 60px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>



<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

  <?php
  include "include/footer/footer.php";
  ?>

  <script type="text/javascript">
    function s_years(yr) {
      document.getElementById('year').innerHTML = yr;

      $(document).ready(function() {
        $.ajax({
          url : "event_action.php",
          type : "POST",
          data : {year : yr},

          success: function(data) {
            $("#events").html(data);
          }
        });
      });
    }
  </script>
</body>
</html>