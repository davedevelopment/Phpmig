<?php

/**
 * This file is part of phpmig
 *
 * Copyright (c) 2011 Dave Marshall <dave.marshall@atstsolutuions.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!defined('PHPMIG_VERSION')) {
    define('PHPMIG_VERSION', 'dev');
}

if (is_dir(__DIR__ . '/../src/Phpmig')) {
    require_once __DIR__ . "/../src/Phpmig/autoload.php.dist";
} else {
    require_once "Phpmig/autoload.php.dist";
}

$app = new Phpmig\Console\PhpmigApplication(PHPMIG_VERSION);
$app->run();
