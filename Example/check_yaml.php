<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

$files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator(__DIR__ . '/../metadata'));
$files = new \RegexIterator($files, '/\.yml$/');

foreach ($files as $file) {
    $yaml = Yaml::parseFile($file->getRealPath());
    foreach ($yaml as $class => $metadata) {
        if (isset($metadata['xml_root_namespace']) && !isset($metadata['namespace'])) {
            echo "Missing 'namespace' key in file: " . $file->getRealPath() . "\n";
        }
    }
}
