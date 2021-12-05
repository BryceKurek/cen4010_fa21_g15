<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>IQ Lounge - New Account</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/login.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.html">IQ Lounge</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Account</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Rooms</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="discussion.php">General Discussion</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">TBA</a></li>
                                <li><a class="dropdown-item" href="#!">TBA</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#!">Help</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Features-->
        <section class="py-5">
            <h1 class="display-5 fw-bolder text-center">Create New Account</h1>
            <div class="container mt-5 mb-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center"> 
                    <div>
                        <div id="form" class="form">                 
                        <!-- Login Form -->
                        <form action="registration.php" method="post">
                            <input type="text"  id="login" class="mb-1" name="firstname" placeholder="Enter Firstname" required>
                            <input type="text"  id="login" class="mb-3" name="lastname" placeholder="Enter Lastname" required>
                            <input type="text"  id="login" class="mb-1" name="email" placeholder="Enter Email" required>
                            <input type="text"  id="login" class="mb-1" name="username" placeholder="Enter Username" required>

                            <input type="password"  id="password" class="mb-1" name="password" placeholder="Enter Password" required>
                            <input type="password"  id="confirmpassword" class="mb-3" name="password_check" placeholder="Confirm Password" required>
                            <input type="submit"  value="Create Account" class="btn-primary mb-1">
                        </form>

                        </div>
                      </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container">
                <a class="btn btn-secondary" href="https://lamp.cse.fau.edu/~cen4010_fa21_g15/index.html">About Us</a>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
