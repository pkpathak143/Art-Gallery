<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="login.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <title>LOGIN</title>
    </head>
    <body>
            
            <header>
                <a class="logo"><img src="Icons/logo.png"></a>
            </header>

        <div class="container" id="container">
            <div class="form-container sign-up-container">
                
                <form action="register.php" method="post">
                    <h1>Create Account</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-google">   Google</i></a>
                    </div>
                    <span>or use your email for registration</span>
                    <input name="name" type="text" placeholder="Username" />
                    <input name="email" type="email" placeholder="Email" />
                    <input name="password" type="password" placeholder="Password" />
                    <button>Sign Up</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="validation.php" method="post">
                    <h1>Sign in</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-google"> Google</i></a>
                    </div>
                    <span>or use your account</span>
                    <input name="name" type="text" placeholder="Username" />
                    <input name="password" type="password" placeholder="Password" />
                    <button>Sign In</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>Please login with your personal info and enjoy the art</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello Art lover!</h1>
                        <p>Dive into the sea of art with us</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="main.js"></script>
    </body>
</html>