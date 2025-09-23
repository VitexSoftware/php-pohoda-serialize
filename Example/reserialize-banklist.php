<?php

declare(strict_types=1);

/**
 * This file is part of the PHP-Pohoda-Connector package
 *
 * https://github.com/VitexSoftware/PHP-Pohoda-Connector
 *
 * (c) VitexSoftware. <https://vitexsoftware.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once dirname(__DIR__).'/vendor/autoload.php';

use Pohoda\Helper;

$serializer = Helper::getSerializer();

$xmlContent = file_get_contents(__DIR__.'/bank_01_v2.0.xml');

$phpClassName = Helper::xml2php($xmlContent);

if ($phpClassName) {
    // Deserialize the XML into the detected PHP class
    $listBank = $serializer->deserialize($xmlContent, $phpClassName, 'xml');

    $xmlReContent = $serializer->serialize($listBank, 'xml');

    echo $xmlReContent;

} else {
    echo "Namespace not found for the root element.\n";
}
