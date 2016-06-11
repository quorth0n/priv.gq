<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8" /> 
    <title>priv.gq</title> 
</head> 
<body>
    <?php
        if (isset($_POST["url"]) && !empty($_POST["url"]) && isset($_POST["submit"])) {
            function randstr($length = 5) {
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $charactersLength = strlen($characters);
                $randomString = '';
                for ($i = 0; $i < $length; $i++) {
                    $randomString .= $characters[rand(0, $charactersLength - 1)];
                }
                return $randomString;
            }
            $orig = "http://".$_POST["url"];
            $r = randstr();
            $shrts = json_decode(file_get_contents("./json/shrts.json"), true);
            $shrts[$r] = $orig;
            file_put_contents("./json/shrts.json", json_encode($shrts));
            echo "<h1>$orig is avaliable at <a href='http://priv.gq/$r/' target='_blank'>http://priv.gq/$r/</a></h1>";
        }
    ?>
</body>
</html>

