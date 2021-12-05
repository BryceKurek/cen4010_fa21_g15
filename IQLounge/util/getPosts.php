<?php
$conn = mysqli_connect("localhost","cen4010_fa21_g15","N55POhE+OF","cen4010_fa21_g15");
session_start();
if(isset($_SESSION['userid']) && isset($_SESSION['username'])  && isset($_SESSION['firstname'])){
$comments = "SELECT * FROM post, user WHERE post.userid = user.userid ORDER BY date";

$results = mysqli_query($conn, $comments);

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
}}
?>