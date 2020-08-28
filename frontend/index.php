<?php

require_once '/var/www/vendor/autoload.php';

use Mustache_Loader_FilesystemLoader;
use Mustache_Engine;

$names = ["Pippy", "Peter", "Mark", "Mary"];

echo "<p>babble bee</p>

<p>do you like big monsters?</p>

<h1>well you're going to</h1>

<p>maybe</p>

<h2>bibble bye</h2>";

foreach ($names as $thisname) {
    echo "<p>Hello $thisname</p>";
}
