<?php
session_start();
?>

<html>
<head>
<title>User Login</title>
</head>
<body>

<?php
if($_SESSION["username"]) {
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <!-- bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Bootstrap Javascript  -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/index.css">
  <title>Homepage</title>
</head>

<body>
  <!--                                 Header bar                               -->

  <nav class="navbar navbar-expand-sm navbar-light bg-warning">
    <img class="navbar-brand" src="https://cdn-icons-png.flaticon.com/512/1077/1077114.png" width=30px>
    <a class="navbar-brand" href="">E-Commerece</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="myAccount.php">My Account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php">My Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Rewards</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Welcome Div -->
  <div class="welcome-div">
    <h2>Welcome,  <?php echo $_SESSION["username"]; ?> </h2>
  </div>

  <!-- Category 1  - Mobile Phones-->
  <div class="row category-row">
    <div class="col-lg-2 category-item">
      <a href="books.php">Books</a>
    </div>
    <div class="col-lg-2 category-item">
      <a href="#electronics-section">Electronics</a>
    </div>
    <div class="col-lg-2 category-item">
      <a href="#section-sports">Sports</a>
    </div>
    <div class="col-lg-2 category-item">
      <a href="#section-clothing">Cothing</a>
    </div>
    <div class="col-lg-2 category-item">
      <a href="#section-ent">Entertainment</a>
    </div>
  </div>
  <!-- Top Items -->
  <section id="item-top">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" id="section-mobile">
        <div class="carousel-item active">

          <div class="row row-trending">
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-header">
                  <strong>The Alchemist</strong>
                </div>
                <div class="card-body">
                  <img src="photos/book1.jpg" alt="" class="carousel-img">
                </div>
                <div class="card-footer">
                  <button type="button" name="button" href="" class="btn btn-lg btn-outline-dark">Buy Now  70/-</button>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-header">
                <strong>Wings of Fire</strong>
                </div>
                <div class="card-body">
                  <img src="photos/book2.jpg" alt="" class="carousel-img">
                </div>
                <div class="card-footer">
                  <button type="button" name="button" class="btn btn-lg btn-outline-dark">Buy Now 80/-</button>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-header">
                <strong>Harry Potter - The philosopher's Stone</strong>
                </div>
                <div class="card-body">
                  <img src="photos/book3.jpg" alt="" class="carousel-img">
                </div>
                <div class="card-footer">
                  <button type="button" name="button" class="btn btn-lg btn-outline-dark">Buy Now 90/-</button>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="carousel-item" id="electronics-section">

          <div class="row row-trending"  >
            <div class="col-lg-4 col-md-6">
              <div class="card" >
                <div class="card-Header" >
                <strong>Theory of Everything</strong>
                </div>
                <div class="card-body">
                  <img src="photos/book4.jpg" alt="" class="carousel-img">
                </div>
                <div class="card-footer">
                  <button type="button" name="button" class="btn btn-lg btn-outline-dark">Buy Now 100/-</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="sr-only"></span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="sr-only"></span>
      </a>
    </div>
  </section>

<!-- Blank div -->
  <div class="blank-div">
  <h1 style="text-align: center;">Trending Phones</h1>
  </div>
<!-- First Category - Mobile -->
<section id="section-electronics" >
  <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">

        <div class="row row-mobile">
          <div class="col-lg-3 col-md-6">
            <div class="card">
              <div class="card-header">
                Nokia 6
              </div>
              <div class="card-body">
                <img src="photos/phone1.jpeg" alt="" class="carousel-img-2">
              </div>
              <div class="card-footer">
                <button type="button" name="button" class="btn btn-lg btn-outline-dark">Buy Now 10,000/-</button>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="card">
              <div class="card-header">
                Apple iphone 13 
              </div>
              <div class="card-body">
                <img src="photos/phone.jpeg" alt="" class="carousel-img-2">
              </div>
              <div class="card-footer">
                <button type="button" name="button" class="btn btn-lg btn-outline-dark">Buy Now 20,000/-</button>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="card">
              <div class="card-header">
                Redmi Note 10 pro 
              </div>
              <div class="card-body">
                <img src="photos/phone2.jpeg" alt="" class="carousel-img-2">
              </div>
              <div class="card-footer">
                <button type="button" name="button" class="btn btn-lg btn-outline-dark">Buy Now 30,000/-</button>
              </div>
            </div>
          </div>

            <div class="col-lg-3 col-md-6">
              <div class="card">
                <div class="card-Header">
                  Samsung M32
                </div>
                <div class="card-body">
                  <img src="photos/phone3.jpeg" alt="" class="carousel-img-2">
                </div>
                <div class="card-footer">
                  <button type="button" name="button" class="btn btn-lg btn-outline-dark">Buy Now 40,000/-</button>
                </div>
              </div>
            </div>

        </div>

      </div>
      <div class="carousel-item">

        <div class="row row-mobile">
          <div class="col-lg-3 col-md-6">
            <div class="card">
              <div class="card-Header">
                Redmi Note 8
              </div>
              <div class="card-body">
                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.gizmochina.com%2Fproduct%2Fxiaomi-redmi-note-8%2F&psig=AOvVaw3smddlPRvXTcqOu14t9Qi4&ust=1638305083003000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCPCZhpa4vvQCFQAAAAAdAAAAABAD" alt="" class="carousel-img-2">
              </div>
              <div class="card-footer">
                <button type="button" name="button" class="btn btn-lg btn-outline-dark">Buy Now 30,000/-</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
      <span class="sr-only"></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
      <span class="carousel-control-next-icon"></span>
      <span class="sr-only"></span>
    </a>
  </div>
</section>

<!-- Sports Section -->
<?php
}else echo "<h1>Please login first .</h1>";
?>

</body>

</html>


</body>
</html>
