



<!-- Header -->
	

<style type="text/css">
	.fixed-topx {
    position: fixed;
    top: 0px;
    right: 0;
    left: 0;
    z-index: 1030;
}
.videos-btn {
    position: relative;
    background-color: #ff752ab3;
    color: white;
    margin-bottom: 0px;
  }
</style>

<section class="fixed-topx">
<section class="f-header">
	<div class="container">
		<div class="row">
			<div class="col">
				<span class="top-bar-margin">
					<div class="custom-control custom-radio custom-control-inline ">
					  <input type="radio" id="customRadioInline2" onclick="chennai()" checked name="customRadioInline1" class="custom-control-input">
					  <label class="custom-control-label" for="customRadioInline2">Chennai</label>
					</div>
					</span>

				<span class="top-bar-margin">
				<div class="custom-control custom-radio custom-control-inline">
				  <input type="radio" onclick="solapur()"  id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
				  <label class="custom-control-label" for="customRadioInline1">Solapur</label>
				</div>
				
				</span>
				
			</div>

			<div class="col text-center">
				<span>Welcome to M Circle Chennai Chapter</span>
			</div>

			<div class="col text-right">
				<a data-toggle="modal" data-target="#exampleModals1" href="#"><span class="top-bar-margin"></span></a>
				<span class="top-bar-margin"></span>

				
									<span class="dropdown"><a href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span><button class="btn videos-btn">Login</button></a>

						<div class="dropdown-menu" style="padding: 15px;width: 200px; padding-bottom: 10px;">
						<form class="form-horizontal" action=""  method="post" accept-charset="UTF-8">
						  <p><input id="sp_uname" class="form-control login" type="text" name="email" placeholder="Phone no. or Email" required=""/></p>
						  <p><input id="sp_pass" class="form-control login" type="password" name="pass" placeholder="Password.." required=""/></p>
						  <p><input class="btn videos-btn" type="submit" name="submit" value="login" /></p>
						  <font color="red"><p id="warn"></p></font>
						</form>
					</div>
				
									</div>
				

				
				
					<script>
						//window.open('/dash/','_self');
					</script>
				
				<!-- <i>sdfsdfs</i><a style="padding-left: 5%;" href="/logout/"><button class="btn btn-danger btn-sm">Logout</button></a> -->

				<!-- <span class="glyphicon glyphicon-log-in top-bar-margin"><button class="dropdown-toggle btn btn-success btn-sm" data-toggle="dropdown">Login</button></span> -->
			</div>
		</div>
	</div>
</font>
</section>

<section>
	<nav class="navbar navbar-expand-lg navbar-light main-top w3-bar w3-border w3-card-4" style="background-color: white;">
	<div class="container-fluid">
  <a class="navbar-brand" href="index.php"><img src="assets/images/logo.jpg" height="70" width="100"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item" id="homex">
        <a class="nav-link a1" href="index.php"><b>Home</b></a>
      </li>
      <li class="nav-item" id="aboutx">
        <a class="nav-link a1" href="about.php"><B>About Us</B></a>
      </li>
      <li class="nav-item" id="memberx">
        <a class="nav-link a1" href="member.php"><B>Buisness & Services</B></a>
      </li>
      <li class="nav-item" id="honx">
        <a class="nav-link a1" href="honrary.php"><B>Honorary</B></a>
      </li>
      <li class="nav-item" id="alumx">
        <a class="nav-link a1" href="alumni.php"><B>Alumni</B></a>
	  </li>
	  <li class="nav-item" id="eventx">
        <a class="nav-link a1" href="event.php"><B>Events</B></a>
	  </li>
	  <li class="nav-item" id="contactx">
        <a class="nav-link a1" href="contact.php"><B>Contact</B></a>
      </li>
      <li class="nav-item">
        <a class="nav-link a1" data-toggle="modal" data-target="#exampleModals1" href="#"><B>Start A Chapter</B></a>
      </li>
      <li class="nav-item">
        <a class="nav-link a1" data-toggle="modal" data-target="#exampleModalm1"><B>Become a Member</B></a>
      </li>
      
      
    </ul>
    <form class="form" method="post" action="search.php">
      <div class="container h-100">
      <div class="d-flex justify-content-center h-100">
        <div class="searchbar">
          <input class="search_input" type="text" name="search" placeholder="Search..." required="">
          <button style="background: none; border: none;" type="submit" class="search_icon"><i class="fas fa-search"></i></button>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>
</nav>
</section>
</section>




  <!-- Start A Chapter Modal -->
