<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>IQ Lounge - General Discussion</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
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
                    
                        <a class="btn btn-outline-dark" href="login.php">Login</a>
                    
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">General Discussion</h1>
                    <p class="lead fw-normal text-white-50 mb-0"></p>
                </div>
            </div>
        </header>
        <!-- Chat Room-->
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8 col-sm-12">
                    <div class="comment-wrapper">
                        <div class="panel panel-info">
                            <div class="panel-heading ">
                                Comment Panel
                            </div>
                            <div class="panel-body">
                                <!-- post comment -->
                                <form  name="postComment" id="postComment" method="post" action="util/insertGenDisc.php" >
                                    <textarea form="postComment" name="content" class="form-control" placeholder="write a comment..." rows="3"></textarea>
                                    <br>
                                    <button form="postComment" type="submit" value="insert" class="btn btn-info pull-right">Post</button>
                                </form>
                                <div class="clearfix"></div>
                                <hr>
                                <ul class="media-list">
                                    <?php
require "util/dbConn.php";

$comments = "SELECT * FROM post ORDER BY date";

$results = mysqli_query($db, $comments);

foreach($results as $r)
{
    echo
        "<li class=\"media\">" .
            "<a href=\"#\" class=\"pull-left\">".
                "<img src=\"https://bootdey.com/img/Content/user_1.jpg\" alt=\"\" class=\"img-circle\">".
            "</a>".
            "<div class=\"media-body\">".
                "<span class=\"text-muted pull-right\">".
                    "<small class=\"text-muted\">" . $r['date'] . "</small>" .
                "</span>".
                "<p>". $r['content'] . "</p>" .
            "</div>".
        "</li>";
}
?>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
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
