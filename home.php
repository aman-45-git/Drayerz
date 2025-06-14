<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?> | Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="custom.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
    /*@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    nav{
        padding-left: 100px!important;
        padding-right: 100px!important;
        background: #6665ee;
        font-family: 'Poppins', sans-serif;
    } 
    nav a.navbar-brand{
        color: #fff;
        font-size: 30px!important;
        font-weight: 500;
    }
    button a{
        color: #6665ee;
        font-weight: 500;
    }
    button a:hover{
        text-decoration: none;
    }
    h1{
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        text-align: center;
        transform: translate(-50%, -50%);
        font-size: 50px;
        font-weight: 600;
    }*/
    </style>
</head>
<body>
    <nav class="navbar">
    <a class="navbar-brand" href="#">DRYERZ</a>
    <button type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></button>
    </nav>
    <center><h1>Welcome <?php echo $fetch_info['name'] ?></h1></center>
    <body >
    <header>
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#index"><img src="img/logo1.png" width="150" height="120"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto menu">
                <li class="nav-item active">
                  <a class="nav-link" href="#index">HOME 🏠 </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#service">OUR  SERVICES 🧺 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#price">PRICES 💰 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#review">REVIEWS 📝<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact">CONTACT US ☎<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="ccff/index.php">BOOKING<i class="fas fa-shopping-cart"></i></a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        </div>
      </div>
    </header>
    <nav id="hamburger-nav">
      <div class="logo"></div>
      <div class="hamburger-menu">
        <div class="hamburger-icon" onclick="toggleMenu()">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="menu-links">
          <a href="#index" onclick="toggleMenu()"></a>
          <a href="#service" onclick="toggleMenu()"></a>
          <a href="#price" onclick="toggleMenu()"></a>
          <a href="#review" onclick="toggleMenu()"></a>
          <a href="#contact" onclick="toggleMenu()"></a>
          <a href="ccff/index.php" onclick="toggleMenu()"></a>
        </div>
      </div>
    </nav>


<section id="index">
  <div class="container-fluid p-0">
<div class="row no-gutters">
  <div class="col-12">
    <div class="bg-custom-1">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-8 col-md-10 col-12 h-1">
            <h2><strong>WE ARE OPEN DURING THIS CHALLENGING TIME.</strong></h2>
            <p>DRYERZ provides premium dry cleaning and laundry pick-up and delivery services in budget in 🇮🇳.</p>
            <a href="ccff/index.php" type="button" class="btn btn-primary btn-1">Schedule a delivery</a>
          </div>
          <!-- <div class="col-md-6 h-1-img d-none">
          </div> -->
        </div>
      </div>
      </div>
  </div>
</div>
  </div>
</section>

<section>
  <div class="container">
    <h2 class="text-center txt-1">How DRYERZ 🧺 works</h2>
  
    <div class="row mb-5">

      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6  col-12 txt-9">
        <h3>Collect Your Clothes</h3>
        <p>We collect and keep track of your garments from start to finish so that your favourite things stay safe.</p>
        <a href="#service" class="btn btn-outline-primary btn-custom-3" role="button">Find Out More...</a>
      </div>

      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6  col-12 body-img-l">
        <img class="rounded-circle"  src="img/s-6.png">
      </div>
  
    </div>
  
    <div class="row mb-5">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6  col-12 body-img-r">
        <img class="rounded-circle"  src="img/s-8.png">
      </div>

      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6  col-12 txt-9">
        <h3>Cleaning</h3>
        <p>Our experienced employees gives the top priority to your garments during the process.</p>
        <a href="#service" class="btn btn-outline-primary btn-custom-3" role="button">Find Out More...</a>
      </div>
  
    </div>
  
    <div class="row mb-5">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6  col-12 txt-9">
        <h3>Convenient</h3>
        <p>We will wash and fold, or dry clean and press your garments according to your preferences.</p>
        <a href="#service" class="btn btn-outline-primary btn-custom-3" role="button">Find Out More...</a>
      </div>

      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6  col-12 body-img-l">
        <img class="rounded-circle"  src="img/s-9.png">
      </div>
  
    </div>
  
    <div class="row mb-5">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6  col-12 body-img-r">
        <img class="rounded-circle"  src="img/s-4.jpg">
      </div>

      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6  col-12 txt-9">
        <h3>Keeping Safe</h3>
        <p>We make it absolutely must to keep each item separate and clean. Also feel free to send any question and we will answer them as soon as possible.</p>
        <a href="#service" class="btn btn-outline-primary btn-custom-3" role="button">Find Out More...</a>
      </div>
  
    </div>
  
    <div class="row mb-5">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6  col-12 txt-9">
        <h3>Ready For The Delivery</h3>
        <p>We will deliver your clean clothes at the time you selected during your pick up. Call us at <strong>+91 8368910545</strong> to schedule a delivery.</p>
        <a href="#service" class="btn btn-outline-primary btn-custom-3" role="button">Find Out More...</a>
      </div>
      
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6  col-12 body-img-l">
        <img class="rounded-circle"  src="img/s-12.png">
      </div>
  
    </div>
  </div>
