<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initisl-scale=1.0">
        <title>Artists</title>
        <link rel="stylesheet" href="style3.css">
    </head>
    <body>
        <section class="banner" id="sec">
            <header>
                <a href="index.php" class="logo"><img src="Icons/logo.png"></a>
                <div id="toggle" onclick="toggle()"></div>
            </header>



            <div class="box">
                <div class="imgBx">
                    <img src="artists/1.png">
                </div>
                <div class="content">
                    <h2>Panchami V Urs<br><span>Artist</span></h2>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <img src="artists/2.png">
                </div>
                <div class="content">
                    <h2>Pratyush Pathak<br><span>Sketch Artist</span></h2>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <img src="artists/3.png">
                </div>
                <div class="content">
                    <h2>Shreyansh Rakhecha<br><span>Creative Designer</span></h2>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <img src="artists/4.png">
                </div>
                <div class="content">
                    <h2>Rakshali Jain<br><span>Executive Designer</span></h2>
                </div>
            </div>


        </section>
        <div id="navigation">
            <ul>
                <li> <h1> Hey,  <?php echo $_SESSION['username']; ?> </h1> </li>
                <li><a href="index.php">Home</a></li>
                <li><a href="gallery.php">Art gallery</a></li>
                <li><a href="gallery2.php">Our Artworks</a></li>
                <li><a  class="active" href="artists.php">Artists</a></li>
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
