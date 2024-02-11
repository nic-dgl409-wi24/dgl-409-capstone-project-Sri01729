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
                <button onclick="window.location.href='/DHVANI/views/login.view.php';" class="btn signup">Login</button>
                <button onclick="window.location.href='/DHVANI/views/signup.view.php';"
                    class="btn login">Signup</button>
            </div>
        </nav>
    </header>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="">
                    <h2>Signup</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="name" required>
                        <label for="">Name</label>
                    </div>
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
                    <button>Register</button>
                    <div class="register">
                        <label>Already have an account?</label>
                        <a href="/DHVANI/views/login.view.php"> Login</a>
                </form>
            </div>
        </div>
    </section>
    <div class="overlay"></div>
    <script type="module" src="https://unpkg.com/@splinetool/viewer@1.0.51/build/spline-viewer.js"></script>
    <spline-viewer url="https://prod.spline.design/c9fcTwaKmqpWhCkC/scene.splinecode"></spline-viewer>


    <script src="/DHVANI/assets/js/main.js" async defer></script>
</body>

</html>