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

namespace Pohoda\Xml;

class Helper
{
    /**
     * Static namespace map for XML namespaces to PHP namespaces.
     */
    protected static array $namespaceMap = [
        'http://www.stormware.cz/schema/version_2/accountancy.xsd' => 'Pohoda\Accountancy',
        'http://www.stormware.cz/schema/version_2/accountingFormOfPayment.xsd' => 'Pohoda\AccountingFormOfPayment',
        'http://www.stormware.cz/schema/version_2/accountingSalesVouchers.xsd' => 'Pohoda\AccountingSalesVouchers',
        'http://www.stormware.cz/schema/version_2/accountingunit.xsd' => 'Pohoda\Accountingunit',
        'http://www.stormware.cz/schema/version_2/actionPrice.xsd' => 'Pohoda\ActionPrice',
        'http://www.stormware.cz/schema/version_2/activity.xsd' => 'Pohoda\Activity',
        'http://www.stormware.cz/schema/version_2/addressbook.xsd' => 'Pohoda\AddressBook',
        'http://www.stormware.cz/schema/version_2/archive.xsd' => 'Pohoda\Archive',
        'http://www.stormware.cz/schema/version_2/automaticLiquidation.xsd' => 'Pohoda',
        'http://www.stormware.cz/schema/version_2/balance.xsd' => 'Pohoda\Balance',
        'http://www.stormware.cz/schema/version_2/bankAccount.xsd' => 'Pohoda\BankAccount',
        'http://www.stormware.cz/schema/version_2/bank.xsd' => 'Pohoda\Bank',
        'http://www.stormware.cz/schema/version_2/cashRegister.xsd' => 'Pohoda\CashRegister',
        'http://www.stormware.cz/schema/version_2/category.xsd' => 'Pohoda\Category',
        'http://www.stormware.cz/schema/version_2/centre.xsd' => 'Pohoda\Centre',
        'http://www.stormware.cz/schema/version_2/classificationVAT.xsd' => 'Pohoda\ClassificationVAT',
        'http://www.stormware.cz/schema/version_2/contract.xsd' => 'Pohoda\Contract',
        'http://www.stormware.cz/schema/version_2/data-package.xsd' => 'Pohoda\DataPackage',
        'http://www.stormware.cz/schema/version_2/data.xsd' => 'Pohoda\Data',
        'http://www.stormware.cz/schema/version_2/discount.xsd' => 'Pohoda\Discount',
        'http://www.stormware.cz/schema/version_2/documentresponse.xsd' => 'Pohoda\Documentresponse',
        'http://www.stormware.cz/schema/version_2/enquiry.xsd' => 'Pohoda\Enquiry',
        'http://www.stormware.cz/schema/version_2/establishment.xsd' => 'Pohoda\Establishment',
        'http://www.stormware.cz/schema/version_2/filter.xsd' => 'Pohoda\Filter',
        'http://www.stormware.cz/schema/version_2/GDPR.xsd' => 'Pohoda\Gdpr',
        'http://www.stormware.cz/schema/version_2/groupStocks.xsd' => 'Pohoda\GroupStocks',
        'http://www.stormware.cz/schema/version_2/individualPrice.xsd' => 'Pohoda\IndividualPrice',
        'http://www.stormware.cz/schema/version_2/intDoc.xsd' => 'Pohoda\IntDoc',
        'http://www.stormware.cz/schema/version_2/intParam.xsd' => 'Pohoda\IntParam',
        'http://www.stormware.cz/schema/version_2/inventoryLists.xsd' => 'Pohoda\InventoryLists',
        'http://www.stormware.cz/schema/version_2/invoice.xsd' => 'Pohoda\Invoice',
        'http://www.stormware.cz/schema/version_2/isdoc.xsd' => 'Pohoda\Isdoc',
        'http://www.stormware.cz/schema/version_2/liquidationWithoutLink.xsd' => 'Pohoda\LiquidationWithoutLink',
        'http://www.stormware.cz/schema/version_2/list_activity.xsd' => 'Pohoda\ListActivity',
        'http://www.stormware.cz/schema/version_2/list_addBook.xsd' => 'Pohoda\ListAddBook',
        'http://www.stormware.cz/schema/version_2/list_centre.xsd' => 'Pohoda\ListCentre',
        'http://www.stormware.cz/schema/version_2/list_contract.xsd' => 'Pohoda\ListContract',
        'http://www.stormware.cz/schema/version_2/list_stock.xsd' => 'Pohoda\ListStock',
        'http://www.stormware.cz/schema/version_2/list.xsd' => 'Pohoda\List',
        'http://www.stormware.cz/schema/version_2/lock.xsd' => 'Pohoda\Lock',
        'http://www.stormware.cz/schema/version_2/mKasa.xsd' => 'Pohoda\MKasa',
        'http://www.stormware.cz/schema/version_2/movement.xsd' => 'Pohoda\Movement',
        'http://www.stormware.cz/schema/version_2/numericalSeries.xsd' => 'Pohoda\NumericalSeries',
        'http://www.stormware.cz/schema/version_2/offer.xsd' => 'Pohoda\Offer',
        'http://www.stormware.cz/schema/version_2/order.xsd' => 'Pohoda\Order',
        'http://www.stormware.cz/schema/version_2/parameter.xsd' => 'Pohoda\Parameter',
        'http://www.stormware.cz/schema/version_2/payment.xsd' => 'Pohoda\Payment',
        'http://www.stormware.cz/schema/version_2/prevodka.xsd' => 'Pohoda\Prevodka',
        'http://www.stormware.cz/schema/version_2/prijemka.xsd' => 'Pohoda\Prijemka',
        'http://www.stormware.cz/schema/version_2/print.xsd' => 'Pohoda\Print',
        'http://www.stormware.cz/schema/version_2/prodejka.xsd' => 'Pohoda\Prodejka',
        'http://www.stormware.cz/schema/version_2/productRequirement.xsd' => 'Pohoda\ProductRequirement',
        'http://www.stormware.cz/schema/version_2/recyclingContrib.xsd' => 'Pohoda\RecyclingContrib',
        'http://www.stormware.cz/schema/version_2/registrationNumber.xsd' => 'Pohoda\RegistrationNumber',
        'http://www.stormware.cz/schema/version_2/response.xsd' => 'Pohoda\Response',
        'http://www.stormware.cz/schema/version_2/rulesPairing.xsd' => 'Pohoda\RulesPairing',
        'http://www.stormware.cz/schema/version_2/sendEET.xsd' => 'Pohoda\SendEET',
        'http://www.stormware.cz/schema/version_2/service.xsd' => 'Pohoda\Service',
        'http://www.stormware.cz/schema/version_2/stock.xsd' => 'Pohoda\Stock',
        'http://www.stormware.cz/schema/version_2/storage.xsd' => 'Pohoda\Storage',
        'http://www.stormware.cz/schema/version_2/store.xsd' => 'Pohoda\Store',
        'http://www.stormware.cz/schema/version_2/supplier.xsd' => 'Pohoda\Supplier',
        'http://www.stormware.cz/schema/version_2/type.xsd' => 'Pohoda\Type',
        'http://www.stormware.cz/schema/version_2/voucher.xsd' => 'Pohoda\Voucher',
        'http://www.stormware.cz/schema/version_2/vydejka.xsd' => 'Pohoda\Vydejka',
        'http://www.stormware.cz/schema/version_2/vyroba.xsd' => 'Pohoda\Vyroba',
        'http://www.stormware.cz/schema/version_2/userAgenda.xsd' => 'Pohoda\UserAgenda',
        'http://www.stormware.cz/schema/version_2/advancePartFulfilment.xsd' => 'Pohoda\AdvancePartFulfilment',
    ];

