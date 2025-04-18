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

include_once '../vendor/autoload.php';

include_once '../src/Pohoda/Xml/Helper.php';

use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\SerializerBuilder;

$serializerBuilder = SerializerBuilder::create();
$serializerBuilder->addMetadataDir(__DIR__.'/../metadata', 'Pohoda');
$serializerBuilder->configureHandlers(static function (HandlerRegistryInterface $handler) use ($serializerBuilder): void {
    $serializerBuilder->addDefaultHandlers();
    $handler->registerSubscribingHandler(new BaseTypesHandler()); // XMLSchema List handling
    $handler->registerSubscribingHandler(new XmlSchemaDateHandler()); // XMLSchema date handling
});

$serializer = $serializerBuilder->build();

$xmlContent = file_get_contents(__DIR__.'/faktury_03_v2.0.xml');

// Use Helper::xml2ns to detect the PHP class name
$phpClassName = Helper::xml2ns($xmlContent);

if ($phpClassName) {
    // Deserialize the XML into the detected PHP class
    $responsePack = $serializer->deserialize($xmlContent, $phpClassName, 'xml');
    foreach ($responsePack->getResponsePackItem() as $responsePackItem){
        foreach ($responsePackItem->getListInvoice() as $invoiceList){
            $invoices = $invoiceList->getInvoice();
            foreach ($invoices as $invoice) {
                echo '# '.$invoice->getInvoiceHeader()->getNumber()->getNumberRequested() .' ' . $invoice->getInvoiceHeader()->getSymVar().' = '. $invoice->getInvoiceSummary()->getHomeCurrency()->getPriceHighSum() ."\n";
            }
        }
    }
    
} else {
    echo "Namespace not found for the root element.\n";
}
