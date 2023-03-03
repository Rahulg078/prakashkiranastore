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
  <style>
               *{ margin: 0; padding:0; box-sizing: border-box; }
               .carousel-inner img{ width: 100%; height: 70vh;  }

               /* apne se bnaya */
               .smallimg{ width: 100%;  height: 250px!important;}
</style>
</head>
<body>

<!-- nav start -->
<?php include 'navbar.php'; ?>
<!-- nav End -->

<!-- Carousel start -->
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/aata.jpg" alt="aata(floor)" width="70%" height="90vh">
      <div class="carousel-caption"><h3>Aata (Floor) 5KG/10KG/25KG</h3><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptas vero laboriosam!</p></div>   
    </div>
    <div class="carousel-item">
      <img src="image/packed food.webp" alt="cake" width="70%" height="90vh">
      <div class="carousel-caption"><h3 class=" text-warning">Cake And Chocolate</h3><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptas vero laboriosam!</p></div>   
    </div>
    <div class="carousel-item ">
      <img src="image/Beverage.png" alt="Soft Drink" width="70%" height="90vh">
      <div class="carousel-caption"><h3>Cold drink / Soft Drink</h3><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptas vero laboriosam!</p></div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div><br/><br/>
<!-- Carousel End -->


<!-- Card-Start -->
    <div class="container-fluid">
        <div class="row p-2">
            <div class="col-md-3 col-sm-6 col-12">
                <div class="card" style="width: 18rem;">
                    <img src="../CSS/image/tata salt.jfif" class="card-img-top p-2" alt="Tata salt">
                    <div class="card-body bg-danger">
                        <p class="card-text lead"><b>Tata Salt</b>, 'Desh Ka Namak'.<br />branded iodized salt</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="card" style="width: 18rem;">
                    <img src="../CSS/image/aataa.png" height="80%" width="80%" class="card-img-top " alt="aata /(Floor)">
                    <div class="card-body">
                        <p class="card-text lead"><b>Aashirwaad</b>, Best Wheat Atta Brands In India</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="card" style="width: 18rem;">
                    <img src="../CSS/image/cat-1.png" class="card-img-top" alt="..">
                    <div class="card-body">
                        <p class="card-text mt-5 lead"><b>Onion</b>, is a vegetable that is the most widely cultivated species of the genus Allium .</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="card bg-warning" style="width: 18rem;">
                    <img src="../CSS/image/safola.webp" class="card-img-top " alt="...">
                    <div class="card-body">
                        <p class="card-text lead"><b>Saffola</b> is a heart care brand in India</p>
                    </div>
                </div>
            </div>
        </div>
    </div><br/><br/>
<!-- card end -->


<!-- jumbotron start -->
<div class="container-fluid">
    <div class="row bg-light float-md-right" style="background-color:rgba(125, 197, 181,0.6);">
        <div class="col-md-3">
            <div class="jumbotron">
                <h3 class="text-center text-uppercase bg-primary font-weight-bold">Grocery Shop</h3>
                <p class="lead text-center">Online Kirana store is a comprehensive platform to cater to the needs of
                    ever growing needs of consumers.</p>
                <a class="btn btn-outline-primary m-2" href="#" role="button">Learn more</a>
                <a class="btn btn-outline-primary" href="#" role="button">On Whatsapp</a>
            </div>
        </div>
        <div class="col-md-9 col-12">
            <div class="row" style="background-color: rgb(94, 221, 193);">
                <div class="col-lg-4 col-md-6 col-6 ">
                    <img src="../CSS/image/cat-2.png" alt="">
                </div>
                <div class="col-lg-4 col-md-6 d-md-block d-none">
                    <img src="../CSS/image/cat-1.png" alt="">
                </div>
                <div class="col-lg-4 col-md-6 col-6">
                    <img src="../CSS/image/feature-img-2.png" class="mt-4" alt="">
                </div>
            </div>
            <div class="row" style="background-color: rgb(93, 241, 193);">
                <div class="col-lg-4 col-md-6 d-md-block d-none">
                    <img src="../CSS/image/feature-img-2.png" alt="">
                </div>
                <div class="col-lg-4 col-md-6 col-6 mt-4 mt-3">
                    <img src="../CSS/image/feature-img-3.png" alt="">
                </div>
                <div class="col-lg-4 col-md-6 col-6 mt-3">
                    <img src="../CSS/image/feature-img-1.png" alt="">
                </div>
            </div>
        </div>
    </div>
    </div><br/><br/>
<!-- jumbotron End -->


<!-- our services Start-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-5 text-center">
                <h3 class="display-4 font-weight-bold mt-3">OUR SERVICES</h3>
            </div>
        </div>
        <div class="row p-5" >
            <div class=" col-md-3 col-6">
                <img src="../CSS/image/feature-img-3.png" alt="">
                <h2 class="text-danger mt-2">Online Store</h2>
                <p>We would like to tell you <b>Dear Viewer.</b> <br />Our Shop Is available for 24 X 7</p>
            </div>
            <div class=" col-md-3 col-6 text-center">
                <img src="../CSS/image/feature-img-1.png" alt="">
                <h2 class="text-danger text-center">Fresh Fruits</h2>
                <p>We would like to tell you Dear Viewer. <br />We have fresh fruits Everytime.</p>
            </div>
            <div class=" col-md-3 col-6 " st>
                <img src="../CSS/image/feature-img-2.png" alt=""><br /><br />
                <h2 class="text-danger text-center"> Home Delivary</h2>
                <p>We would like to tell you Dear Viewer. <br />Our Shop Is available for <b>24 X 7</b></p>
            </div>
            <div class=" col-md-3 col-6 text-center p-1">
                <img src="../CSS/image/loader-img.gif" alt=""><br /><br /><br />
                <h2 class="text-danger text-center">Book & E-book</h2>
                <p>Here are many e-books for shopping and reading..</p>
            </div>
        </div>
    </div><br/><br/>
<!-- our services End-->


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
</html>