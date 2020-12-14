<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initisl-scale=1.0">
        <title>Artsea</title>
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        <section class="banner" id="sec">
            <header>
                <a href="index.php" class="logo"><img src="Icons/logo.png"></a>
                <div id="toggle" onclick="toggle()"></div>
            </header>
            <div class="content">
                <h2>Welcome!!</h2><br>
                    <h3>To the Sea of Art</h3>
                <p>Art is unquestionably one of the purest and highest elements in human happiness.
                 It transmits ideas and values inherent in every culture across space and time.<br>
               Here are some of the vibrant artpieces made by various artists. </p>
                <a href="gallery.php">Art gallery</a>
            </div>
            <ul class="sci">
                <li><a href="#"><img src="Icons/facebook.png"></a></li>
                <li><a href="#"><img src="Icons/twitter.png"></a></li>
                <li><a href="#"><img src="Icons/linkedin.png"></a></li>
                <li><a href="https://www.instagram.com/artsytrench/" target="_blank"><img src="Icons/instagram.png"></a></li>
            </ul>
            
        </section>
        <div id="navigation">
            <ul>
                <li> <h1> Hey,  <?php echo $_SESSION['username']; ?> ! </h1> </li>
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="gallery.php">Art gallery</a></li>
                <li><a href="gallery2.php">Our Artworks</a></li>
                <li><a href="artists.php">Artists</a></li>
                <li><a href="contact.php">Contact Us</a></li>
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
    </body>
</html>
