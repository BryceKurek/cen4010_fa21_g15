<!DOCTYPE html>
<html>

<head>
    <title>DB prototype</title>
</head>

<body>
    
    <form action="insert.php" method="post">
        <input type="text" name="email" placeholder="email"/>
        <br>
        <input type="text" name="username" placeholder="username"/>
        <br>
        <input type="text" name="firstname" placeholder="firstname"/>
        <br>
        <input type="text" name="lastname" placeholder="lastname"/>
        <br>
        <input type="text" name="password" placeholder="password"/>
        <br>
        <input type="submit" value="Insert"/>
    </form>

    <form method="post">
        <div><p>Enter a users firstname to search for last name and email</p></div>
        <input type="text" name="search" required/>
        <input type="submit" value="Search"/>
    </form>

    <?php
    if(isset($_POST['search'])){
        require "search.php";
        if(count($results) > 0)
        {
            foreach($results as $r){
                echo "<div>" . $r['lastname'] . " - " . $r['email'] . "</div>";
            }
        } else {echo "<div>No results found.</div>";}
    }
    ?>
</body>

</html>