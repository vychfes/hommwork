<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Palmo Helloe world</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <meta name="theme-color" content="#fafafa">
</head>

<body style="margin: 0;">

<!-- Add your site or application content here -->
<!--<main style="display: flex; justify-content:center; margin-top: 25px;">-->
<!--    <img src="palmo.jpg" alt="">-->
<!--</main>-->
<?php
$strAbc = 'abc';
$strWww = 'www';
$strZzz = 'zzz';
$strRond = 'a;hio kjblk';
if (strpos($strAbc, $strRond) === 0) {
    echo str_replace($strAbc, $strWww, $strRond), "<br/>";;
} else {
    echo $strRond . $strZzz, "<br/>";
}


$strLeng = 'slava';
$simvol = 'o';
if (mb_strlen($strLeng) >= 10) {
    $strLeng = mb_strcut($strLeng, 0, 6);
    echo $strLeng, "<br/>";
} else {
    for ($x = 0; $x < strlen($strLeng); $x++) {
        if (strlen($strLeng) <= 12) {
            $strLeng = $strLeng . $simvol;
        }

    }
    echo $strLeng, "<br/>";
}


$strNum = 'ioh4lbu4ug5654';
$count = preg_match_all('/\\d/', $strNum);
echo $count, "<br/>";


$strAllWorld = 'ioug  World World World';
$strLetter = 'letter';
$strWorld = 'World';
echo str_replace($strWorld, $strLetter, $strAllWorld), "<br/>";


$xAbc = 'xabc';
$abc = 'abc';
$strXabc = 'xabc slava xabc xzzz';
echo str_replace($xAbc, $abc, $strXabc), "<br/>";


?>
</body>

</html>
<?php
//phpinfo();
