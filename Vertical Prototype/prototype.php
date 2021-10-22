<!DOCTYPE html>
<html>

<head>
    <title>DB prototype</title>
</head>

<body>
    
    <form method="post">
        <input type="text" name="email"/>
        <div></div>
        <input type="text" name="username"/>
        <div></div>
        <input type="text" name="firstname"/>
        <div></div>
        <input type="text" name="lastname"/>
        <div></div>
        <input type="text" name="password"/>
        <div></div>
        <input type="submit" value="Insert"/>
    </form>

    <form method="post">
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
        } else {echo "<div>No results found.</div>"}
    }
    ?>
</body>

</html>