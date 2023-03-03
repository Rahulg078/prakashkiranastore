<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- nav start -->
<?php include 'navbar.php'; ?>
<!-- nav End -->

<div class="jumbotron">
  <h1 class="display-4">Hello, Viewer...</h1>
  <p class="lead">This is a simple user-friendly webiste component for calling extra attention to featured content or information.</p>
  <hr class="my-1">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-outline-primary text-center btn-lg " href="#" role="button">Learn more</a>
  </p>
</div>


<!-- about section banana hai-->

<section class="">
    <div class="" >
        <h2 class="text-center font-weight-bolder mb-5 text-warning bg-dark">About Us</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-12 col-lg-6">
                <img src="image/shop.jpg" style="margin-left:30%;" height="80%" width="60%" alt="">
            </div>
            <div class="col-md-6 col-12 col-lg-6">
           
                <h3 class="font-weight-bold display-4 text-primary">I'm Rahul Gupta :)</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus laboriosam fugiat minus eaque animi esse doloribus earum vitae. Dolor quibusdam sed assumenda veritatis!</p>
                <a href="about.php" class="btn btn-outline-primary">Check More</a>
                <hr>
                <p class="lead"><b>Phone: </b>+91- 758 080 3042</p>
                <p class="lead"><b>Gmail: </b><a href="rahulg6235035@gmail.com">rahulg6235035@gmail.com</a></p>
                
            </div>
            
               
        </div>
    </div>
</section>



     <!-- contact Start -->
     <section class="bg-success text-white">
        <div class="col-12 text-center">
           <h3 class="display-4 font-weight-bold py-2"><u>Contact Us</u></h3>
        </div>
        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post" class="action">
                <div class="form-group">
                    <label for="user">Username</label>
                    <input type="text" name="user" class="form-control" id="user" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="email">Email Id</label>
                    <input type="email" name="email" class="form-control" id="email" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile No.</label>
                    <input type="number" name="mobile" class="form-control" id="mobile" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="message">Message</label> <textarea name="message" id="message" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-dark mb-2">SUBMIT</button>
            </form>
        </div>
    </section>
   <!-- contact End -->

    <footer>
    <p class="p-3 bg-dark text-white text-center">prakashkiranastore&copy;copyright</p>
</footer>


</body>
</html