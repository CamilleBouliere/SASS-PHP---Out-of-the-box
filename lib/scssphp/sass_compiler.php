<?php

namespace Leafo\ScssPhp;

use Leafo\ScssPhp\Server;
use \Leafo\ScssPhp\Compiler;

require "scss.inc.php";

$scss_folder = '../../scss/';

$scss = new Compiler();

$scss->setImportPaths($scss_folder);

$filename = $scss_folder.$_GET['filename'].'.scss';

//the name argument is optional
$scss->setLineNumbers(true, $filename);

header("Content-type: text/css");
echo $scss->compile(file_get_contents($filename));