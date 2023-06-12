<?php 
	include "../php/databases.php";
	$connect = mysqli_connect($par1_ip, $par2_name, $par3_p, $par4_db);
	$products = mysqli_query($connect, "SELECT * From `food`");
	$products = mysqli_fetch_all($products);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All projects</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;700&family=Open+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="normalize.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header class="header">
      <div class="container">
        <div class="header__inner">
          <div class="header-logo">
            <a href="#"><img src="../img/logo.png" alt="logo" /></a>
          </div>
          <nav>
            <div class="menu__btn">
              <span></span>
            </div>
            <ul class="header__list">
              <li class="header__list-item">
                <a class="header__list-link" href="../index.html">Home</a>
              </li>
              <li class="header__list-item">
                <a class="header__list-link" href="#projects">Our projects</a>
              </li>
              <li class="header__list-item">
                <a class="header__list-link" href="#footer">Contact us</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <section class="maintitle">
      <div class="container">
        <div class="maintitle_text">
          <div>Our Projects</div>
        </div>
      </div>
    </section>
    <section class="projects" id="projects">
      <div class="container">
        <div class="projects_main">
					<?php 
					foreach($products as $product)
					{
						?>
					<div class="projects_main_classes">
            <img src="../img/<?= $product[2] ?>" />
            <h3> <?= $product[1] ?></h3>
            <p>
						<?= $product[3] ?>
            </p>
          </div>
					<?php
					}
					?>
        </div>
      </div>
    </section>
    <footer class="footer" id="footer">
      <div class="container">
        <div class="footer__inner">
          <div class="footer__logo">
            <div class="footer__logo-logo">
              <a href="#"><img src="../img/logo.png" alt="logo" /></a>
            </div>
            <div class="footer__logo-desc">
              Real estate for any the taste is only ours
            </div>
          </div>
          <div class="footer__list">
            <div class="footer__list-item">
              <div class="footer__list-item-title">Quick Links</div>
              <div class="footer__list-item-link">
                <a href="../index.html">Home</a>
              </div>
              <div class="footer__list-item-link">
                <a href="#projects">Projects</a>
              </div>
              <div class="footer__list-item-link">
                <a href="../index.html#about_us">About us</a>
              </div>
              <div class="footer__list-item-link">
                <a href="#footer">Contact us</a>
              </div>
            </div>
            <div class="footer__list-item footer__list-item--icons">
              <div class="footer__list-item-title">Stay In Touch</div>
              <div class="footer__list-item-link">
                <a href="tel:380671234567">+380-67-123-4567</a>
              </div>
              <div class="footer__list-item-link">
                <a href="mailto:MVC@gmail.com">MVSBuild@gmail.com</a>
              </div>
              <div class="footer__list-item-link">
                <a
									target="_blank"
                  href="https://www.google.com/maps/place/Коломийський+політехнічний/@48.5332218,25.038175,17z/data=!3m1!4b1!4m6!3m5!1s0x4736d29057abf5b3:0xbe99f0c2dee6921f!8m2!3d48.5332218!4d25.0403637!16s%2Fg%2F120z72qw?entry=ttu"
                  >Antona Chekhov Street, 20, Kolomyia</a
                >
              </div>
            </div>
          </div>
        </div>
				<div class="footer__rights">
					<div>MSV BUILD 0687958025 © 2023. All Rights Reserved.</div>
				</div>
      </div>
    </footer>

    <a href="#" class="toTop"></a>

    <script src="../js/main.js"></script>
  </body>
</html>
