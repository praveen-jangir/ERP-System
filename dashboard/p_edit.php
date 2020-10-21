<?php
include '../include/dbcon.php';

if (isset($_POST['id'])) {
  $id = $_POST['id'];
  $pass = md5($_POST['password']);
  $o_addr = $_POST['o_address'];
  $f_addr = $_POST['f_address'];
  $r_addr = $_POST['r_address'];
  $products = $_POST['products'];
  $whatsapp = $_POST['whatsapp'];
  $insta = $_POST['insta'];
  $fb = $_POST['fb'];
  $linkedin = $_POST['linkedin'];

   $img=$_FILES['file'];
    $filename=$img['name'];

    if(empty($filename)){
      $defile = 'upload/members/default_person.png';
      
    }
    else{
      $fileerror=$img['error'];
      $filetmp=$img['tmp_name'];

      $fileext = explode('.',$filename);
      $filechck= strtolower(end($fileext));

      $fileet = array('png','jpg','jpeg');

      if(in_array($filechck,$fileet))
      {
        $defile='upload/members/'.$filename;
        move_uploaded_file($filetmp,$defile);
      }
    }

    $qry = "UPDATE `member` SET `password`='$pass',`o_address`='$o_addr',`r_address`='$r_addr',`f_address`='$f_addr',`products`='$products',`facebook`='$fb',`instagram`='$insta',`whatsapp`='$whatsapp',`linkedin`='$linkedin', `images`='$defile' WHERE `id`='$id'";
    $run = mysqli_query($con,$qry);

    if ($run==true) {
      ?>
      <script type="text/javascript">
       window.open('../profile.php','_self');
      </script>
      <?php
    }
   }
   else{
    ?>
      <script type="text/javascript">
       window.open('../profile.php','_self');
      </script>
      <?php
   }

?>