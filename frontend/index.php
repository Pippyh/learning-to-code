<?php

require_once '/var/www/vendor/autoload.php';

$mloader = new Mustache_Loader_FilesystemLoader($_SERVER['DOCUMENT_ROOT'].'/templates');
$mustache = new Mustache_Engine(['loader' => $mloader]);


$names = ["Pippy", "Peter", "Mark", "Mary"];
$data = [];
$data['sport'] = 'tennis';
$data['names'] = $names;

foreach ($names as $thisname) {
    echo "<p>Hello $thisname</p>";
}

echo $mustache->render('index',$data);