</section>
<section>
  <div class="container-fluid p-0">
    <div class="row no-gutters">
      <div class="col-12">
        <div class="bg-custom-2">
          <div class="container">
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 h-2-img">
                <img class="img-fluid"  src="img/assets-11.png">
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 h-2">
                <h2 class="txt-2"><strong>Why Will You Choose DRYERZ?</strong></h2>
                <ul>
                  <li>We Provide premium Dry Cleaning service <strong> in budget.</strong></li>
                  <li>You can always trade your service and know the <strong> pick up and delivery time</strong> throughout the entire process.</li>
                  <li>we ensure <strong>fastest pick up/delivery</strong>.</li>
                  <li>DRYERZ is <strong>cheaper</strong> than most dry cleaners in around the world🌎.</li>
                  <li><strong>Special requests</strong> are taken from clients.</li>
                </ul>
              </div>
            </div>
          </div>
          </div>
        </div>
        </div>
  </div>

</section>
<div class="container">
  <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="#index"><img src="img/logo1.png" width="150" height="120"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto menu">
          <li class="nav-item active">
            <a class="nav-link" href="#index">HOME 🏠 </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#service">OUR  SERVICES 🧺 <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#price">PRICES 💰 <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#review">REVIEWS 📝<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">CONTACT US ☎<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ccff/index.php"><i class="fas fa-shopping-cart"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  </div>
</div>

