<?php
if (file_exists( __DIR__ . '/vendor/autoload.php'))
{
	require_once __DIR__ . '/vendor/autoload.php';
}
if (file_exists(__DIR__ . '/../../../vendor/autoload.php'))
{
	require_once __DIR__ . '/../../../vendor/autoload.php';
}

use HelloWorld\SayHello;

echo SayHello::world();
