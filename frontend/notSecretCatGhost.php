<?php

require_once '/var/www/vendor/autoload.php';

$mloader = new Mustache_Loader_FilesystemLoader($_SERVER['DOCUMENT_ROOT'].'/templates');
$mustache = new Mustache_Engine(['loader' => $mloader]);

echo $mustache->render('notSecretCatGhost', []);
