<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8" /> 
    <title>priv.gq</title> 
</head> 
<body>
    <?php
        $shrts = json_decode(file_get_contents("./json/shrts.json"), true);
        $ushrt = basename($_SERVER['REQUEST_URI']);
        if (array_key_exists($ushrt, $shrts)) {
            echo "<h1>Redirecting to ".$shrts[$ushrt]."</h1>";
            echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$shrts[$ushrt].'">';
        } else {
            echo "<h1>Error 404: Page not found.</h1>";
        }
    ?>
</body>
</html>