<section id="service">
  <div class="container">
    <h2 class="text-center txt-12">OUR SERVICES</h2>
  <div class="row shadow p-3 mb-5 bg-white rounded">
  
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100">
        <a href="#price"><img class="card-img-top" src="img/ser-1.png" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#price">Fix Hole</a>
          </h4>
          <h5>💲: DEPEND ON PROVIDER </h5>
          <p class="card-text">We take great pride in our craftsmanship and attention to detail, striving to exceed your expectations with every repair. Your satisfaction is our utmost priority.</p>
        </div>
        <!--<div class="card-footer">
          <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          <button class="btn btn-info">Add to cart</button>
        </div>-->
      </div>
    </div>
  
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="img/ser-2.png" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#">Hem Pants</a>
          </h4>
          <h5>💲: DEPEND ON PROVIDER </h5>
          <p class="card-text">At DRYERZ, we take great pride in our attention to detail and commitment to quality craftsmanship. </p>
        </div>
        <!--<div class="card-footer">
          <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          <button class="btn btn-info">Add to cart</button>
        </div>-->
      </div>
    </div>
  
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="img/ser-3.png" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#">Dry Clean</a>
          </h4>
          <h5>💲: DEPEND ON PROVIDER </h5>
          <p class="card-text">Our experienced team has handled your garment with the utmost care, ensuring it receives the specialized treatment it deserves.</p>
        </div>
        <!--<div class="card-footer">
          <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          <button class="btn btn-info">Add to cart</button>
        </div>-->
      </div>
    </div>
  
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="img/ser-4.png" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#">Suits Dry Clean 2</a>
          </h4>
          <h5>💲: DEPEND ON PROVIDER </h5>
          <p class="card-text">Rest assured, we've meticulously cared for each garment, ensuring they're returned to you looking immaculate and feeling fresh.</p>
        </div>
        <!--div class="card-footer">
          <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          <button class="btn btn-info">Add to cart</button>
        </div>-->
      </div>
    </div>
  
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="img/ser-5.png" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#">Taper</a>
          </h4>
          <h5>💲: DEPEND ON PROVIDER </h5>
          <p class="card-text">Our skilled tailors have meticulously tailored your garment to achieve the perfect fit you desire, ensuring both comfort and style.</p>
        </div>
        <!--div class="card-footer">
          <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          <button class="btn btn-info">Add to cart</button>
        </div>-->
      </div>
    </div>
  
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="img/ser-6.png" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#">Wedding Gown</a>
          </h4>
          <h5>💲: DEPEND ON PROVIDER </h5>
          <p class="card-text">Our team has spared no effort in ensuring every detail of your gown is pristine and ready to make you shine on your wedding day.</p>
        </div>
        <!--<div class="card-footer">
          <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          <button class="btn btn-info">Add to cart</button>
        </div>-->
      </div>
    </div>
  
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="img/ser-7 copy.png" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#price">bedsheet For Laundry</a>
          </h4>
          <h5>💲: DEPEND ON PROVIDER </h5>
          <p class="card-text">We take pride in our meticulous laundering process, ensuring that your garments are treated with care and attention to detail.</p>
        </div>
        <!--<div class="card-footer">
          <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          <button class="btn btn-info">Add to cart</button>
        </div>-->
      </div>
    </div>
  
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100">
        <a href="#price"><img class="card-img-top" src="img/ser-8.png" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#price">Shirts Bundle</a>
          </h4>
          <h5>💲: DEPEND ON PROVIDER </h5>
          <p class="card-text">We've taken care to ensure that each shirt is neatly folded and bundled together for your convenience.</p>
        </div>
        <!--<div class="card-footer">
          <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          <button class="btn btn-info">Add to cart</button>
        </div>-->
      </div>
    </div>
  
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100">
        <a href="#price"><img class="card-img-top" src="img/ser-9 copy.png" height="100%" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#price">Jeans for laundary</a>
          </h4>
          <h5>💲: DEPEND ON PROVIDER </h5>
          <p class="card-text">Our dedicated team has spared no effort in ensuring that every delicate detail of your gown is pristine, ready to make you feel like the radiant bride you are on your special day.</p>
        </div>
        <!--<div class="card-footer">
          <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          <button class="btn btn-info">Add to cart</button>
        </div>-->
      </div>
    </div>
    
  
  </div>
  
  </div>
  
  
  </section>
  <div class="container">
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#price"><img src="img/logo1.png" width="150" height="120"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto menu">
            <li class="nav-item active">
              <a class="nav-link" href="#index">HOME 🏠 </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#service">OUR  SERVICES 🧺 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#price">PRICES 💰 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#review">REVIEWS 📝<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">CONTACT US ☎<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ccff/index.php"><i class="fas fa-shopping-cart"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    </div>
  </div>
  <section id="price">
    <div class="container bg-custom-9" id="price-list">
      <div class="row">
        <div class="col-md-2">
          
        </div>
    
        <div class="col-md-8 card shadow p-3 mb-5 bg-white rounded">
          
    <h2 class="text-center txt-11">PRICES</h2>
    
    <table class="table table-striped">
      <h3 class="text-center">Dry Cleaning</h3>
      <thead>
        <tr class="bg-success">
          <th scope="col">#</th>
          <th scope="col">Garment</th>
          <th scope="col">From</th>
          <th scope="col">To</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Suits 2 PCS (M,W)</td>
          <td>50</td>
          <td>150</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Pants</td>
          <td>50</td>
          <td>150</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Dresses</td>
          <td>50</td>
          <td>150</td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>Fancy Dress</td>
          <td>50</td>
          <td>150</td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>Blouses</td>
          <td>50</td>
          <td>150</td>
        </tr>
        <tr>
          <th scope="row">6</th>
          <td>Coats</td>
          <td>50</td>
          <td>150</td>
        </tr>
        <tr>
          <th scope="row">7</th>
          <td>Sweaters</td>
          <td>50</td>
          <td>150</td>
        </tr>
        <tr>
          <th scope="row">8</th>
          <td>Tie</td>
          <td>50</td>
          <td>150</td>
        </tr>
        <tr>
          <th scope="row">9</th>
          <td>Vest</td>
          <td>50</td>
          <td>150</td>
        </tr>
        <tr>
          <th scope="row">10</th>
          <td>Skirts</td>
          <td>50</td>
          <td>150</td>
        </tr>
        <tr>
          <th scope="row">11</th>
          <td>Shirts</td>
          <td>50</td>
          <td>150</td>
        </tr>
        <tr>
          <th scope="row">12</th>
          <td>Sports Jackets</td>
          <td>50</td>
          <td>150</td>
        </tr>
        <tr>
          <th scope="row">13</th>
          <td>Scarves</td>
          <td>50</td>
          <td>150</td>
        </tr>
        <tr>
          <th scope="row">14</th>
          <td>Shirts For Laundry</td>
          <td>50</td>
          <td>150</td>
        </tr>
      </tbody>
    </table>
    
    
    <table class="table table-striped">
      <h3 class="text-center">Alterations</h3>
      <thead>
        <tr class="bg-success">
          <th scope="col">#</th>
          <th scope="col">Garment</th>
          <th scope="col">From</th>
          <th scope="col">To</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Hem Pants</td>
          <td>50</td>
          <td>150</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Zipper Pants</td>
          <td>50</td>
          <td>150</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Zipper For Dress</td>
          <td>50</td>
          <td>150</td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>Zippers For Skirt</td>
          <td>50</td>
          <td>150</td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>Sleeve Shirts</td>
          <td>50</td>
          <td>150</td>
        </tr>
        <tr>
          <th scope="row">6</th>
          <td>Pockets</td>
          <td>50</td>
          <td>150</td>
        </tr>
        <tr>
          <th scope="row">7</th>
          <td>Patch</td>
          <td>50</td>
          <td>150</td>
        </tr>
        <tr>
          <th scope="row">8</th>
          <td>Waist Pants</td>
          <td>50</td>
          <td>150</td>
        </tr>
        <tr>
          <th scope="row">9</th>
          <td>Sleeve jacket</td>
          <td>50</td>
          <td>150</td>
        </tr>
        <tr>
          <th scope="row">10</th>
          <td>Taper</td>
          <td>50</td>
          <td>150</td>
        </tr>
        <tr>
          <th scope="row">11</th>
          <td>Clothes Pin</td>
          <td>50</td>
          <td>150</td>
        </tr>
        <tr>
          <th scope="row">12</th>
          <td>Button(each)</td>
          <td>50</td>
          <td>150</td>
        </tr>
        <tr>
          <th scope="row">13</th>
          <td>Fix Hole</td>
          <td>50</td>
          <td>150</td>
        </tr>
        <tr>
          <th scope="row">14</th>
          <td>Dress Hem</td>
          <td>50</td>
          <td>150</td>
        </tr>
        <tr>
          <th scope="row">14</th>
          <td>Suit</td>
          <td>50</td>
          <td>150</td>
        </tr>
      </tbody>
    </table>
    
        </div>
    
        <div class="col-md-2">
          
        </div>
      </div>
    
    </div>
    
  </section>
  <div class="container">
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#index"><img src="img/logo1.png" width="150" height="120"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto menu">
            <li class="nav-item active">
              <a class="nav-link" href="#index">HOME 🏠 </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#service">OUR  SERVICES 🧺 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#price">PRICES 💰 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#review">REVIEWS 📝<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">CONTACT US ☎<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ccff/index.php"><i class="fas fa-shopping-cart"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    </div>
  </div>
  <section id="review">
    <div class="container">
      <h2 class="text-center txt-8">CLIENT REVIEWS</h2>
    </div>
    
    
    <div class="container-fluid body-custom-1">
      <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-3 card card-custom shadow-lg p-3 mb-5 bg-white rounded">
          <div class="media">
            <img src="p1/img/baba.png" class="align-self-start mr-3" alt="..." width="10%">
            <div class="media-body">
              <h5 class="mt-0">BABA DRY CLEANING</h5>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <a href="p1/index.php">REVIEW</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 card card-custom shadow p-3 mb-5 bg-white rounded">
          <div class="media">
            <img src="p2/img/dabangg.png" class="align-self-start mr-3" alt="..." width="10%">
            <div class="media-body">
              <h5 class="mt-0">DABANGG DRY CLEANING</h5>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <a href="p2/index.php">REVIEW</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 card card-custom shadow p-3 shadow p-3 mb-5 bg-white rounded">
          <div class="media">
            <img src="p3/img/king.png" class="align-self-start mr-3" alt="..." width="10%">
            <div class="media-body">
              <h5 class="mt-0">KING DRY CLEANING</h5>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <a href="p3/index.php">REVIEW</a>
            </div>
          </div>
        </div>
        <div class="col-md-1">
        </div>
      </div><span id="dots"></span><span id="more">
    
      <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-3 card card-custom shadow p-3 mb-5 bg-white rounded">
          <div class="media">
            <img src="p4/img/kesari.png" class="align-self-start mr-3" alt="..." width="10%">
            <div class="media-body">
              <h5 class="mt-0">KESARI DRY CLEANING</h5>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <a href="p4/index.php">REVIEW</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 card card-custom shadow p-3 mb-5 bg-white rounded">
          <div class="media">
            <img src="p5/img/pk.png" class="align-self-start mr-3" alt="..." width="10%">
            <div class="media-body">
              <h5 class="mt-0">PK DRY CLEANING</h5>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <a href="p5/index.php">REVIEW</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 card card-custom shadow p-3 shadow p-3 mb-5 bg-white rounded">
          <div class="media">
            <img src="p6/img/a.png" class="align-self-start mr-3" alt="..." width="10%">
            <div class="media-body">
              <h5 class="mt-0">OBAMA BINLADEN DRY CLEANING</h5>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <a href="p6/index.php">REVIEW</a>
            </div>
          </div>
        </div>
        <div class="col-md-1">
        </div>
      </div>
    </div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button onclick="myFunction()" class="btn btn-outline-primary btn-custom-3" id="myBtn">Read more</button>
    <script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
    
    
   <!-- <div class="container bg-custom-10">
      <div class="row">
        <div class="col-md-6">
    
          <h3 class="txt-13">Do you like our service?</h3>
          <h6><strong>Give us a quick review!</strong></h6>
          <div class="rating">
         
            <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Excellent!">5 stars</label>
            <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Good">4 stars</label>
            <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Average">3 stars</label>
            <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Low">2 stars</label>
            <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Bad">1 star</label>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="inputEmail4" placeholder="Enter your email address">
          </div>
          <div class="form-group">
            <textarea class="common-textarea form-control" name="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-custom-5">Send Review</button>
        </div>-->
    
          
        <div class="col-md-6">  
    
        </div>
      </div>
    </div>
    
      <div class="row">
        <div class="col-md-2">
          
        </div>
        <div class="col-md-8 text-center">
          <div class="social-icons ">
          </div>
        </div>
        <div class="col-md-2">
    </div>
    </div>
    </div>
    </div>
  </section>
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="#index"><img src="img/logo1.png" width="150" height="120"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto menu">
              <li class="nav-item active">
                <a class="nav-link" href="#index">HOME 🏠 </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#service">OUR  SERVICES 🧺 <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#price">PRICES 💰 <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#review">REVIEWS 📝<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">CONTACT US ☎<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ccff/index.php"><i class="fas fa-shopping-cart"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      </div>
    </div>




