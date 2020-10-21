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

  <center>
  <section class="container" style="margin-top: 200px;">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Full Name</th>
          <th scope="col">Sector</th>
          <th scope="col">Company</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $qry = "SELECT * FROM  `alumni` WHERE `branch`='Solapur'";
        $run = mysqli_query($con,$qry);
        while ($data = mysqli_fetch_assoc($run)) {
          ?>
          <tr>
            <td><?php echo $data['first_name']." ".$data['last_name'];?></td>
            <td><?php echo $data['sector'];?></td>
            <td><?php echo $data['company'];?></td>
          </tr>
          <?php
        }
        ?>
        
      </tbody>
    </table>  
  </section>
  </center>

  <?php
  include "../include/footer/s_footer.php";
  ?>

</body>
</html>