<?php
require_once __DIR__ . '/./vendor/autoload.php';

use CowSay\Cow as Cow;
$bessie = new Cow('Hello, Farm!');
$bessie->setTongue('U');
echo $bessie;