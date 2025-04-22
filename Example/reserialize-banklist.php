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
use JMS\Serializer\Handler\HandlerRegistryInterface;

require_once '../vendor/autoload.php';

$serializerBuilder = \Pohoda\Xml\SerializerBuilder::create();

$serializer = $serializerBuilder->build();

$xmlContent = file_get_contents(__DIR__.'/banklist.xml');

// Use Helper::xml2ns to detect the PHP class name
$phpClassName = \Pohoda\Xml\Helper::xml2ns($xmlContent);
if ($phpClassName) {
    // Deserialize the XML into the detected PHP class
    $responsePack = $serializer->deserialize($xmlContent, $phpClassName, 'xml');

    foreach ($responsePack->getResponsePackItem() as $responsePackItem) {
        foreach ($responsePackItem->getListBank() as $invoiceList) {
            $transfers = $invoiceList->getBank();

            foreach ($transfers as $invoice) {
                echo '# '.$invoice->getBankHeader()->getNumber().' '.$invoice->getBankHeader()->getSymVar().' = '.$invoice->getBankSummary()->getHomeCurrency()->getPriceHighSum()."\n";
            }
        }
    }
    
    
    
    $newXml = $serializer->serialize($responsePack, 'xml');
    echo $newXml;
    file_put_contents(__DIR__.'/banklist2.xml',$newXml);
} else {
    echo "Namespace not found for the root element.\n";
}