<div class="modal fade" id="exampleModals1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="padding-right: 174px; padding-left: 0px !important;" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content chapter_body" style="width: 700px;">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Start A Chapter</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body chapter_body" style="width: 700px;">
		  <form action="m_request.php" method="post"> 
			  <table>
				  <div class="form-group">
				  <input type="hidden" name="roll" value="chapter">
				<tr><td>Name<b style="color:red">*</b></td><td><input type="text" class="form-control chapter_form" name="name" maxlength="30" style="text-transform: uppercase; width: 460px;" required></td></tr>
				<tr><td>Surname<b style="color:red">*</b> </td><td><input type="text" class="form-control chapter_form" name="sname" style="text-transform: uppercase;  width: 460px;" required></td></tr>
				<tr><td>Native of </td><td><input type="text" class="form-control chapter_form" name="native" maxlength="200" style="text-transform: uppercase; width: 460px;"></td></tr>
				<tr><td>Mobile No.<b style="color:red">*</b> </td><td><input type="number" name="mobile" class="form-control chapter_form" style="text-transform: uppercase; width: 460px;" required></td></tr>
				<tr><td>Email Id<b style="color:red">*</b> </td><td><input type="email" name="email" class="form-control chapter_form" style="text-transform: uppercase; width: 460px;" required></td></tr>
				<tr><td>Currently living in<b style="color:red">*</b> </td><td><input type="text" class="form-control chapter_form" name="living"  style="text-transform: uppercase; width: 460px;" required></td></tr>
				<tr><td>Business/ Profession Name<b style="color:red">*</b> </td><td><!-- <input type="text" class="form-control chapter_form" name="buisness" style="text-transform: uppercase; width: 460px;" required> -->
					<textarea  class="form-control chapter_form" name="buisness" style="text-transform: uppercase; width: 460px;" required></textarea></td></tr>

				<tr><td>City You are interested for new chapter<b style="color:red">*</b> </td><td><input type="text" class="form-control chapter_form" name="city" style="text-transform: uppercase; width: 460px;" required></td></tr>
				<tr><td>You are interested to start because<b style="color:red">*</b> </td><td><!-- <input type="text" class="form-control chapter_form" name="reason" placeholder="Enter your reason" style="text-transform: uppercase; width: 460px;" required> -->
					<textarea class="form-control chapter_form" name="reason" style="text-transform: uppercase; width: 460px;" required></textarea>
				</td></tr>
				<tr><td>Maheshwaris population approx in proposed city<b style="color:red">*</b> </td><td><input type="number" class="form-control chapter_form" name="m_population" style=" width: 460px;"></td></tr>
				<tr><td>Associations/ Groups active for Maheswaris<b style="color:red">*</b> </td><td><input type="text" class="form-control chapter_form" name="actives" style="text-transform: uppercase; width: 460px;"></td></tr>
				<tr><td>MCircle Members you know<b style="color:red">*</b> </td><td>
					<!-- <input type="text" name="m_member" class="form-control chapter_form" placeholder="Enter member in MCircle name" style="text-transform: uppercase; width: 460px;"> -->
					<textarea name="m_member" class="form-control chapter_form" style="text-transform: uppercase; width: 460px;"></textarea>
				</td></tr>
				<tr><td>Member of other Associations<b style="color:red">*</b> </td><td>
					<!-- <input type="text" class="form-control chapter_form" name="club" style="text-transform: uppercase; width: 460px;"> -->
					<textarea input type="text" class="form-control chapter_form" name="club" style="text-transform: uppercase; width: 460px;"></textarea>
				</td></tr>
			  </table>	
			
			  <input type="hidden" name="user" value="Chennai">
		</div>
		<div class="modal-footer">
			<button type="submit" button class="btn videos-btn">SUBMIT</button>
		</form>
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		</div>
	  </div>
	</div>
	</div>
  </div>




  <!-- Become A Member Modal -->
