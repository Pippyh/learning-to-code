<?php

require_once '/var/www/vendor/autoload.php';

$mloader = new Mustache_Loader_FilesystemLoader($_SERVER['DOCUMENT_ROOT'].'/templates');
$mustache = new Mustache_Engine(['loader' => $mloader]);


$names = ["Pippy", "Peter", "Mark", "Mary"];
$data = [];
$data['sport'] = 'tennis';
$data['names'] = $names;

echo $mustache->render('index',$data);
