<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/DHVANI/assets/style.css">
</head>

<body>
    <header>
        <nav class="navbar">
            <a href="/" class="logo">DHVANI</a>
            <div class="nav-buttons">
                <button onclick="location.href='/login'" class="btn login">Login</button>
                <button onclick="location.href='/signup'" class="btn signup">Signup</button>
            </div>
        </nav>
    </header>
    <main>

        <div class="form-box">
            <div class="form-value">
                <form action="">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required>
                        <label for="">Password</label>
                    </div>
                    <div class="forget">
                        <label><input type="checkbox">Remember Me</label>
                        <a href="#">Forget password?</a>

                    </div>
                    <button>Log in</button>
                    <div class="register">
                        <p>Don't have an account ? </p>
                        <a href="../DGL_123_PROJECT/Controllers/signup.php"> Register</a>
                </form>
            </div>
        </div>
    </main>



    <script src="/DHVANI/assets/js/login.js" async defer></script>
</body>

</html>