<div align="center" class="modal fade" id="exampleModalm1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="padding-right: 174px; padding-left: 0px !important;" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content chapter_body" style="width: 700px;">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Become A Member</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body chapter_body" style="width: 700px;">
		  <form action="m_request.php" method="post">
			<input type="hidden" name="roll" value="become_member">
			<input type="hidden" name="branch" value="Chennai">
			  <table>
				  <div class="form-group">
				<tr><td>Name<b style="color:red">*</b> </td><td><input type="text" name="name" class="form-control chapter_form" style="text-transform: uppercase; width: 460px;" required></td></tr>
				<tr><td>Surname<b style="color:red">*</b> </td><td><input type="text" name="sname" class="form-control chapter_form" style="text-transform: uppercase; width: 460px;" required></td></tr>
				<tr><td>Native of<b style="color:red">*</b> </td><td><input type="text" name="native" class="form-control chapter_form" style="text-transform: uppercase; width: 460px;"></td></tr>
				<tr><td>Mobile No.<b style="color:red">*</b> </td><td><input type="number" name="mobile" class="form-control chapter_form" style="text-transform: uppercase; width: 460px;" required></td></tr>
				<tr><td>Email Id<b style="color:red">*</b> </td><td><input type="email" name="email" class="form-control chapter_form" style="text-transform: uppercase; width: 460px;" required></td></tr>
				<tr><td>Currently living in<b style="color:red">*</b> </td><td><input type="text" name="living" class="form-control chapter_form" style="text-transform: uppercase; width: 460px;" required></td></tr>
				<!-- <tr><td>Buisness / Profession Name<b style="color:red">*</b> </td><td>
					<textarea name="buisness" class="form-control chapter_form" style="text-transform: uppercase; width: 460px;" required maxlength="400"></textarea> -->
				</td></tr>
				<tr><td>You are interested to join because<b style="color:red">*</b> </td><td>
					<textarea  class="form-control chapter_form" name="reason" style="text-transform: uppercase; width: 460px;" ></textarea></td></tr>

				<tr><td>Products/ Services<b style="color:red">*</b> </td><td>

					<textarea name="product" class="form-control chapter_form" style="text-transform: uppercase; width: 460px;"></textarea></td></tr>

				<tr><td>Year into Buisness<b style="color:red">*</b> </td><td>
					<input type="number" name="years" class="form-control chapter_form" style=" width: 460px;" >
				</td></tr>

				<tr><td>Date of Birth<b style="color:red">*</b> </td><td>
					<input type="date" name="birth" class="form-control chapter_form" style=" width: 460px;" required>
				 </td></tr>
				<tr><td>MCircle Members you know<b style="color:red">*</b> </td><td>
					<textarea class="form-control chapter_form" name="m_member" style="text-transform: uppercase; width: 460px;"></textarea></td></tr>

				<tr><td>Member of other Associations<b style="color:red">*</b> </td><td>
					<textarea class="form-control chapter_form" name="club" style="text-transform: uppercase; width: 460px;"></textarea></td></tr>
			  </table>	
			  <input type="hidden" name="user" value="Chennai">
		</div>
		<div class="modal-footer">
			<button type="submit" name="submit1" button class="btn videos-btn">SUBMIT</button>
		</form>
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		</div>
		</div>
	  </div>
	</div>

<script>
	function solapur(){
     window.open("solapur/index.php","_self");
	}
</script>





<!DOCTYPE html>
<html>
<head>
	<title>Home - MCircle</title>

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
<style>
  .display-4 {
    font-size: 23px;
    font-weight: 215px;
    background-color: #ff752ab3;
    line-height: 1.2;
    padding: 0px;
    color: white;
    box-shadow: 1px 1px 5px 1px black;
}
.videos-btn {
    position: relative;
    background-color: #ff752ab3;
    color: white;
    margin-bottom: 0px;
  }
</style>
<body>

	<p></p>

  <!-- Tag line -->

        <marquee style="margin-top: 210px; background-image: linear-gradient(orange, red);" class="container-fluid tag-line"><i>Maheshwari First, Chalo Saath Chaley</i></marquee>
      

<p><br></p>


	<!-- Slider -->

    <section id="home" class="p-0 container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="max-height: 521px;">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" style="max-height: 500px;">
                                                <div class="carousel-item active">
                             <img class="d-block w-100" src="dashboard/upload/event/2019-20-Europe Tour.jpg" height="600px">
                            </div>             
                                                                                <div class="carousel-item">
                              <img class="d-block w-100" src="dashboard/upload/event/2019-20-Greeting.jpg" height="600px">
                            </div>
                                                                                <div class="carousel-item">
                              <img class="d-block w-100" src="dashboard/upload/event/2019-20-Geekopedia 2.jpg" height="600px">
                            </div>
                                                                                <div class="carousel-item">
                              <img class="d-block w-100" src="dashboard/upload/event/2019-20-Installation.png" height="600px">
                            </div>
                                                                                <div class="carousel-item">
                              <img class="d-block w-100" src="dashboard/upload/event/2019-20-Rajiv Talreja.jpg" height="600px">
                            </div>
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



  <!-- Project Icons -->
   <section class="container-fluid w3-bar w3-border w3-card-4 project">
  <div class=" container-fluid">
    <center>
     <div class="row project-card">
        <div class="col-md col-lg">
          <a href="projects.php?project=Skill_Plus"><img class="shaking" src="assets/images/project-a.png" height="150" width="200"></a>
        </div>

        <div class="col-md col-lg"><a href="projects.php?project=MBS"><img class="shaking" src="assets/images/project1.png" height="200" width="200"></a>
        </div>

        <div class="col-md col-lg"><a href="projects.php?project=profile_plus"><img class="shaking" src="assets/images/projectz.png" height="120" width="200"></a>
        </div>
      </div>
    </center>
  </div>
 </section>

