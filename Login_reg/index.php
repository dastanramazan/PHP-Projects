<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register and Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
    <body>
    <!-- SIGN UP -->
        <div class="container" id="signUp" style="display: none;">
            <h1 class="form-title">Register</h1>
            <form action="signup.php" method="post">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="firstName" id="firstName" placeholder="Your name" required>
                    <label for="firstName">First Name</label>
                </div>

                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="lastName" id="lastName" placeholder="Your last name" required>
                    <label for="lastName">Last Name</label>
                </div>

                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="Your email" required>
                    <label for="email">Email</label>
                </div>

                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>

                <input type="submit" class="btn" value="Sign Up" name="signup">

                <p class="or">
                    --------or--------
                </p>
                <div class="icons">
                    <i class="fab fa-google"></i>
                    <i class="fab fa-facebook"></i>
                </div>
                
                <div class="links">
                    <p>Already have account</p>
                    <button id="signInButton">Sign In</button>
                </div>
        </div>

    <!-- SIGN IN -->
        
    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form action="signup.php" method="post">
            
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Your email" required>
                <label for="email">Email</label>
            </div>

            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="password" required>
                <label for="password">Password</label>
            </div>

            <p class="forgot-password">
                <a href="#">Forgot Password?</a>
            </p>

            <input type="submit" class="btn" value="Sign In" name="signIn">

            <p class="or">
                --------or--------
            </p>
            <div class="icons">
                <i class="fab fa-google"></i>
                <i class="fab fa-facebook"></i>
            </div>
            
            <div class="links">
                <p>Don't have account yet?</p>
                <button id="signUpButton">Sign Up</button>
            </div>
    </div>

    <script src="script.js"></script>
    </body>
</html>