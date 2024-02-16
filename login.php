<?php
// session_start();
require 'function.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $cekdatabase = mysqli_query($conn, "SELECT * FROM login where email='$email' and password='$password'");

    $hitung = mysqli_num_rows($cekdatabase);

    if($hitung > 0){
        $_SESSION['loggedin'] = true; // Update the session variable name to 'loggedin'
        header('location:index.php');
    } else {
        header('location:login.php');
    }
};

if(isset($_SESSION['loggedin'])){ // Check for 'loggedin' session variable
    header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/login.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="login-panel">
                    <div class="wp">
                        <img src="./assets/img/Illustration.svg" alt="">
                    </div>
                    <div class="box-panel">
                        <div class="box-header">
                            <h3 class="box-heading">Welcome</h3>
                            <p>Sign in</p>
                        </div>
                        <form method="post">
                            <div class="box-body">
                                <div class="input-field">
                                    <img class="input-icon" src="./assets/img/mail_icon.svg" alt="">
                                    <div class="wrapper">

                                        <label class="" for="inputEmailAddress">Email</label>
                                        <input class="" name="email" id="inputEmailAddress" type="email"
                                            placeholder="Enter email address" />
                                    </div>
                                </div>
                                <div class="input-field">
                                    <img class="input-icon" src="./assets/img/password_icon.svg" alt="">
                                    <div class="wrapper">

                                        <label class="" for="inputPassword">Password</label>
                                        <input class="" name="password" id="inputPassword" type="password"
                                            placeholder="Enter password" />
                                    </div>
                                </div>
                                <div class="btn-wrapper">
                                    <button class="btn-panel" name="login">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>