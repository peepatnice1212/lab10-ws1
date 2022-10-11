<html>
<body>
<?php
if(!empty($_GET)){
   $lang = $_GET["language"];
    setcookie("lang",$lang, time()+5);
}
if (!isset($_COOKIE["lang"])) {
    echo "welcome, and add language in url";
    }
    else{
        echo "add language";
    }
?>
<br>
<a href="main.php">#</a>
</body>
</html>