<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Kapsoya Sanitiser Booking Services</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">KAPSOYA SANITISER</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
		  <li class="nav-item active">
            <a class="nav-link" href="booksanitiser.php">Book Sanitiser</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="viewsanitiser.php">View Sanitiser</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header style="text-align:center;" class="jumbotron my-4">
      <p class="lead">
        <form style="width:90%;background-color:white;color:black;text-align:center;" action="sanitiser.php" method="post">
            <fieldset>
                <legend><h3>Sanitiser Booking Page</h3></legend>
                PHONENUMBER<br/>
                <input style="width:60%;text-align:center;" type="text" name="simu" required="required" placeholder="the buyers phone number goes here"/>
                <br/><br/>
                QUANTITY OF SANITISER<br/>
                <input style="width:60%;text-align:center;" type="text" name="ngapi" required="required" placeholder="enter the quantity of sanitiser in Litre(s)"/>
                <br/><br/>
				SELECT TYPE OF SANITISER<br/>
                <select style="width:60%;text-align:center;" name="fobe">
                    <option>Lemon Flavour</option>
                    <option>Strawberry Flavour</option>
                    <option>Mango Flavour</option>
                    <option>Mixed Fruit Flavour</option>
                </select>
                <br/><br/>
                <input style="width:70%;text-align:center;background-color:green;color:white;" type="submit" value="Book Sanitizer"/>
            </fieldset>
        </form>

	  </p>
    </header>


  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; enosoft company</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
