<?php

require_once '/var/www/vendor/autoload.php';

$mloader = new Mustache_Loader_FilesystemLoader($_SERVER['DOCUMENT_ROOT'].'/templates');
$mustache = new Mustache_Engine(['loader' => $mloader]);


$names = ["Pippy", "Peter", "Mark", "Mary"];

echo "<p>do you like big monsters?</p>

<h1>well you're going to</h1>

<p>maybe</p>

<h2>bibble bye</h2>";

foreach ($names as $thisname) {
    echo "<p>Hello $thisname</p>";
}

echo $mustache->render('index.mustache,[]');
