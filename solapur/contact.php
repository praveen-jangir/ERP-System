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


<section class="container-fluid" style="margin-top: 200px;">
  <div class="contaier">
    <table align="center">

      <?php
      $qry = "SELECT * FROM `links` WHERE `id`>10";
      $run = mysqli_query($con,$qry);
      while ($data = mysqli_fetch_assoc($run)) {
        if ($data['id']==11) {
          ?>
          <tr>
          <td>
            <a href="$data['link']"><script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_JYIX5X.json"  
            background="transparent"  speed="1"  style="width: 110px; height: 140px;"  loop autoplay></lottie-player></a>
          </td>
          <?php
        }

        if ($data['id']==12) {
          ?>
          <td>
            <a href="$data['link']"><script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets6.lottiefiles.com/datafiles/cQiEsPrJCutfedV/data.json"  
            background="transparent"  speed="1"  style="width: 110px; height: 100px;"  loop autoplay></lottie-player></a>
          </td>
          <?php
        }

        if ($data['id']==13) {
          ?>
          <td>
                      <a href="$data['link']">  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
          <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_pWLTA9.json"  
          background="transparent"  speed="1"  style="width: 110px; height: 90px;"  loop autoplay></lottie-player></a>
          </td>
          <?php
        }

        //youtube
        if ($data['id']==14) {
          ?>
          <td>
           <a href="{{l.link}}">
            <img src="../assets/images/yt.gif" width="130" height="130">
          </a>
          </td>
        </tr>
          <?php
        }
        
          //location
        if ($data['id']==15) {
          ?>
         <tr> 
          <td>
           <a href="{{l.link}}"><script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_qkWEzw.json"
        background="transparent"  speed="1"  style="width: 110px; height: 110px;"  loop  autoplay></lottie-player></a>
          </td>
          <?php
        }

         //whatsapp
        if ($data['id']==16) {
          ?>
          <td>
           <a href="../https://wa.me/{{l.link}}"> <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
          <lottie-player src="https://assets8.lottiefiles.com/datafiles/0t1ESTur6hOdome/data.json" 
           background="transparent"  speed="1"  style="width: 110px; height: 110px;"  loop autoplay></lottie-player></a>
          </td>
          <?php
        }


        //mail
        if ($data['id']==17) {
          ?>
          <td>
           <a href="{{l.link}}"><script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
          <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_Ezf3ae.json" 
           background="transparent"  speed="1"  style="width: 110px; height: 110px;"  loop  autoplay></lottie-player></a>
          </td>
          <?php
        }


        //zoom
        if ($data['id']==18) {
          ?>
          <td>
           <a href="{{l.link}}"><script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
          <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_UA5OFw.json"
            background="transparent"  speed="1"  style="width: 140px; height: 140px;"  loop autoplay></lottie-player></a>
          </td>
        </tr>
          <?php
        }
      }
      ?>
    </table>
  </div>
</section>


  <?php
  include "../include/footer/s_footer.php";
  ?>

</body>
</html>