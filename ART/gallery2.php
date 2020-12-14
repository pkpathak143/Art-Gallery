<?php
session_start();
?>
 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initisl-scale=1.0">
        <title>Our Artworks</title>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <section class="banner" id="sec">
            <header>
                <a href="index.php" class="logo"><img src="Icons/logo.png"></a>
                <div id="toggle" onclick="toggle()"></div>
            </header>
            <div class="container">
                <div class="box">
                    <h2 class="name">Monochrome Blue</h2>
                    <!--<a href="#" class="buy">Buy Now</a>-->
                    <div class="circle"></div>
                    <img src="g2/1.jpg" class="product">
                </div>
                <div class="box">
                    <h2 class="name">Colors of Dusk</h2>
                    <!--<a href="#" class="buy">Buy Now</a>-->
                    <div class="circle"></div>
                    <img src="g2/2.jpg" class="product">
                </div>
                <div class="box">
                    <h2 class="name">Night Vibes</h2>
                    <!--<a href="#" class="buy">Buy Now</a>-->
                    <div class="circle"></div>
                    <img src="g2/3.jpg" class="product">
                </div>
                <div class="box">
                    <h2 class="name">Troye Sivan</h2>
                    <!--<a href="#" class="buy">Buy Now</a>-->
                    <div class="circle"></div>
                    <img src="g2/4.jpg" class="product">
                </div>
                <div class="box">
                    <h2 class="name">Creatures</h2>
                   <!--<a href="#" class="buy">Buy Now</a>-->
                    <div class="circle"></div>
                    <img src="g2/5.jpg" class="product">
                </div>
                <div class="box">
                    <h2 class="name">Living Fearless</h2>
                   <!--<a href="#" class="buy">Buy Now</a>-->
                    <div class="circle"></div>
                    <img src="g2/6.jpg" class="product">
                </div>
                <div class="box">
                    <h2 class="name">Chaos at its Best</h2>
                    <!--<a href="#" class="buy">Buy Now</a>-->
                    <div class="circle"></div>
                    <img src="g2/7.jpg" class="product">
                </div>
                <div class="box">
                    <h2 class="name">Mystic</h2>
                   <!--<a href="#" class="buy">Buy Now</a>-->
                    <div class="circle"></div>
                    <img src="g2/8.jpg" class="product">
                </div>
                <div class="box">
                    <h2 class="name">Waves of Life</h2>
                    <!--<a href="#" class="buy">Buy Now</a>-->
                    <div class="circle"></div>
                    <img src="g2/9.jpg" class="product">
                </div>
                <div class="box">
                    <h2 class="name">Building Bonds</h2>
                    <!--<a href="#" class="buy">Buy Now</a>-->
                    <div class="circle"></div>
                    <img src="g2/10.jpg" class="product">
                </div>
                <div class="box">
                    <h2 class="name">Love Yourself</h2>
                    <!--<a href="#" class="buy">Buy Now</a>-->
                    <div class="circle"></div>
                    <img src="g2/11.jpg" class="product">
                </div>
                <div class="box">
                    <h2 class="name">Monsters in my Head</h2>
                    <!--<a href="#" class="buy">Buy Now</a>-->
                    <div class="circle"></div>
                    <img src="g2/12.jpg" class="product">
                </div>
                <div class="box">
                    <h2 class="name">Societal flaws</h2>
                    <!--<a href="#" class="buy">Buy Now</a>-->
                    <div class="circle"></div>
                    <img src="g2/13.jpg" class="product">
                </div>
                <div class="box">
                    <h2 class="name">Breaking Through</h2>
                    <!--<a href="#" class="buy">Buy Now</a>-->
                    <div class="circle"></div>
                    <img src="g2/14.jpg" class="product">
                </div>
                <div class="box">
                    <h2 class="name">Masquerade</h2>
                    <!--<a href="#" class="buy">Buy Now</a>-->
                    <div class="circle"></div>
                    <img src="g2/15.jpg" class="product">
                </div>
            </div>
        </section>
        <div id="navigation">
            <ul>
                <li> <h1> Hey,  <?php echo $_SESSION['username']; ?> </h1> </li>
                <li><a href="index.php">Home</a></li>
                <li><a href="gallery.php">Art gallery</a></li>
                <li><a class="active" href="gallery2.php">Our Artworks</a></li>
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
