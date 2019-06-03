<?php

if ($_GET["q"] == "Ping") {
    echo "OK";

} elseif ($_GET["q"] == "Name") {
    echo "Louie Pisani";

} elseif ($_GET["q"] == "Email Address") {
    echo "louiepisani@gmail.com";

} elseif ($_GET["q"] == "Phone") {
    echo "8145946843";

} elseif ($_GET["q"] == "Resume") {
    echo "http://2d07fc1a.ngrok.io/resume.php";

} elseif ($_GET["q"] == "Degree") {
    echo "Bachelors degree, RoR/js bootcamp";

} elseif ($_GET["q"] == "Position") {
    echo "Software Engineer with Fullstack, Backend, Data or Frontend experienc";

} elseif ($_GET["q"] == "Referrer") {
    echo "angel.co";

} elseif ($_GET["q"] == "Years") {
    echo "4";

} elseif ($_GET["q"] == "Source") {
    echo "https://github.com/sloptoad/php-server";

} elseif ($_GET["q"] == "Status") {
    echo "yes";

} elseif ($_GET["q"] == "Puzzle") {
    $parsedurl = parse_url($_SERVER['REQUEST_URI']);

    $aPortion = substr($parsedurl["query"], 49, 7);
    $bPortion = substr($parsedurl["query"], 59, 7);
    $cPortion = substr($parsedurl["query"], 69, 7);
    $dPortion = substr($parsedurl["query"], 79, 7);
    $portions = array($aPortion, $bPortion, $cPortion, $dPortion);
    $count = count($portions);

    for ($i = 0; $i < $count; $i++) {
        $portions[$i] = str_replace('%3E', '>', $portions[$i]);
        $portions[$i] = str_replace('%3D', '=', $portions[$i]);
        $portions[$i] = str_replace('%3C', '<', $portions[$i]);
        if ($i == 0) {
            $portions[$i] = str_replace(substr($portions[$i], 1, 1), '=', $portions[$i]);
        }
        if ($i == 1) {
            $portions[$i] = str_replace(substr($portions[$i], 2, 1), '=', $portions[$i]);
        }
        if ($i == 2) {
            $portions[$i] = str_replace(substr($portions[$i], 3, 1), '=', $portions[$i]);
        }
        if ($i == 3) {
            $portions[$i] = str_replace(substr($portions[$i], 4, 1), '=', $portions[$i]);
        }
        echo "\n";
        echo $portions[$i];
    }
    echo "\n";
    echo "So I couldn't figure out what this pattern was,";
    echo "\n";
    echo "besides that the equal sign moves one position forward on each letter,";
    echo "\n";
    echo "so i would have tried to code more of the solution but I had no idea what it was. ";
    echo "\n";
}

?>
