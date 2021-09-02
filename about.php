<?php
include 'upravljenjeGreskama.php';
include 'konekcija.php';
include 'VrstaMuzike.php';

$nizVrstiMuzike = VrstaMuzike::vratiVrste($konekcija);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>GdeIzaći.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/animate.css">


  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/fl-bigmug-line.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <div class="site-wrap">

    <?php include 'menu.php'; ?>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade">
            <h2>O nama</h2>
          </div>
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./images/river.jpg" class="d-block w-100" alt="...">
              </div>

            </div>
          </div>

          <br>
          <br>

          <div class="col-md-12">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nunc nunc, ornare sed nulla at, posuere tempus massa. Sed bibendum aliquet finibus. Vivamus ullamcorper, leo mattis facilisis posuere, orci metus porttitor magna, eget faucibus ligula lorem id libero. Nunc vehicula nulla euismod venenatis hendrerit. Integer nulla mi, lacinia quis efficitur ullamcorper, volutpat vel erat. Donec quis leo sed nisi rhoncus porttitor. Maecenas molestie augue ut imperdiet rutrum. Quisque ultricies auctor libero a ornare. Aenean tincidunt suscipit egestas.

              Curabitur dignissim erat ac sodales finibus. Donec aliquet lacus at lacus porta placerat. Fusce non convallis orci. Aenean quis mollis erat. Pellentesque nec dolor ligula. Nam ac erat velit. Proin maximus neque sit amet magna maximus porta. Maecenas quam ligula, eleifend sit amet volutpat ut, hendrerit id elit. Maecenas fermentum vel quam condimentum faucibus. Integer vitae metus porttitor, scelerisque nibh non, laoreet nulla. Quisque neque dolor, rutrum eget pretium sit amet, fermentum a ligula. Vivamus quis vestibulum nisi, eget vestibulum nibh. Duis fringilla tempor dolor nec ornare.

              Donec viverra ex ac magna aliquet lobortis. Pellentesque aliquet, arcu eget iaculis varius, velit urna elementum mauris, non maximus est augue eget massa. Proin cursus neque ac elit blandit, a hendrerit magna rhoncus. Aliquam aliquet porta maximus. Curabitur vulputate hendrerit rhoncus. Nullam eget arcu quis lacus laoreet ultrices id a risus. Nullam eleifend, sem ultricies efficitur rhoncus, diam magna iaculis nunc, interdum suscipit nulla quam a nulla. Quisque mattis fringilla nulla ut venenatis. Nullam sollicitudin massa quis porttitor ullamcorper. Duis accumsan rhoncus justo, sed finibus nunc sodales et.</p>
          </div>
        </div>

      </div>
    </div>

    <?php include 'footer.php'; ?>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>


</body>

</html>