<p><br></p>

 <!-- Event at A Glance -->
  <section>
    <h2 align="center" style="background-image: linear-gradient(orange, red); padding:15px;" class="display-4 titles">Events at a Glance</h2>
  </section>


<section class="container youtube">
  <center>
  <div class="row">

            <div class="col-sm-4 col-md-4">
          <div class="m_video">
            <iframe src="https://www.youtube.com/embed/xvqVkdenmUI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" height=200 allowfullscreen></iframe>
          </div>
          <p><br></p>
        </div>             
                      <div class="col-sm-4 col-md-4">
          <div class="m_video">
            <iframe src="https://www.youtube.com/embed/RX06G6bglEQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" height=200 allowfullscreen></iframe>
          </div>
          <p><br></p>
        </div>             
                      <div class="col-sm-4 col-md-4">
          <div class="m_video">
            <iframe src="https://www.youtube.com/embed/tBKG1Rb1MuU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" height=200 allowfullscreen></iframe>
          </div>
          <p><br></p>
        </div>             
                      <div class="col-sm-4 col-md-4">
          <div class="m_video">
            <iframe src="https://www.youtube.com/embed/zwoIcvr7rv8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" height=200 allowfullscreen></iframe>
          </div>
          <p><br></p>
        </div>             
                      <div class="col-sm-4 col-md-4">
          <div class="m_video">
            <iframe src="https://www.youtube.com/embed/vbLLbdqsj9o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" height=200 allowfullscreen></iframe>
          </div>
          <p><br></p>
        </div>             
              </div>
  <p align="center"><a href="event.php"><button button class="btn videos-btn">More Videos</button></a></p>
  </center>
</section>


<p><br></p>

 <!-- Story Section -->
  <section>
    <h2 align="center" style="background-image: linear-gradient(orange, red); padding:15px;" class="display-4 titles">Stories</h2>
  </section>

  <section class="container-fluid">
    <center>
    <div class="row">
                        <div class="col-md-3 col-sm-3">
                    <div class="card" style="max-width: 18rem;">
                      <h5 class="card-title">Adesh Daga</h5>
                      <img class="card-img-top" src="dashboard/upload/members/default_person.png" height="200" width="300" alt="Card image cap">
                    
                      <div class="card-body">
                        <p align="left" class="card-text">My Dr. Neha Daga was felicitated on 1st Just ...</p>
                        <p align="center"><a href="#" class="btn btn-primary"  data-toggle="modal" data-target="#Story2">Continue Reading</a></p>
                      </div>
                    </div>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade" id="Story2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                          <div class="col-md-6 col-sm-6"><img src="dashboard/upload/members/default_person.png" height="200" width="200"></div>
                          
                          <div class="col-md-6 col-sm-6">
                              <p align="left">
                                  <b>Adesh Daga</b>
                              </p>
                              <p align="left">My Dr. Neha Daga was felicitated on 1st Just 2020  by the Tamilnadu Kerala Pondicherry (TKP) Pradeshik Maheshwari Mahila Mandal</p>
                              </div>
                        </div> 
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                      </div>
                    </div>
                    </div>

                              
                              <div class="col-md-3 col-sm-3">
                    <div class="card" style="max-width: 18rem;">
                      <h5 class="card-title">Narayan Maheswari</h5>
                      <img class="card-img-top" src="dashboard/upload/members/default_person.png" height="200" width="300" alt="Card image cap">
                    
                      <div class="card-body">
                        <p align="left" class="card-text">Chai Wale announces opening 16th outlet at Ri...</p>
                        <p align="center"><a href="#" class="btn btn-primary"  data-toggle="modal" data-target="#Story1">Continue Reading</a></p>
                      </div>
                    </div>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade" id="Story1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                          <div class="col-md-6 col-sm-6"><img src="dashboard/upload/members/default_person.png" height="200" width="200"></div>
                          
                          <div class="col-md-6 col-sm-6">
                              <p align="left">
                                  <b>Narayan Maheswari</b>
                              </p>
                              <p align="left">Chai Wale announces opening 16th outlet at Ritchie Street. On Monday 23 of nov 2020</p>
                              </div>
                        </div> 
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                      </div>
                    </div>
                    </div>

                              
                </div>
    <p><br></p>
    <p><a href="stories.php"><button button class="btn videos-btn">More Stories</button></a></p>
     </center>
  </section>


