<?php
require "dbConn.php";

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