    /**
     * Extract the PHP namespace and class name from the XML string contents.
     *
     * @param string $xmlContent the XML content as a string
     *
     * @return null|string fully qualified PHP class name or null if not found
     */
    public static function xml2ns(string $xmlContent): ?string
    {
        $xml = new \SimpleXMLElement($xmlContent);

        // Get the root element name
        $rootElementName = $xml->getName();

        // Extract the namespace URI from the root element
        $namespaces = $xml->getNamespaces(true);

        foreach ($namespaces as $prefix => $namespaceUri) {
            // Map the namespace URI to the PHP namespace
            if (isset(self::$namespaceMap[$namespaceUri])) {
                return self::$namespaceMap[$namespaceUri].'\\'.ucfirst($rootElementName);
            }
        }

        return null; // Namespace not found
    }

    /**
     * Extract and return only lst:LstInvoice items from the deserialized object.
     *
     * @param object $object the deserialized object
     *
     * @return array an array of lst:LstInvoice items
     */
    public static function getListItems(object $object): array
    {
        $listItems = [];

        // Check if the object contains a property for responsePackItem or similar
        if (property_exists($object, 'responsePackItem') && is_iterable($object->responsePackItem)) {
            foreach ($object->responsePackItem as $item) {
                // Check if the item contains lst:LstInvoice
                if (property_exists($item, 'listInvoice') && is_iterable($item->listInvoice)) {
                    foreach ($item->listInvoice as $invoice) {
                        $listItems[] = $invoice;
                    }
                }
            }
        }

        return $listItems;
    }

    /**
     * Recursively find and return list items from the given data.
     *
     * @param mixed $data the data to search
     *
     * @return array an array of list items
     */
    public static function findListItems($data): array
    {
        $baseClassName = (new \ReflectionClass($data))->getShortName();

        return $listItems;
    }
}
