<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
	<link rel="stylesheet" href="stylesheet5.css">
	<link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	  
   


 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
	
	
</head>


<body>
<header>
<!----------------------------------------first nav--->
		 <div class="koko" >
			          <nav class="animated fadedown" >
			                <a class="hi" href="#" id="welcome">Home</a>
			                <a class="hi"href="#">Hire Car</a>
			                <a class="hi"href="#">Car Spa</a>
			                <a class="hi"href="#">Innovation</a>
			                <a class="hi"href="#">About Us </a>
			                <a class="hi"href="="  id="lo"> |  WoorthWheels</a>


			           </nav>
			</div>
			

	

</header>



		<div id="top"  style="height: 60px; margin-top: 10px; margin-bottom: 10px; padding-top: 5px;  padding-bottom: 5px;margin-right: -150px;">
				<div class="container"  style=" height: 100px; padding-bottom: px; ">
					
					<div class=  style="padding-top: 20px; padding-left: -10px; position: absolute;">
						<!--<ul class="menu" style="padding-top: 20px; padding-left: -10px; position: absolute;">
							<li>
								<a href="customer_login.php">LOGIN</a>
							</li>

							<li>
								<a href="checkout.php">My Account</a>
							</li>
							<li>
								<a href="cart.php">GoToCart</a>
							</li>
							<li>
								<a href="checkout.php">Login</a>
							</li>
						</ul>--
                                   <a href="cart.php">GoToCart</a>-->
				                      <div class="col"  style="float: right;  margin-top: 10px;  position: absolute; padding-top: 0px; margin-right:0px; padding-right: 20px;   transform: translateX(8%);" >
				                      	  <div style="float: left; padding-top:10px ; margin-left:-15px; ">
												<a href="cart.php">GoToCart</a>
										</div>
										<a href="checkout.php" style="padding-bottom: 0px;padding-left: 750px;  padding-top:10px ;"> 4 items in your cart |total price:$300</a>
										<a href="#" class="btn btn-success btn-sm" style="margin-top:0px;  padding-right: 20px;">welcome</a>
										
									</div>

						
					</div>
					
				                     <!-- <div class="col"  style="float: right; padding-left: 950px; margin-top: 0px; ">
										
										<a href="checkout.php" style="padding-bottom: 50px;"> 4 items in your cart |total price:$300</a>
										<a href="#" class="btn btn-success btn-sm" style="margin-top:0px;  ">welcome</a>
										
									</div> -->

                      

				</div>
				
			</div>


			



   

 



<!----------------------------------------modal begins here--->




<div class="container">
     
		  <!-- Trigger the modal with a button -->            <!--  t      r  b   l-->
		  <div style="background:black;  font-size: 30px; margin:0px 40px 30px 10px; padding-left: 120px; height: 60px; margin-top: -50px; width: 2000px; margin-left: -130px; ">
		 <button  type="button" class="btn btn-default btn-lg" id="myBtn" style="background: black; color: white; transform: translateX(-20%); margin-bottom: 20px; margin-top: -3px; padding-bottom: 10px;">Login</button>
         </div>
  <!-- Modal -->
	 <div class="modal fade" id="myModal" role="dialog">
			    <div class="modal-dialog">
			    
		      <!-- Modal content-->
				     <div class="modal-content"  style="background: black; margin-left: -100px;">
						         <div class="modal-header" style="padding:35px 20px;">
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          <h4><span class="glyphicon glyphicon-lock"></span> OPEN FILTER</h4>
						        </div>
						        <div class="modal-body" style="padding:40px 80px;">


							         <!--<form role="form">
							            <div class="form-group">
							              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
							              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
							            </div>
							            <div class="form-group">
							              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
							              <input type="text" class="form-control" id="psw" placeholder="Enter password">
							            </div>
							            <div class="checkbox">
							              <label><input type="checkbox" value="" checked>Remember me</label>
							            </div>
                                         -->
                                        <div class="filter" >
                                             <h4>Body Style</h4>
                                             <p>
	                                             <button class="btn filter_btn">Sedan</button>
	                                             <button  class="btn filter_btn">Hatchback</button>
	                                             <button class="btn filter_btn">Sportsback</button>
	                                             <button  class="btn filter_btn">SUV</button>
                                             </p>

                                              <h4>Brand  </h4>
                                             <p>
	                                             <button class="btn filter_btn">Audi</button>
	                                             <button  class="btn filter_btn">BMW</button>
	                                             <button class="btn filter_btn">MG HECTOR</button>
	                                             <button  class="btn filter_btn">HONDA</button>
                                             </p>

                                              <h4>Budget</h4>
                                             <p>
	                                             <button class="btn filter_btn">Upto 10L</button>
	                                             <button  class="btn filter_btn">20L-30L</button>
	                                             <button class="btn filter_btn">30L-40L</button>
	                                             <button  class="btn filter_btn">Above 40L </button>
                                             </p>
                                        </div>

							       
							              <!--<button type="submit" class="btn  btn-block"><span class="glyphicon glyphicon-off"></span> SHOW ALL RESULTS</button>-->
							          </form>
				               </div>
							        <div class="modal-footer">
							          <button type="submit" class="btn btn-block susu" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> SHOW ALL RESULTS</button>
							         <!-- <p>Not a member? <a href="#">Sign Up</a></p>
							          <p>Forgot <a href="#">Password?</a></p>-->
							        </div>
				     </div>
		  </div>

      
   </div>
 </div> 



<div class="container"  style="position: absolute; padding-left: 200px; padding-bottom: 200px; padding-top: 50px; ">
  <h2</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="cars7.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="cars5.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="car9.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!----------------------------------------store front here--->
<div id="hot">
	<div class="box">
		<div class="container">
			<div  class="col-md-12">
				<h2>Our latest Products</h2>

		     </div>
	    </div>

<!--	<div id="content" class="container">
		 <div class="row">
		 	 <div class="col-sm-4 col-sm-6 single">

             


              </div>


		 	</div>


		 </div>-->


	</div>

7z

	 <div id="content" class="container">
		 <div class="row">
		 	 <div class="col-sm-4 col-sm-6 single">
                 <div class="product">
                 	<a href="details.php">
                 		<img src="Audi-A8L.png" class="img-responsive">

                 	</a>
                    <div class="text">
                    	<h3>
                    		<a href="details">
                    			Audi
                    		</a>
                    	</h3>

                 </div>
		 	 </div>
         </div>
     </div>

 <!----------------------------------------store front here--->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<!--<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>-->
	<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});

/*carousel js*/



</script>

</body>
</html>