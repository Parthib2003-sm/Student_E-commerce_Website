<?php include("header.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>InsiteXperience | Store</title>
</head>
<body class="bg-dark">





    <!-- Jumbotron -->
    <div class="bg-primary text-white py-5">
      <div class="container py-5">
        <h1>
          Best products & <br />
          brands in our store
        </h1>
        <p>
          Trendy Products, Factory Prices, Excellent Service
        </p>
        <button type="button" class="btn btn-outline-light">
          Learn more
        </button>
        <button type="button" class="btn btn-light shadow-0 text-primary pt-2 border border-white">
          <span class="pt-1">Purchase now</span>
        </button>
      </div>
    </div>
    <!-- Jumbotron -->














  <div class="container my-5">
    <div class="row">
      
      <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
        <form action="manage_cart.php" method="POST">
          <div class="card w-100 my-2 shadow-2-strong">
          <img src="images/products1.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body text-center d-flex flex-column">
              <h5 class="card-title mt-2">Apple MacBook Air Laptop M1 chip, 13.3-inch/33.74 cm Retina Display, 8GB RAM, 256GB SSD Storage</h5>
              <p class="card-text lead mt-2">Price: Rs.73,990</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-primary shadow-0 me-1 ">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="item 1 (laptop)">
              <input type="hidden" name="Price" value="73990">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
        <form action="manage_cart.php" method="POST">
          <div class="card w-100 my-2 shadow-2-strong">
          <img src="images/products2.png" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body text-center d-flex flex-column">
              <h5 class="card-title mt-2 mb-5">CLASS 12 | PHYSICS | PART 1 & 2 | ENGLISH MEDIUM</h5>
              <p class="card-text lead mt-3">Price: Rs.163</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-primary shadow-0 me-1 mt-1">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="item 2 (Physics book)">
              <input type="hidden" name="Price" value="163">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
        <form action="manage_cart.php" method="POST">
          <div class="card w-100 my-2 shadow-5-strong">
          <img src="images/products3.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body text-center d-flex flex-column">
              <h5 class="card-title  mb-5">Database Management Systems</h5>
              <p class="card-text lead mt-5">Price: Rs.550</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-primary shadow-0 me-1 mt-1">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="item 3 (DBMS book)">
              <input type="hidden" name="Price" value="550">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
        <form action="manage_cart.php" method="POST">
          <div class="card w-100 my-2 shadow-2-strong">
          <img src="images/products4.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body text-center d-flex flex-column">
              <h5 class="card-title mb-5">Programming with Java | 2nd Edition</h5>
              <p class="card-text lead mt-5">Price: Rs.500</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-primary shadow-0 me-1 mt-1">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="item 4 (JAVA book)">
              <input type="hidden" name="Price" value="500">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
        <form action="manage_cart.php" method="POST">
          <div class="card w-100 my-2 shadow-2-strong">
          <img src="images/products5.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body text-center d-flex flex-column">
              <h5 class="card-title mt-2 mb-5">The Basics of Chemistry</h5>
              <p class="card-text lead mt-5">Price: Rs.200</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-primary shadow-0 me-1 mt-1">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="item 5 (Chemistry book)">
              <input type="hidden" name="Price" value="200">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
        <form action="manage_cart.php" method="POST">
          <div class="card w-100 my-2 shadow-2-strong">
          <img src="images/products6.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body text-center d-flex flex-column">
              <h5 class="card-title mt-2 mb-5">ESP8266 NodeMCU CH340G WiFi Serial Wireless Module | Board | Electronic Components</h5>
              <p class="card-text lead mt-4">Price: Rs.250</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-primary shadow-0 me-1 mt-1">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="item 6 (ESP8266 MicroController)">
              <input type="hidden" name="Price" value="250">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
        <form action="manage_cart.php" method="POST">
          <div class="card w-100 my-2 shadow-2-strong">
          <img src="images/products7.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body text-center d-flex flex-column">
              <h5 class="card-title mt-2 mb-5">Writing Kit|5 Pencils|1 Filly Sharpener|1 Pouch Of 5 Pebbles Erasers|1 Itip Gel Pen|1 Classic Ball Pen|1 15Cm Scale|1 Pasto Eraser</h5>
              <p class="card-text lead">Price: Rs.110</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-primary shadow-0 me-1 mt-1">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="item 7 (Stationary kit)">
              <input type="hidden" name="Price" value="110">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
        <form action="manage_cart.php" method="POST">
          <div class="card w-100 my-2 shadow-2-strong">
          <img src="images/products8.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body text-center d-flex flex-column">
              <h5 class="card-title mt-2 mb-4">Pir, Ultrasonic, Dht 11 Temperature, Ir Proximity1 Ultimate Sensor Modules Kit with Sound SensorUno</h5>
              <p class="card-text lead mt-5">Price: Rs.430</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-primary shadow-0 me-1 ">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="item 8 (Sensor kit)">
              <input type="hidden" name="Price" value="430">
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>





  <!-- Feature -->
  <section class="mt-5" style="background-color: #f5f5f5;">
    <div class="container text-dark pt-3">
      <header class="pt-4 pb-3">
        <h3>Why choose us</h3>
      </header>

      <div class="row mb-4">
        <div class="col-lg-4 col-md-6">
          <figure class="d-flex align-items-center mb-4">
            <span class="rounded-circle bg-light p-3 d-flex me-2 mb-2">
              <i class="fas fa-camera-retro fa-2x fa-fw text-primary floating"></i>
            </span>
            <figcaption class="info">
              <h6 class="title">Reasonable prices</h6>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
            </figcaption>
          </figure>
          <!-- itemside // -->
        </div>
        <!-- col // -->
        <div class="col-lg-4 col-md-6">
          <figure class="d-flex align-items-center mb-4">
            <span class="rounded-circle bg-light p-3 d-flex me-2 mb-2">
              <i class="fas fa-star fa-2x fa-fw text-primary floating"></i>
            </span>
            <figcaption class="info">
              <h6 class="title">Best quality</h6>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
            </figcaption>
          </figure>
          <!-- itemside // -->
        </div>
        <!-- col // -->
        <div class="col-lg-4 col-md-6">
          <figure class="d-flex align-items-center mb-4">
            <span class="rounded-circle bg-light p-3 d-flex me-2 mb-2">
              <i class="fas fa-plane fa-2x fa-fw text-primary floating"></i>
            </span>
            <figcaption class="info">
              <h6 class="title">Worldwide shipping</h6>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
            </figcaption>
          </figure>
          <!-- itemside // -->
        </div>
        <!-- col // -->
        <div class="col-lg-4 col-md-6">
          <figure class="d-flex align-items-center mb-4">
            <span class="rounded-circle bg-light p-3 d-flex me-2 mb-2">
              <i class="fas fa-users fa-2x fa-fw text-primary floating"></i>
            </span>
            <figcaption class="info">
              <h6 class="title">Customer satisfaction</h6>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
            </figcaption>
          </figure>
          <!-- itemside // -->
        </div>
        <!-- col // -->
        <div class="col-lg-4 col-md-6">
          <figure class="d-flex align-items-center mb-4">
            <span class="rounded-circle bg-light p-3 d-flex me-2 mb-2">
              <i class="fas fa-thumbs-up fa-2x fa-fw text-primary floating"></i>
            </span>
            <figcaption class="info">
              <h6 class="title">Happy customers</h6>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
            </figcaption>
          </figure>
          <!-- itemside // -->
        </div>
        <!-- col // -->
        <div class="col-lg-4 col-md-6">
          <figure class="d-flex align-items-center mb-4">
            <span class="rounded-circle bg-light p-3 d-flex me-2 mb-2">
              <i class="fas fa-box fa-2x fa-fw text-primary floating"></i>
            </span>
            <figcaption class="info">
              <h6 class="title">Thousand items</h6>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
            </figcaption>
          </figure>
          <!-- itemside // -->
        </div>
        <!-- col // -->
      </div>
    </div>
    <!-- container end.// -->
  </section>
  <!-- Feature -->







</body>
</html>