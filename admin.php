<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:login.html");
} else {
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Admin | ALGORITHMS AND COMPLEXITY GROUP</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Web Fonts -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="assets/css/headers/header-v7.css">
	<link rel="stylesheet" href="assets/css/footers/footer-v1.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="assets/plugins/animate.css">
	<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">


	<!-- CSS Customization -->
	<link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
	<div class="wrapper">
		<!--=== Header v7 Left ===-->
		<div class="header-v7 header-left-v7">
			<nav class="navbar navbar-default mCustomScrollbar" role="navigation" data-mcs-theme="minimal-dark">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="menu-container">
					<!-- Toggle get grouped for better mobile display -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- End Toggle -->

					<!-- Logo -->
					<div class="logo">
						<a href="index.php">
							<img id="logo-footer" style="border-radius:10px;" class="footer-logo" src="assets/img/sfu.jpg" width="300px" height="160px" alt="">
						
						</a>
					</div>
					<!-- End Logo -->
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-responsive-collapse">
					<div class="menu-container">
						<ul class="nav navbar-nav">
							<!-- Home -->
							<li>
							    <a href="index.php">
									Home
								</a>
									
							</li>
							<!-- End Home -->

							<li class="dropdown ">
								<a href="admin.php" >
									People
								</a>
									
							</li>
						     <li class="dropdown ">
								<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
									Publications
								</a>
								<ul class="dropdown-menu">
                                    <li><a href="admin/publications/agtpub.php">AGT</a></li>
                                    <li><a href="admin/publications/csppub.php">CSP</a></li>
									<li><a href="admin/publications/cooppub.php">COOP</a></li>
									
								</ul>	
							</li>
							<li class="dropdown">
								<a href="admin/events/displayevents.php">
									Events
								</a>
									
							</li>
							<li class="dropdown">
								<a href="admin/projects/projects.php" >
									Projects
								</a>
									
							</li>
							 <li> <a href="logout.php">
									Logout
								</a></li>


							
						</ul>

				
						<p class="copyright-text">ALGORITHMS AND COMPLEXITY GROUP &copy;  2016 All Rights Reserved.</p>
					</div>
				</div>
				<!-- End Navbar Collapse -->
			</nav>
		</div>
		<!--=== End Header v7 Left ===-->
        <div class="content-side-right">      
	       <div class="container content">
			<div class="row headline margin-bottom-35">
				<div class="col-md-4">
					<form class="reg-page" action="admin/people/add/newagt.php" enctype="multipart/form-data" method="POST">
						<div class="headline">
							<h2>Add AGT Member</h2>
						</div>
                         
						
						<div class="input-group margin-bottom-20">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" placeholder="FULLNAME" name="fullname" class="form-control"required>
						</div>
						<div class="input-group margin-bottom-20">
							<span class="input-group-addon"><i class="fa fa-file-image-o "></i></span>
							<input type="file" placeholder="upload file" name="img" class="form-control" required>
						</div>
                         	<div class="input-group margin-bottom-20">
							<span class="input-group-addon"><i class="fa fa-link"></i></span>
							<input type="url" placeholder="Link" name="link" class="form-control" required>
						</div>
							<div class="input-group margin-bottom-20">
							<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
							<input type="text" placeholder="Position" name="position" class="form-control" required>
						</div>
						<div class="row">
							
							<div class="col-md-6">
								<button class="btn-u pull-right" type="submit">ADD</button>
							</div>
						</div>

					</form>
				</div>
				<div class="col-md-4">
					<form class="reg-page" action="admin/people/add/newcsp.php"  enctype="multipart/form-data" method="POST">
						<div class="headline">
							<h2>Add CSP Member</h2>
						</div>

						<div class="input-group margin-bottom-20">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" placeholder="FULLNAME" name="fullname" class="form-control" required>
						</div>
						<div class="input-group margin-bottom-20">
							<span class="input-group-addon"><i class="fa fa-file-image-o "></i></span>
							<input type="file" placeholder="upload file" name="img" class="form-control" required>
						</div>
                         	<div class="input-group margin-bottom-20">
							<span class="input-group-addon"><i class="fa fa-link"></i></span>
							<input type="url" placeholder="Link" name="link" class="form-control" required>
						</div>
							<div class="input-group margin-bottom-20">
							<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
							<input type="text" placeholder="Position" name="position" class="form-control" required>
						</div>
						<div class="row">
							
							<div class="col-md-6">
								<button class="btn-u pull-right" type="submit">ADD</button>
							</div>
						</div>

					</form>
				</div>
				<div class="col-md-4">
					<form class="reg-page" action="admin/people/add/newcoop.php" method="POST" enctype="multipart/form-data">
						<div class="headline">
							<h2>Add COOP Member</h2>
						</div>

						<div class="input-group margin-bottom-20">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" placeholder="FULLNAME" name="fullname" class="form-control" required>
						</div>
						<div class="input-group margin-bottom-20">
							<span class="input-group-addon"><i class="fa fa-file-image-o "></i></span>
							<input type="file" placeholder="upload file" name="img" class="form-control" required>
						</div>
                         	<div class="input-group margin-bottom-20">
							<span class="input-group-addon"><i class="fa fa-link"></i></span>
							<input type="url" placeholder="Link" name="link" class="form-control" required>
						</div>
							<div class="input-group margin-bottom-20">
							<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
							<input type="text" placeholder="Position" name="position" class="form-control" required>
						</div>
						<div class="row">
							
							<div class="col-md-6">
								<button class="btn-u pull-right" type="submit">ADD</button>
							</div>
						</div>

					</form>
				</div>
			</div><!--/row-->
			<div class="headline margin-bottom-35"><h2>AGT People</h2></div>
			
			     <!-- Easy Blocks v2 -->
        <div class="row">
            <!-- Begin Easy Block --> 
           <?php
			  include_once 'config/db.php';
			 $stmt = $conn->prepare('SELECT ID, fullname, position, picture,link FROM peopleagt ORDER BY ID DESC');
			 $stmt->execute();
			 
			 if($stmt->rowCount() > 0)
			 {
			  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			  {
			   extract($row);
			?>			
            <div class="col-md-3 col-sm-6 md-margin-bottom-40">
                <div class="easy-block-v2">
                    <img alt="" src="assets/img/agtpeople/<?php echo $row['picture']; ?>" width="30px" height="200px">       
                    <h3><?php echo $fullname ;?></h3>
                    <ul class="list-unstyled">
                        <li><span class="color-green">Position:</span> <?php echo $position ;?></li>
                       
                    </ul>    
                     <a class="btn-u btn-u-sm" href="<?php echo $link;?>">Know More</a>
					<a class="btn-u btn-u-sm" href="admin/people/edit/editagt.php?edit_id=<?php echo $row['ID']; ?>" onclick="return confirm('sure to edit ?')" >Edit</a>
					<a class="btn-u btn-u-sm" href="admin/people/delete/deleteagt.php?delete_id=<?php echo $row['ID']; ?>" onclick="return confirm('sure to delete ?')">Delete</a>
                </div>  
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

		</div>	<!--/row-->
		<div class="headline margin-bottom-35"><h2>CSP People</h2></div>
			
			     <!-- Easy Blocks v2 -->
        <div class="row">
            <!-- Begin Easy Block --> 
           <?php
			  include_once 'config/db.php';
			 $stmt = $conn->prepare('SELECT ID, fullname, position, picture ,link FROM peoplecsp ORDER BY ID DESC');
			 $stmt->execute();
			 
			 if($stmt->rowCount() > 0)
			 {
			  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			  {
			   extract($row);
			?>			
            <div class="col-md-3 col-sm-6 md-margin-bottom-40">
                <div class="easy-block-v2">
                    <img alt="" src="assets/img/csppeople/<?php echo $row['picture']; ?>" width="30px" height="200px">       
                    <h3><?php echo $fullname ;?></h3>
                    <ul class="list-unstyled">
                        <li><span class="color-green">Position:</span> <?php echo $position ;?></li>
                       
                    </ul>    
                     <a class="btn-u btn-u-sm" href="<?php echo $link; ?>">Know More</a>
					<a class="btn-u btn-u-sm" href="admin/people/edit/editcsp.php?edit_id=<?php echo $row['ID']; ?>" onclick="return confirm('sure to edit ?')" >Edit</a>
					<a class="btn-u btn-u-sm" href="admin/people/delete/deletecsp.php?delete_id=<?php echo $row['ID']; ?>" onclick="return confirm('sure to delete ?')">Delete</a>
                </div>  
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

		</div>	<!--/row-->
		<div class="headline margin-bottom-35"><h2>COOP People</h2></div>
			
			     <!-- Easy Blocks v2 -->
        <div class="row">
            <!-- Begin Easy Block --> 
           <?php
			  include_once 'config/db.php';
			 $stmt = $conn->prepare('SELECT ID, fullname, position, picture,link FROM peoplecoop ORDER BY ID DESC');
			 $stmt->execute();
			 
			 if($stmt->rowCount() > 0)
			 {
			  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			  {
			   extract($row);
			?>			
            <div class="col-md-3 col-sm-6 md-margin-bottom-40">
                <div class="easy-block-v2">
                    <img alt="" src="assets/img/cooppeople/<?php echo $row['picture']; ?>" width="30px" height="200px">       
                    <h3><?php echo $fullname ;?></h3>
                    <ul class="list-unstyled">
                        <li><span class="color-green">Position:</span> <?php echo $position ;?></li>
                       
                    </ul>    
                    <a class="btn-u btn-u-sm" href="<?php echo $link; ?>">Know More</a>
					<a class="btn-u btn-u-sm" href="admin/people/edit/editcoop.php?edit_id=<?php echo $row['ID']; ?>" onclick="return confirm('sure to edit ?')" >Edit</a>
					<a class="btn-u btn-u-sm" href="admin/people/delete/deletecoop.php?delete_id=<?php echo $row['ID']; ?>" onclick="return confirm('sure to delete ?')">Delete</a>
                </div>  
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

		</div>	<!--/row-->
		</div><!--/container-->
	      
		</div>
		<!--=== End Content Side Left Right ===-->
	</div><!--/wrapper-->

	

	<!-- JS Global Compulsory -->
	<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
	<script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>

	<script type="text/javascript" src="assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<!-- JS Customization -->
	<script type="text/javascript" src="assets/js/custom.js"></script>

	<!--[if lt IE 9]>
	<script src="assets/plugins/respond.js"></script>
	<script src="assets/plugins/html5shiv.js"></script>
	<script src="assets/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->
</body>
</html>
<?php
}
?>