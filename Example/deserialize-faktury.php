<?php
declare(strict_types=1);

require_once dirname(__DIR__).'/vendor/autoload.php';

use Pohoda\Helper;

$serializer = Helper::getSerializer();

$xmlContent = file_get_contents(__DIR__.'/invoice_01_v2.0.xml');

$phpClassName = \Pohoda\Data\DataPackType::class;

if ($phpClassName) {
    // Deserialize the XML into the detected PHP class
    $dataPack = $serializer->deserialize($xmlContent, $phpClassName, 'xml');

    foreach ($dataPack->getDataPackItem() as $dataPackItem) {
        $invoices = $dataPackItem->getInvoice();
        foreach ($invoices as $invoice) {
            echo '# '.$invoice->getInvoiceHeader()->getNumber()?->getNumberRequested().' '.$invoice->getInvoiceHeader()->getSymVar().' = '.$invoice->getInvoiceSummary()->getHomeCurrency()->getPriceHighSum()."\n";
        }
    }
} else {
    echo "Namespace not found for the root element.\n";
}
