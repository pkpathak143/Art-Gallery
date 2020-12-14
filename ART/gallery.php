<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initisl-scale=1.0">
        <title>Art Gallery</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <section class="banner" id="sec">
            <header>
                <a href="index.php" class="logo"><img src="Icons/logo.png"></a>
                <div id="toggle" onclick="toggle()"></div>
            </header>
            <div class="container">
                <div class="box">
                    <h2 class="name">The girl on the swing</h2>
                    <!--<a href="#" class="buy">Buy Now</a>-->
                    <div class="circle"></div>
                    <img src="g1/1.jpg" class="product">
                </div>
                <div class="box">
                    <h2 class="name">Starry night</h2>
                    <!--<a href="#" class="buy">Buy Now</a>-->
                    <div class="circle"></div>
                    <img src="g1/2.jpg" class="product">
                </div>
                <div class="box">
                    <h2 class="name">Buddha</h2>
                    <!--<a href="#" class="buy">Buy Now</a>-->
                    <div class="circle"></div>
                    <img src="g1/3.png" class="product">
                </div>
                <div class="box">
                    <h2 class="name">Blosson Street</h2>
                    <!--<a href="#" class="buy">Buy Now</a>-->
                    <div class="circle"></div>
                    <img src="g1/4.png" class="product">
                </div>
                <div class="box">
                    <h2 class="name">Lord Shiva</h2>
                   <!--<a href="#" class="buy">Buy Now</a>-->
                    <div class="circle"></div>
                    <img src="g1/5.png" class="product">
                </div>
                <div class="box">
                    <h2 class="name">Ballerina</h2>
                   <!--<a href="#" class="buy">Buy Now</a>-->
                    <div class="circle"></div>
                    <img src="g1/6.png" class="product">
                </div>
                <div class="box">
                    <h2 class="name">The Wolf</h2>
                    <!--<a href="#" class="buy">Buy Now</a>-->
                    <div class="circle"></div>
                    <img src="g1/7.png" class="product">
                </div>
                <div class="box">
                    <h2 class="name">Rainy Day</h2>
                   <!--<a href="#" class="buy">Buy Now</a>-->
                    <div class="circle"></div>
                    <img src="g1/8.png" class="product">
                </div>
                <div class="box">
                    <h2 class="name">The girl in white</h2>
                    <!--<a href="#" class="buy">Buy Now</a>-->
                    <div class="circle"></div>
                    <img src="g1/9.png" class="product">
                </div>
                <div class="box">
                    <h2 class="name">Lakeside View</h2>
                    <!--<a href="#" class="buy">Buy Now</a>-->
                    <div class="circle"></div>
                    <img src="g1/10.png" class="product">
                </div>
                <div class="box">
                    <h2 class="name">Colours of glass</h2>
                    <!--<a href="#" class="buy">Buy Now</a>-->
                    <div class="circle"></div>
                    <img src="g1/11.png" class="product">
                </div>
                <div class="box">
                    <h2 class="name">Umbrella days</h2>
                    <!--<a href="#" class="buy">Buy Now</a>-->
                    <div class="circle"></div>
                    <img src="g1/12.png" class="product">
                </div>

            </div>
        </section>
        <div id="navigation">
            <ul>
                <li> <h1> Hey,  <?php echo $_SESSION['username']; ?> </h1> </li>
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
