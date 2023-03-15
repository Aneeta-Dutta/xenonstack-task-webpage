<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>
	<h1>Welcome</h1>


	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Soft Solution</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

	<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Services</h3>
        <p>Provides Services World Wide</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/img2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New Launches</h3>
        <p>Our Product Details</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/img3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>About Us</h3>
        <p>Learn about us</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About Us</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 md-6 col-12">
				<img src="images/img4.jpg" class="img-fluid aboutimg">
			</div>
			<div class="col-lg-6 md-6 col-12">
				<h2 class="display-4">We are Soft Solution</h2>
				<p class="py-3">Acquisition International, or AI as we are more commonly known, is an international, monthly digital business magazine committed to bringing its readers up to the minute news, comment and analysis. As the voice of modern business, here at AI we are dedicated to delivering vital updates to our corporate readers so that they remain ahead of the curve.</p>
				<a href="about.php" class="btn btn-outline-success">Read More</a>
			</div>
		</div>
	</div>
</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Our Services</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<div class="card">
				<img class="card-img-top" src="images/img3.jpg" alt="Card image">
					  <div class="card-body">
					    <h4 class="card-title">Person 1</h4>
					    <p class="card-text">Some example text.</p>
					    <a href="#" class="btn btn-primary">See Profile</a>
					 </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
					<div class="card">
				<img class="card-img-top" src="images/img3.jpg" alt="Card image">
					  <div class="card-body">
					    <h4 class="card-title">Person 2</h4>
					    <p class="card-text">Some example text.</p>
					    <a href="#" class="btn btn-primary">See Profile</a>
					 </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
					<div class="card">
				<img class="card-img-top" src="images/img3.jpg" alt="Card image">
					  <div class="card-body">
					    <h4 class="card-title">Person 3</h4>
					    <p class="card-text">Some example text.</p>
					    <a href="#" class="btn btn-primary">See Profile</a>
					 </div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Our Services</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-md-4 col-12">
				<img src="images/img5.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-3 col-md-4 col-12">
				<img src="images/img6.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-3 col-md-4 col-12">
				<img src="images/img7.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-3 col-md-4 col-12">
				<img src="images/img5.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-3 col-md-4 col-12">
				<img src="images/img6.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-3 col-md-4 col-12">
				<img src="images/img7.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-3 col-md-4 col-12">
				<img src="images/img5.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-3 col-md-4 col-12">
				<img src="images/img6.jpg" class="img-fluid pb-4">
			</div>
		</div>
	</div>
</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">User Form</h2>
	</div>

	<div class="w-50 m-auto">
		<form action="userinfo.php" methid="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Email Id</label>
				<input type="text" name="email" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Mobile No.</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Feedback</label>
				<textarea class="form-control" name="comments"></textarea>
			</div>
			<button type="submit" class="btn btn-outline-success">Submit</button>
		</form>
	</div>
</section>

<footer>
	<p class="p-3 bg-dark text-white text-center">@softsolution</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>