<div class="container">
<h2 class="text-center txt-8">DRYERZ</h2>
<p class="text-center">Best Dry Cleaning Service in 🇮🇳.</p>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-8 mb-4">
      <div id="map-container-google-2" class="z-depth-1-half map-container-2" style="height: 500px">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.535735257904!2d76.84871217595078!3d23.077476414275818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397ce9ceaaaaaaab%3A0xa224b6b82b421f83!2sVIT%20Bhopal%20University!5e0!3m2!1sen!2sin!4v1712594164810!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
</div>
<div class="col-md-2">
</div>
</div>
</div>


<!--<div class="container bg-custom-10">
<div class="row">
  <div class="col-md-6">

    <h3 class="txt-11">Contact us</h3>
      <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="firstName" class="form-control" id="inputFirstName" placeholder="Enter your First Name">
          </div>
          <div class="form-group col-md-6">
            <input type="lastName" class="form-control" id="inputLastName" placeholder="Enter your Last Name">
          </div>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="inputEmail4" placeholder="Enter your email address">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="inputAddress2" placeholder="Enter subject here">
          </div>
          <div class="form-group">
            <textarea class="common-textarea form-control" name="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-custom-5">Send Message</button>
      </form>

  </div>

  
  </section>
  <!--<div class="container">
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#index"><img src="img/logo1.png" width="150" height="120"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto menu">
            <li class="nav-item active">
              <a class="nav-link" href="#index">HOME 🏠 </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#service">OUR  SERVICES 🧺 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#price">PRICES 💰 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#review">REVIEWS 📝<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">CONTACT US ☎<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ccff/index.php"><i class="fas fa-shopping-cart"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    </div>
  </div>-->
  <!--<section id="cart">
    <div class="comtainer body-custom-1">
      <div class="row">
          <div class="col-md-2"></div>
        <div class="col-md-4 card shadow-sm p-3 mb-5 bg-white rounded">
          <h2 class="txt-14"><strong>Order Details</strong></h2>
          <br>
          <div class="media">
            <img src="img/p-1.png" class="align-self-start mr-3" alt="...">
            <div class="media-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Shirts Dry Clean</h5>
                    </div>
                    <div class="col-md-6 text-right">
                      <p>$4.00 - $8.00</p>
                      <a href="#">remove</a>
                    </div>
                </div>
            </div>
          </div>
          <div class="media">
            <img src="img/p-1.png" class="align-self-start mr-3" alt="...">
            <div class="media-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Shirts Dry Clean</h5>
                    </div>
                    <div class="col-md-6 text-right">
                      <p>$4.00 - $8.00</p>
                      <a href="#">remove</a>
                    </div>
                </div>
            </div>
          </div>
          <div class="media">
            <img src="img/p-1.png" class="align-self-start mr-3" alt="...">
            <div class="media-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Shirts Dry Clean</h5>
                    </div>
                    <div class="col-md-6 text-right">
                      <p>$4.00 - $8.00</p>
                      <a href="#">remove</a>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-1"></div>
          <div class="col-md-3">
  <!--          
            <table class="table">
  
              <tr class="cart-subtotal">
                  <th>Subtotal</th>
                  <td data-title="Subtotal">$0.00</span></td>
              </tr>                            
              <tr class="order-total">
                  <th>Total</th>
                  <td data-title="Total">$0.00</td>
              </tr>
            </table>
            <button type="button" class="btn btn-primary"><strong>Confirm Your Order</strong></button>
          
          </div>
      </div>
    </div>
  
  
  
  
    <div class="comtainer body-custom-1">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4 card">
          <h2 class="txt-14"><strong>Select Delivery Date & Time</strong></h2>
          <br>
          <label for="deliveryDate">Pick Delivery Date</label>
          <input type="date" name="deliveryDate" id="deliveryDate">
          <p>Pick Delivery Time</p>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Options</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01">
              <option selected>Choose...</option>
              <option value="1">10.00 am</option>
              <option value="2">11.00 am</option>
              <option value="3">12.00 pm</option>
              <option value="4">01.00 pm</option>
              <option value="5">02.00 pm</option>
              <option value="6">03.00 pm</option>
              <option value="7">04.00 pm</option>
              <option value="8">05.00 pm</option>
              <option value="9">06.00 pm</option>
              <option value="10">07.00 pm</option>
              <option value="11">08.00 pm</option>
              <option value="12">09.00 pm</option>
            </select>
          </div>
        </div>
        <div class="col-md-1"></div>
          <div class="col-md-3">
          </div>
      </div>
    </div>
  
    
  
  
    <div class="comtainer body-custom-1">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4 card">
          <h2 class="txt-14"><strong>Provide Your contact Info</strong></h2>
          <br>
          <form class="form-signin">
            <label for="inputName" class="sr-only">Your Name</label>
            <input type="email" id="inputName" class="form-control" placeholder="Your Name" required autofocus>
            <br>
            <label for="inputContact" class="sr-only">Contact no.</label>
            <input type="password" id="inputContact" class="form-control" placeholder="Contact Number" required>
            <br>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <br>
            <input type="text" class="form-control" id="inputAddress" placeholder="Apartment, studio, or floor">
            <div class="checkbox mb-3">
            </div>
          </form>
        </div>
        <div class="col-md-1"></div>
          <div class="col-md-3">
            </div>
      </div>
    </div>
  
    <div class="comtainer body-custom-1">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4 card">
          <h2 class="txt-14"><strong>Order Confirmation</strong></h2>
          <br>
          <table class="table">
  
            <tr class="cart-subtotal">
                <th>Subtotal</th>
                <td data-title="Subtotal">$0.00</span></td>
            </tr>                            
            <tr class="order-total">
                <th>Total</th>
                <td data-title="Total">$0.00</td>
            </tr>
          </table>
  
          
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    <strong>Confirm Your Order</strong>
  </button>
  
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Order Placed Successfully!
        </div>
      </div>
    </div>
  </div>-->
  
        </div>
        <div class="col-md-1"></div>
          <div class="col-md-3">
            </div>
      </div>
    </div>
  
  <div class="bg-custom-6">
  <div class="container">
  <h2 class="text-center txt-6">DRYERZ</h2>
  <div class="row">
    <div class="col-md-4 txt-7">
      <i class="fas fa-map-marker-alt fa-4x ico-custom-1"></i>
      <p>Kothri kalan VIT BHOPAL UNIVERSITY <br>Tel: +91 8368910545</p>
    </div>
    <div class="col-md-4 txt-7">
      <i class="fas fa-id-card fa-4x ico-custom-1"></i>
      <p>PHONE : 8368910545 <br>Email : dryerz@gmail.com</p>
    </div>
    <div class="col-md-4 txt-7">
      <i class="far fa-clock fa-4x ico-custom-1"></i>
      <p>Stores Hours Of Operations : <br> 
        Monday – Friday : 07:00 AM – 07:00 PM <br>
        Saturday – Sunday: 08:00 AM – 06:00 PM</p>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-2">
      
    </div>
    <div class="col-md-8 text-center">
      <div class="social-icons ">
        <a href="#">
          <i class="fab fa-instagram-square fa-3x ico-custom-3"></i>
        </a>
        <a href="#">
          <i class="fab fa-twitter-square fa-3x ico-custom-3"></i>
        </a>
        <a href="#">
          <i class="fab fa-facebook-square fa-3x ico-custom-3"></i>
        </a>
      </div>
    </div>
    <div class="col-md-2">
    </div>
  </div>
  </div>
  </div>
  </section>
  <section>
    <div class="bg-custom-7">
      <p class="text-center">Copyright &#169; 2024 - DRYERZ | All Rights Reserved</p>
    </div>
  </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.slim.min.js" ></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.js"></script>
  </body>
</html>