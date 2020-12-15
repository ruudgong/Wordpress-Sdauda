<!doctype html>
<html>
<head>
   <!-- Required meta tags -->
    	<!--required meta tags-->
			<meta charset="UTF-8">
			<meta name="description" content="sample_site Login_page">
			<meta name="keyword" content="HTML, CSS, BOOTSRAP">
			<meta name="author" content="Dauda Suleiman">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			  
 
		<!--page title-->
			<title>sample_site Login_page</title>
			
		<!--css link-->
			<link rel="stylesheet" href="style.css">
			
		<!-- Bootstrap CSS -->
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
			
  </head>
  
	
	 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	
<body>
<div id="big_wrapper">

		<!--Navigation for first navbar using bootstrap-->
	<nav class="navbar navbar-expand-sm bg-primary navbar-dark justify-content-end">
	
		<!--Navigation link-->	
			
				<ul class="nav navbar-nav ">
					<li class="nav-item">
						<a class="nav-link" href="register.php">Register</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="login.php">Login</a>
					</li>
				</ul>
				
		
	</nav>
		
		<!--Navigation using bootstrap-->
	<nav class="navbar navbar-expand-sm bg-light navbar-light justify-content-end">
  
		<!-- Brand -->
			<a class="navbar-brand" href="#"><h5>OPUUSA <br>Osogbo Progressive Union USA</br></h5></a>

		<!-- Links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link Active" href="index.php">Home</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
					Chapters
					</a>
		<!--Dropdown link-->
						<div class="dropdown-menu">
							<a class="dropdown-item" href="executive.php">Executive Committee</a>
							<a class="dropdown-item" href="atlanta.php">Atlanta</a>
							<a class="dropdown-item" href="california.php">California</a>
							<a class="dropdown-item" href="#">Chicago</a>
							<a class="dropdown-item" href="#">Dallas</a>
							<a class="dropdown-item" href="#">Florida</a>
							<a class="dropdown-item" href="#">Houston</a>
							<a class="dropdown-item" href="#">Maryland</a>
							<a class="dropdown-item" href="#">New York</a>
							<a class="dropdown-item" href="#">Philadelphia</a>
						</div>
				</li>	
				

		<!-- Dropdown -->
				<li class="nav-item">
					<a class="nav-link" href="constitution.php">OPUUSA Constitution</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="gallery.php">Gallery</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
					Social events
					</a>
		<!--Dropdown link-->
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#">National Conventions</a>
							<a class="dropdown-item" href="#">2019 Chicago Convention</a>
						</div>			
				</li>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
					Projects
					</a>
		<!--Dropdown link-->
						<div class="dropdown-menu">
							
						</div>				
					
				</li>
			</ul>
		
	</nav>
	
		<div id="login_header">
		
				<b>My Account</b><p>
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="pages.php">pages</a></li>
					<li>Page Titile</li>
				</ul>
			</nav>
		</div>
		
		
		
		
		
		
		
		<div class="login">
		
				<b>Use a local account to log in.</b><p>
				
				<hr/>
				
			<form class="form-horizontal" action="/action_page.php">
			  <div class="form-group">
				<label class="control-label col-sm-2" for="email"><b>Email</b></label>
				<div class="col-sm-10">
				  <input type="email" class="form-control form-control-lg" id="email" required>
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-sm-2" for="pwd"><b>Password</b></label>
				<div class="col-sm-10">
				  <input type="password" class="form-control form-control-lg" id="pwd" required>
				</div>
			  </div>
			 
				<div class="row">
					<div class="col">
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
							  <div class="checkbox">
								<label><input type="checkbox"> Remember me</label>
							  </div>
							</div>
						</div>
					</div>
					
					<div class="col">
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
							  <button type="submit" name="submit" class="btn btn-primary">Login</button>
							</div>
						</div>
					</div>
				</div>
			 
			  
				
			</form> 
		</div>
		
 <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <form class="form-inline" action="/action_page.php">
   <div class="form-group">
    <input class="form-control mr-sm-2" type="text" placeholder="Your Email">
    <button class="btn btn-primary" type="submit">Subscribe</button>
  </form> 
</nav>  
 

 </div>
	
</body>
</html>