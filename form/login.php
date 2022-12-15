<!doctype html>
<html lang="en">

<?php
  echo "IT WORKS"; // My File is successfuly Linked

  $con = mysqli_connect('localhost', 'root', '', '');

  if(mysqli_connect_errno()) {
    echo "1: Connection Failed"; //error code #1 = connection Failed
    exit();
  }
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="../assets/img/gallery.jpg" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css">
    <style>
        .form h2::before {
            left: 0;
            width: 70px !important;
            height: 4px;
            content: "";
            bottom: -10px;
            background: #fff;
            position: absolute;
        }
    </style>
    <title>Log in</title>
</head>

<body>
    <section>
        <div class="colour"></div>
        <div class="colour"></div>
        <div class="colour"></div>
        <div class="box">
            <div class="square" style="--i: 0"></div>
            <div class="square" style="--i: 1"></div>
            <div class="square" style="--i: 2"></div>
            <div class="square" style="--i: 3"></div>
            <div class="square" style="--i: 4"></div>
            <div class="container">
                <div class="form">
                    <h2>Login Form                
                        <a href="../index.php">
                            <i class="fa fa-home"></i>
                        </a>
                    </h2>


                    <form method="post" action="<?php echo htmlspecialchars("result.php"); ?>">
                        <div class="input__box">
                            <input type="text" placeholder="Username" required/>
                        </div>
                        <div class="input__box">
                            <input type="password" placeholder="Password" required/>
                        </div>
                        <div class="input__box">
                            <input type="submit" value="Login" />
                        </div>
                        <p class="forget">
                            Forgot Password? <a href="#">Click Here</a>
                        </p>
                        <p class="forget">
                            Don't have an account? <a href="signup.php">Sign Up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>