<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8" /> 
    <title>priv.gq</title>
    <style>
        footer {
            font-size: 0.8em;
        }
    </style>
</head> 
<body>
    <h1>priv.gq: Short, sweet, and private URL shortner</h1>
    
    <form action="shorten.php" method="post">
        <span>http://</span><input type="text" placeholder="example.com" name="url">
        <input type="submit" name="submit" value="Shorten!">
    </form>

    <footer>
        <p>priv.gq by Liam O'Flynn, "whirish", v1.0.&nbsp;&nbsp;<a href="https://github.com/whirish/priv.gq" target="_blank">View the source.</a>&nbsp;&nbsp;Licensed under the <a href="https://github.com/whirish/priv.gq/blob/master/LICENSE" target="_blank">GNU GPLv3</a></p>
    </footer>
</body>
</html>

