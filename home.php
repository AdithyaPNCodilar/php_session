<?php

session_start();

if (!isset($_SESSION['username'])) {
    // User is not logged in, redirect to login page
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar">
      <h1 class="logo">Welcome <?php echo $username; ?></h1>
      <ul class="nav-links">
        <li class="active"><a href="#"></a>Home</li>
        <li><a href="#"></a>Tours</li>
        <li><a href="#"></a>Explore</li>
        <li class="ctn"><a href="/php_session/logout.php">Logout</a></li>
      </ul>
      <img src="https://cdn1.iconfinder.com/data/icons/heroicons-ui/24/menu-512.png" alt="" class="menu-btn">
    </nav>
    <header>
      <div class="header-content">
        <h2>EXPLORE THE COLOURFUL WORLD</h2>
        <div class="line"></div>
        <h1>A WONDERFUL GIFT</h1>
        <a href="#" class="ctn">Learn More</a>
      </div>
    </header>

    <!--Events-->
    <section class="events">
      <div class="title">
        <h1>Upcoming Events</h1>
        <div class="line"></div>
      </div>
      <div class="row">
        <div class="col">
          <img src="./images/trek.jpg" alt="">
          <h4>Everest Camp Trek</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Labore unde ipsum quos laborum laboriosam, odit, voluptatibus
              dicta quibusdam magni magnam dolore aperiam fugit? Amet temporibus a tempora.
               Sunt, impedit nisi.</p>
          <a href="#" class="ctn">Learn More</a>
        </div>
        <div class="col">
          <img src="./images/trek.jpg" alt="">
          <h4>Walking Holidays</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore unde ipsum quos laborum laboriosam,
             odit, voluptatibus dicta quibusdam magni magnam dolore aperiam fugit? Amet temporibus a tempora.
              Sunt, impedit nisi.</p>
          <a href="#" class="ctn">Learn More</a>
        </div>
      </div>
    </section>
    <section class="explore">
      <div class="explore-content">
        <h1>EXPLORE THE WORLD</h1>
        <div class="line"></div>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
         Dolorem repellat, non, alias quo earum eaque modi sed accusantium fugit in autem pariatur exercitationem,
          doloremque natus nobis ad aut sunt vitae.</p>
      <a href="#" class="ctn">Learn More</a>
      </div>
    </section>

    <section class="tours">
      <div class="row">
        <div class="col content-col">
          <h1>UPCOMING TOURS AND DESTINATIONS</h1>
          <div class="line"></div>
          <P>Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Fugiat iusto eaque mollitia, vero quas culpa animi impedit asperiores non,
              porro repellendus perferendis commodi ad nulla doloremque necessitatibus possimus soluta maiores?</P>
          <a href="#" class="ctn">Learn More</a>
        </div>
        <div class="col image-col">
          <div class="image-gallery">
            <img src="https://www.kosha.co/journal/wp-content/uploads/2022/05/Trekking-Tips-1.jpg" alt="">
            <img src="https://www.kosha.co/journal/wp-content/uploads/2022/05/Trekking-Tips-1.jpg" alt="">
            <img src="https://www.kosha.co/journal/wp-content/uploads/2022/05/Trekking-Tips-1.jpg" alt="">
            <img src="https://www.kosha.co/journal/wp-content/uploads/2022/05/Trekking-Tips-1.jpg" alt="">
          </div>
        </div>
      </div>
    </section>
    <section class="footer">
      <p>Adithya P N | Phone: +91- 7510701619 | Email: adithyapn98@gmail.com</p>
      <p>Copyright © 2023 Adithya P N</p>
    </section>

    <script>
      const menuBtn = document.querySelector('.menu-btn')
      const navlinks = document.querySelector('.nav-links')

      menuBtn.addEventListener('click',()=>{
        navlinks.classList.toggle('mobile-menu')
      })
    </script>
</body>
</html>
