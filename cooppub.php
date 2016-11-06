<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>AGT Publications | ALGORITHMS AND COMPLEXITY GROUP</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

<!-- Favicon --> 
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Web Fonts -->
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="assets/css/headers/header-v4.css">
	<link rel="stylesheet" href="assets/css/footers/footer-v1.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="assets/plugins/animate.css">
	<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
   

	<!-- CSS Page Style -->
	<link rel="stylesheet" href="assets/css/pages/blog_magazine.css">

	

	<!-- CSS Customization -->
	<link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
	<div class="wrapper" >
		<!--=== Header v4 ===-->
		<div class="header-v4" >
			<!-- Topbar -->
		<div class="topbar-v1" >
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<ul class="list-inline top-v1-contacts">
								<li>
									<i class="fa fa-envelope"></i> Email: <a href="mailto:aco@cs.sfu.ca">aco@cs.sfu.ca</a>
								</li>
							</ul>
						</div>
                       <div class="col-md-6">
							<ul class="list-inline top-v1-data">
								<li><a href="#"><i class="fa fa-home"></i></a></li>
								<li><a href="#"><i class="fa fa-globe"></i></a></li>
								<li><a href="#">Quicklinks</a></li>
							
							</ul>
						</div>
						
					</div>
				</div>
			</div>
			<!-- End Topbar -->

			<!-- Navbar -->

			 <div class="navbar navbar-default mega-menu" role="navigation">
				<div class="container" >
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header" >
							<div class="row">
							 
							<div class="col-md-12" >
                                <h1 style="font-size:30px;font-family:arial black;"><b>ALGORITHMS AND COMPLEXITY GROUP</b></h1>
							</div>
							
						</div>
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="full-width-menu">ALGORITHMS AND COMPLEXITY GROUP</span>
							<span class="icon-toggle">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</span>
						</button>
					</div>
				</div>

				<div class="clearfix"></div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-responsive-collapse">
					<div class="container">
						<ul class="nav navbar-nav">
							<!-- Home -->
							<li class="dropdown ">
								<a href="index.php" >Home</a>
								
							</li>
							 
						    
									
                            <li class="dropdown">
								<a href="agt.php" >
									Algorithmic Graph Theory
								</a>
								<ul class="dropdown-menu">
								  <li ><a href="agt.php">PEOPLE</a></li>
								  <li ><a href="agtpub.php">PUBLICATIONS</a></li>
								</ul>
							</li>
							<!-- Blog -->
							<li class="dropdown">
								<a href="csp.php" >
									Complexity and CSP
								</a>
								<ul class="dropdown-menu">
								   <li ><a href="csp.php">PEOPLE</a></li>
								   <li ><a href="csppub.php">PUBLICATIONS</a></li>
								</ul>
			                 </li>
							
							<li class="dropdown active">
								<a href="coop.php" >
									Combinatorial Optimization
								</a>
								<ul class="dropdown-menu">
								   <li ><a href="coop.php">PEOPLE</a></li>
								   <li ><a href="cooppub.php">PUBLICATIONS</a></li>
								   <li ><a href="cooppro.php">PROJECTS</a></li>
								</ul>
								
							</li>
							
							<li class="dropdown">
								<a href="contact.php" >
									Contact us
								</a>
								
							</li>
							<!-- End Demo Pages -->
						</ul>

						<!-- Search Block -->
						<ul class="nav navbar-nav navbar-border-bottom navbar-right">
							<li class="no-border">
								<i class="search fa fa-search search-btn"></i>
								<div class="search-open">
									<div class="input-group animated fadeInDown">
										<input type="text" class="form-control" placeholder="Search">
										<span class="input-group-btn">
											<button class="btn-u" type="button">Go</button>
										</span>
									</div>
								</div>
							</li>
						</ul>
						<!-- End Search Block -->
					</div><!--/end container-->
				</div><!--/navbar-collapse-->
			</div>
			<!-- End Navbar -->
		</div>
		<!--=== End Header v4 ===-->
<!--=== Content Part ===-->
		 <div class="container content-sm">
		    <div class="headline headline-center"><h2>Selected Publications</h2></div>	
            <!-- Begin Easy Block --> 
           <?php
			  include_once 'config/db.php';
			 $stmt = $conn->prepare('SELECT ID, year,publication FROM cooppub ORDER BY year DESC ');
			 $stmt->execute();
			 $sample=1990;
			if($stmt->rowCount() > 0)
			 {
			  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			  {
			   extract($row);
			    if($year!=$sample)
				{
                   $sample=$year;					
			?>	
            <div class="headline"><h2><?php echo $year ?></h2></div>
            <?php 
                }
             ?>				
            <div class="row">
				       <ul>
					     <li><?php echo $publication ?> </li>
						 
					   </ul>  
            </div>
			<?php
			  }
			 } 
			 else
			 {
			  ?>
					<div class="col-md-12">
					 <div class="alert alert-warning">
						 <span class="glyphicon glyphicon-info-sign"></span> &nbsp; No Data Found ...
						</div>
					</div>
					<?php
			 }
			 
			?>

		
		
		
		</div><!--/container-->
		<!--=== End Content Part ===-->

		<!--=== Footer Version 1 ===-->
		    <?php include_once('includes/footer.php') ; ?>
		<!--/footer-->
            <!--/copyright-->
               <?php include_once('includes/copyrights.php') ; ?>   
			</div><!--/copyright-->
                 
			
		</div>
	</div><!--/wrapper-->

	


	<!-- JS Global Compulsory -->
	<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
	<script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>

	<!-- JS Customization -->
	<script type="text/javascript" src="assets/js/custom.js"></script>
	
		

	</body>
	</html>