<p><br></p>

   <!-- Member BirthDays Section -->
  <section>
    <h2 align="center" style="background-image: linear-gradient(orange, red); padding:15px;" class="display-4 titles">Member Birthdays</h2>
  </section>
  
  <section class="container-fluid">
    <center>
    <div class="row">
        
        <!--For Today Fetching-->
                  <div class="col-md-3 col-sm-3">
              <div class="w3-card-4 card card-birth"  style="height: 370px; max-width: 200px;">
                <div class="card-img"><div class="text-block"></div>
                <img src="dashboard/upload/members/default_person.png" height="200" width="200"></div>
                <center>
                  <p></p>
                <div class="card-title text-secondary"><b>Tejas  Jhawar</b></div>
                <div class="card-text title text-dark"> Solapur 
                
                                <p>31-12-1983</p>
                
                </div>
                </center>
                <p></p>
              </div>
              <p><br></p>
            </div>
            
            
    </div>
    <p><br></p>
    <p align="center"><a button href="birthday.php" button class="btn videos-btn">Upcoming Birthdays</button></a></p>
    </center>
  </section> 



  <p><br></p>

   <!-- Tesitmonial Video -->
  <section>
    <h2 align="center" style="background-image: linear-gradient(orange, red); padding:15px;" class="display-4 titles">Testimonials</h2>
  </section>

  <section class="container">
    <p><br></p>
    <center>
      <div class="row">
                  <div class="col-sm-6 col-md-6">
              <iframe class="t_video" src="https://www.youtube.com/embed/JWLtzJk6QpE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
                      <div class="col-sm-6 col-md-6">
              <iframe class="t_video" src="https://www.youtube.com/embed/Xwz2w4qdz0o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
                </div>

      <p><br></p>
      <p><a href="testimonial.php" button class="btn videos-btn">More Videos</button></a></p>
    </center>
  </section>

  <p></p>


  <style>
  .icon-sec {
    padding-right: 68px;
}

 .footerText{
  text-align: left;
  margin-left: 50px;
 }

 @media screen and (max-width:768px){
    .footerText{
      margin-left: 0px !important;
    }   
  }
</style>
<section class="footer footer_res bg-dark youtube container-fluid-footer">
  <p><br></p>
  <div class="row">
    <div class="col-md-3" style="padding-right: 75px">
      <img src="assets/images/logo.png" height="150" width="220"><p></p>
      <div class="icon-sec">
                  <span class="social-icons"><a href="https://www.facebook.com/MCircleChennai" target="_blank"><img src="assets/images/fb.png" height="25" width="25"></a></span>
                <span class="social-icons"><a href="" target="_blank"><img src="assets/images/linkedin.png" height="25" width="25"></a></span>
                <span class="social-icons"><a href="" target="_blank"><img src="assets/images/youtube.png" height="25" width="25"></a></span>
                <p><br></p>
      </div>
    </div>

    <div class="col-md-3">
      <p class="footer-text" style="color: white;
    text-align: left;">
        Chennai address :<br>
                  R904, The Metrozone, Pilliyar Koil Street, JLN Road, Annanagar, Chennai 600040<br>
                <p><br></p>
      </p>
    </div>
    
    <div class="col-md-3">
      <p class="footer-text" style="color: white;
    text-align: left;">
        Solapur address :<br>
                  Solapur, India<br>
                <p><br></p>
      </p>
    </div>

    <div class="col-md-3">
      <span class="footer-link">
        <p class="footer_res footerText">
        <a style="color: white;" href="index.php">Home</a><br>
        <a style="color: white;" href="about.php">About us</a><br>
        <a style="color: white;" href="member.php">Members List</a><br>
        <a style="color: white;" href="event.php">Events</a><br>
        <a style="color: white;" href="contact.php">Contact</a><br>
        <a data-toggle="modal" style="color: white;" data-target="#exampleModals1" href="#">Start a Chapter</a><br>
        <a data-toggle="modal" style="color: white;" data-target="#exampleModalm1" href="#">Become a Member</a><br>
        <p><br></p>
      </p>
      </span>
    </div>

  </div>
</section>








<script>
  $(document).ready(function(){
    var header=document.getElementById("homex");
   header.classList.add("active");
  });
</script>
</body>
</html>
