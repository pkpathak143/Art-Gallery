<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="contact.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
    ></script>
  </head>
  <body>
    <section class="banner" id="sec">
      <header>
          <a href="index.php" class="logo"><img src="Icons/logo.png"></a>
          <div id="toggle" onclick="toggle()"></div>
      </header>
      <div class="container">
        <span class="big-circle"></span>
        <img src="img/shape.png" class="square" alt="" />
        <div class="form">
          <div class="contact-info">
            <h3 class="title">Let's get in touch</h3>
            <p class="text">
              Wish to see your favourite artists work on our website?
               Feel free to contact us as we're always open for suggestions!
            </p>
  
            <div class="info">
              <div class="information">
                <img src="img/location.png" class="icon" alt="" />
                <p>Jain University, Kanakpura</p>
              </div>
              <div class="information">
                <img src="img/email.png" class="icon" alt="" />
                <p>contact@artsea.ac.in</p>
              </div>
              <div class="information">
                <img src="img/phone.png" class="icon" alt="" />
                <p>9876543210</p>
              </div>
            </div>
  
            <div class="social-media">
              <p>Connect with us :</p>
              <div class="social-icons">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="https://www.instagram.com/artsytrench/">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
            </div>
          </div>
  
          <div class="contact-form">
            <span class="circle one"></span>
            <span class="circle two"></span>
  
            <form action="contactValid.php" method="post">
                <h3 class="title">Contact us</h3>
                <div class="input-container">
                  <input type="text" name="name" class="input" />
                  <label for="">Username</label>
                  <span>Username</span>
                </div>
                <div class="input-container">
                  <input type="email" name="email" class="input" />
                  <label for="">Email</label>
                  <span>Email</span>
                </div>
                <div class="input-container">
                  <input type="tel" name="phone" class="input" />
                  <label for="">Phone</label>
                  <span>Phone</span>
                </div>
                <div class="input-container textarea">
                  <textarea name="message" class="input"></textarea>
                  <label for="">Message</label>
                  <span>Message</span>
                </div>
                <input type="submit" value="Send" class="btn" />
            </form>
          </div>
        </div>
      </div>
  
      <script src="app.js"></script>

  </section>

  <div id="navigation">
      <ul>
        <li> <h1> Hey,  <?php echo $_SESSION['username']; ?> !</h1> </li>
          <li><a href="index.php">Home</a></li>
          <li><a class="active" href="gallery.php">Art gallery</a></li>
          <li><a href="gallery2.php">Our Artworks</a></li>
          <li><a href="artists.php">Artists</a></li>
          <li><a href="contact.php">Contact</a></li>
          <button><a href="login.php">Logout</a></button>
      </ul>
  </div>
  <script type="text/javascript">
      function toggle(){
          var sec = document.getElementById('sec');
          var nav = document.getElementById('navigation');
          sec.classList.toggle('active');
          nav.classList.toggle('active');
      }
  </script>

  <script src="vanilla-tilt.min.js"></script>
  <script>
      VanillaTilt.init(document.querySelectorAll(".box"), {
          max: 25,
          speed: 400
      });
  </script>




  </body>
</html>
