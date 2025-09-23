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

$xmlContent = file_get_contents(__DIR__.'/faktury_03_v2.0.xml');

// Use Helper::xml2ns to detect the PHP class name
$phpClassName = \Pohoda\Response\ResponsePackType::class;

if ($phpClassName) {
    // Deserialize the XML into the detected PHP class
    $responsePack = $serializer->deserialize($xmlContent, $phpClassName, 'xml');

    foreach ($responsePack->getResponsePackItem() as $responsePackItem) {
        $listInvoices = $responsePackItem->getListInvoice();
        if ($listInvoices) {
            foreach ($listInvoices as $listInvoice) {
                $invoices = $listInvoice->getInvoice();

                foreach ($invoices as $invoice) {
                    echo '# '.$invoice->getInvoiceHeader()->getNumber()->getNumberRequested().' '.$invoice->getInvoiceHeader()->getSymVar().' = '.$invoice->getInvoiceSummary()->getHomeCurrency()->getPriceHighSum()."\n";
                }
            }
        }
    }
} else {
    echo "Namespace not found for the root element.\n";
}
