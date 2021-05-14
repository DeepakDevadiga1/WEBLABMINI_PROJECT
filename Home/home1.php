<!DOCTYPE html>
<html  lang="en"  >
<head>
	<title>HOME</title>
	<meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" type="text/css" href="home.css">
	<!-- Bottstrape------------------------------------------------------------------------------- -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Bootstrape -------------------------------------------------------------------------- -->
     <script src='https://kit.fontawesome.com/a076d05399.js'></script> 
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- Angular --------------------------------------------------------------------------------------------------------- -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.2/angular.min.js"></script>
	<script type="text/javascript" src="home.js"></script>
	<!-- Angular------------------------------------------------------------------------------------------------------------- -->
  <!-- Map -->
   
  <!-- Map -->
</head>
<body  ng-app="Home"  ng-controller="mycontr" >
 <div  class="container mt-3">
	<!-- Nav tabs==================================================================================== -->
  <!-- <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" href="#home">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#Cart" >Cart</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#About">About Us</a>
    </li>
  </ul> -->

  <div class="tab-content">
  <!-- ======================================================Home Page=============================== -->
<div id="home" class="container tab-pane active " >
  <!-- Navigation============================================================ -->
	<!-- heading------------------------------------------------------------------------ -->
  <div class="jumbotron text-center" >
	<button type="button" class="btn btn-dark" style="float:right;" ng-click="logout()">logout</button>
	<h1>Welcome  back  {{res['username']}} </h1>
  </div>
    <!-- Heading------------------------------------------------------------------------- -->

    <!-- Contents-------------------------------------------------------------------------- -->
    <div class="container">
    <h2>Booking form</h2>
    <hr>
    <div>
      <div>
      <iframe  id="Service-map"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124440.39881927885!2d74.7820230583424!3d12.922982868390962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba35a4c37bf488f%3A0x827bbc7a74fcfe64!2sMangalore%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1609233392647!5m2!1sen!2sin" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </div>
  <hr>
  <div>
    <form method="POST" action="../Services/userorder_data.php" enctype="multipart/form-data">
    <div class="form-group">
    <label for="name" >Product Name:</label>
    <input type="text" class="form-control"  placeholder="Enter Product Name" name="Product" required>
    </div>

    <hr>
    <div class="form-group">
    <label for="place" >Product Location:</label>
     <input type="text"   class=" form-control"  placeholder="Enter the place" name="poduct_location" required>
     </div>

     <hr>

    <div class="form-group">
      <label for="delivery" >Delivery Location:</label>
      <input type="text"  class=" form-control"  placeholder="Enter the place" name="delivery_location" required>
    </div>

    <hr>

    <div class="form-group">
      <label for="delivery" >Mobile No:</label>
      <input type="number"  class=" form-control"  placeholder="Mobile No" name="mobile" required="number">
    </div>

    <hr>

    <div class="form-group">
    <label class="form-label" for="customFile" >Product Image:</label>
    <input type="file"  accept='image/*' class="form-control"  name="uplodedimage" />
    <!-- ===============================Image Display ================================-->
    <div   ng-repeat="step in stepsModel">
         <img   class="thumb"  style="width:400px;height: 110px" ng-src="{{step}}"   />
    </div>
    <!-- ===============================Image Display ================================-->
  </div>

  <hr>


    <button   class="btn btn-primary" type="submit" name="upload" style="background-color: black;">Order Now</button>
  </form>
  </div>
</div>
</div>
  <!-- Contents======================================================================= -->
<!-- ===========================================Home page========================================================= -->

<!-- ==============================================Cart Page===================================================== -->

<!-- ==============================================Cart Page===================================================== -->

<!--========================================== About Us ========================================================= -->
<!-- <div id="About" class="container tab-pane fade" >
	<h1>About Us</h1>
	
</div> -->

<!--========================================== About Us ========================================================= -->
</div>
</div>
</body>
 
</html>
