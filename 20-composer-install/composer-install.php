<?php
// Composer install
require_once 'vendor/autoload.php';

use Cocur\Slugify\Slugify;

$slug = new Slugify();
$slugify->addRule('ão', 'funcionou');
echo $slug->slugify('teste com acentuação para geração de slug', '_');