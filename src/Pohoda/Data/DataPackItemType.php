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

namespace Pohoda\Data;

/**
 * Class representing DataPackItemType.
 *
 * XSD Type: dataPackItemType
 */
class DataPackItemType
{
    private ?string $version = null;
    private ?string $id = null;

    /**
     * @var \Pohoda\AddressBook\Addressbook[]
     */
    private array $addressbook = [
    ];

    /**
     * @var \Pohoda\Enquiry\Enquiry[]
     */
    private array $enquiry = [
    ];

    /**
     * @var \Pohoda\IntDoc\IntDoc[]
     */
    private array $intDoc = [
    ];

    /**
     * @var \Pohoda\Invoice\Invoice[]
     */
    private array $invoice = [
    ];

    /**
     * @var \Pohoda\Offer\Offer[]
     */
    private array $offer = [
    ];

    /**
     * @var \Pohoda\Order\Order[]
     */
    private array $order = [
    ];

    /**
     * @var \Pohoda\Prodejka\Prodejka[]
     */
    private array $prodejka = [
    ];

    /**
     * @var \Pohoda\Prijemka\Prijemka[]
     */
    private array $prijemka = [
    ];

    /**
     * @var \Pohoda\Prevodka\Prevodka[]
     */
    private array $prevodka = [
    ];

    /**
     * @var \Pohoda\Stock\Stock[]
     */
    private array $stock = [
    ];

    /**
     * @var \Pohoda\Voucher\Voucher[]
     */
    private array $voucher = [
    ];

    /**
     * @var \Pohoda\Vydejka\Vydejka[]
     */
    private array $vydejka = [
    ];

    /**
     * @var \Pohoda\Vyroba\Vyroba[]
     */
    private array $vyroba = [
    ];

    /**
     * @var \Pohoda\Contract\Contract[]
     */
    private array $contract = [
    ];

    /**
     * @var \Pohoda\Store\Store[]
     */
    private array $store = [
    ];

    /**
     * @var \Pohoda\GroupStocks\GroupStocks[]
     */
    private array $groupStocks = [
    ];

    /**
     * @var \Pohoda\Storage\Storage[]
     */
    private array $storage = [
    ];

    /**
     * @var \Pohoda\Category\CategoryDetail[]
     */
    private array $categoryDetail = [
    ];

    /**
     * @var \Pohoda\Parameter\Parameter[]
     */
    private array $parameter = [
    ];

    /**
     * @var \Pohoda\IntParam\IntParamDetail[]
     */
    private array $intParamDetail = [
    ];

    /**
     * @var \Pohoda\InventoryLists\InventoryLists[]
     */
    private array $inventoryLists = [
    ];

    /**
     * @var \Pohoda\NumericalSeries\NumericalSeries[]
     */
    private array $numericalSeries = [
    ];

    /**
     * @var \Pohoda\Gdpr\GDPR[]
     */
    private array $gDPR = [
    ];

    /**
     * @var \Pohoda\ProductRequirement\ProductRequirement[]
     */
    private array $productRequirement = [
    ];

    /**
     * @var \Pohoda\Bank\Bank[]
     */
    private array $bank = [
    ];

    /**
     * @var \Pohoda\BankAccount\BankAccount[]
     */
    private array $bankAccount = [
    ];

    /**
     * @var \Pohoda\RulesPairing\RulesPairing[]
     */
    private array $rulesPairing = [
    ];

    /**
     * @var \Pohoda\Discount\Discount[]
     */
    private array $discount = [
    ];

    /**
     * @var \Pohoda\Service\Service[]
     */
    private array $service = [
    ];

    /**
     * @var \Pohoda\UserAgenda\UserAgenda[]
     */
    private array $userAgenda = [
    ];

    /**
     * @var \Pohoda\Centre\Centre[]
     */
    private array $centre = [
    ];

    /**
     * @var \Pohoda\Activity\Activity[]
     */
    private array $activity = [
    ];

    /**
     * @var \Pohoda\List\ListAccountancyRequest[]
     */
    private array $listAccountancyRequest = [
    ];

    /**
     * @var \Pohoda\ListAddBook\ListAddressBookRequest[]
     */
    private array $listAddressBookRequest = [
    ];

    /**
     * @var \Pohoda\List\ListInvoiceRequest[]
     */
    private array $listInvoiceRequest = [
    ];

    /**
     * @var \Pohoda\List\ListEnquiryRequest[]
     */
    private array $listEnquiryRequest = [
    ];

    /**
     * @var \Pohoda\List\ListOfferRequest[]
     */
    private array $listOfferRequest = [
    ];

    /**
     * @var \Pohoda\List\ListOrderRequest[]
     */
    private array $listOrderRequest = [
    ];

    /**
     * @var \Pohoda\ListStock\ListStockRequest[]
     */
    private array $listStockRequest = [
    ];

    /**
     * @var \Pohoda\List\ListParameterRequest[]
     */
    private array $listParameterRequest = [
    ];

    /**
     * @var \Pohoda\List\ListVydejkaRequest[]
     */
    private array $listVydejkaRequest = [
    ];

    /**
     * @var \Pohoda\List\ListPrijemkaRequest[]
     */
    private array $listPrijemkaRequest = [
    ];

    /**
     * @var \Pohoda\List\ListBalanceRequest[]
     */
    private array $listBalanceRequest = [
    ];

    /**
     * @var \Pohoda\List\ListProductRequirementRequest[]
     */
    private array $listProductRequirementRequest = [
    ];

    /**
     * @var \Pohoda\List\ListBankRequest[]
     */
    private array $listBankRequest = [
    ];

    /**
     * @var \Pohoda\List\CreateAccountingDoubleEntry[]
     */
    private array $createAccountingDoubleEntry = [
    ];

    /**
     * @var \Pohoda\List\ListUserCode[]
     */
    private array $listUserCode = [
    ];

    /**
     * @var \Pohoda\Accountingunit\ListAccountingUnitRequest[]
     */
    private array $listAccountingUnitRequest = [
    ];

    /**
     * @var \Pohoda\List\ListAccountingDoubleEntryRequest[]
     */
    private array $listAccountingDoubleEntryRequest = [
    ];

    /**
     * @var \Pohoda\List\ListAccountingSingleEntryRequest[]
     */
    private array $listAccountingSingleEntryRequest = [
    ];

    /**
     * @var \Pohoda\List\ListAccountRequest[]
     */
    private array $listAccountRequest = [
    ];

    /**
     * @var \Pohoda\ListActivity\ListActivityRequest[]
     */
    private array $listActivityRequest = [
    ];

    /**
     * @var \Pohoda\List\ListCashRequest[]
     */
    private array $listCashRequest = [
    ];

    /**
     * @var \Pohoda\List\ListCashRegisterRequest[]
     */
    private array $listCashRegisterRequest = [
    ];

    /**
     * @var \Pohoda\List\ListBankAccountRequest[]
     */
    private array $listBankAccountRequest = [
    ];

    /**
     * @var \Pohoda\ListContract\ListContractRequest[]
     */
    private array $listContractRequest = [
    ];

    /**
     * @var \Pohoda\ListCentre\ListCentreRequest[]
     */
    private array $listCentreRequest = [
    ];

    /**
     * @var \Pohoda\List\ListNumericSeriesRequest[]
     */
    private array $listNumericSeriesRequest = [
    ];

    /**
     * @var \Pohoda\List\ListUserCodeRequest[]
     */
    private array $listUserCodeRequest = [
    ];

    /**
     * @var \Pohoda\List\ListStorageRequest[]
     */
    private array $listStorageRequest = [
    ];

    /**
     * @var \Pohoda\List\ListSellingPriceRequest[]
     */
    private array $listSellingPriceRequest = [
    ];

    /**
     * @var \Pohoda\List\ListCategoryRequest[]
     */
    private array $listCategoryRequest = [
    ];

    /**
     * @var \Pohoda\List\ListIntParamRequest[]
     */
    private array $listIntParamRequest = [
    ];

    /**
     * @var \Pohoda\List\ListStoreRequest[]
     */
    private array $listStoreRequest = [
    ];

    /**
     * @var \Pohoda\List\ListGroupStocksRequest[]
     */
    private array $listGroupStocksRequest = [
    ];

    /**
     * @var \Pohoda\List\ListActionPriceRequest[]
     */
    private array $listActionPriceRequest = [
    ];

    /**
     * @var \Pohoda\List\ListPaymentRequest[]
     */
    private array $listPaymentRequest = [
    ];

    /**
     * @var \Pohoda\List\ListNumericalSeriesRequest[]
     */
    private array $listNumericalSeriesRequest = [
    ];

    /**
     * @var \Pohoda\List\ListGDPRRequest[]
     */
    private array $listGDPRRequest = [
    ];

    /**
     * @var \Pohoda\List\ListEstablishmentRequest[]
     */
    private array $listEstablishmentRequest = [
    ];

    /**
     * @var \Pohoda\List\ListClassificationVATRequest[]
     */
    private array $listClassificationVATRequest = [
    ];

    /**
     * @var \Pohoda\MKasa\MKasaRequest[]
     */
    private array $mKasaRequest = [
    ];

    /**
     * @var \Pohoda\Print\PrintXsd[]
     */
    private array $print = [
    ];

    /**
     * @var \Pohoda\Lock\Lock[]
     */
    private array $lock = [
    ];

    /**
     * @var \Pohoda\Isdoc\Isdoc[]
     */
    private array $isdoc = [
    ];

    /**
     * @var \Pohoda\SendEET\SendEET[]
     */
    private array $sendEET = [
    ];

    /**
     * @var \Pohoda\AccountingSalesVouchers\AccountingSalesVouchers[]
     */
    private array $accountingSalesVouchers = [
    ];

    /**
     * @var \Pohoda\List\ListGlobalSettingsRequest[]
     */
    private array $listGlobalSettingsRequest = [
    ];

    /**
     * @var \Pohoda\List\ListRegistrationNumberRequest[]
     */
    private array $listRegistrationNumberRequest = [
    ];

    /**
     * @var \Pohoda\List\ListMovementRequest[]
     */
    private array $listMovementRequest = [
    ];

    /**
     * @var \Pohoda\List\ListRecyclingContribRequest[]
     */
    private array $listRecyclingContribRequest = [
    ];

    /**
     * @var \Pohoda\List\ListIndividualPriceRequest[]
     */
    private array $listIndividualPriceRequest = [
    ];

    /**
     * @var \Pohoda\List\ListServiceRequest[]
     */
    private array $listServiceRequest = [
    ];

    /**
     * @var \Pohoda\List\ListRulesPairingRequest[]
     */
    private array $listRulesPairingRequest = [
    ];

    /**
     * @var \Pohoda\LiquidationWithoutLink\LiquidationWithoutLink[]
     */
    private array $liquidationWithoutLink = [
    ];

    /**
     * @var \Pohoda\AutomaticLiquidation[]
     */
    private array $automaticLiquidation = [
    ];

    /**
     * @var \Pohoda\List\ListSupplierRequest[]
     */
    private array $listSupplierRequest = [
    ];

    /**
     * @var \Pohoda\List\ListUserAgendaRequest[]
     */
    private array $listUserAgendaRequest = [
    ];

    /**
     * @var \Pohoda\AdvancePartFulfilment\AdvancePartFulfilment[]
     */
    private array $advancePartFulfilment = [
    ];

    /**
     * Gets as version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Gets as id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Adds as addressbook.
     *
     * @return self
     */
    public function addToAddressbook(\Pohoda\AddressBook\Addressbook $addressbook)
    {
        $this->addressbook[] = $addressbook;

        return $this;
    }

    /**
     * isset addressbook.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetAddressbook($index)
    {
        return isset($this->addressbook[$index]);
    }

    /**
     * unset addressbook.
     *
     * @param int|string $index
     */
    public function unsetAddressbook($index): void
    {
        unset($this->addressbook[$index]);
    }

    /**
     * Gets as addressbook.
     *
     * @return \Pohoda\AddressBook\Addressbook[]
     */
    public function getAddressbook()
    {
        return $this->addressbook;
    }

    /**
     * Sets a new addressbook.
     *
     * @param \Pohoda\AddressBook\Addressbook[] $addressbook
     *
     * @return self
     */
    public function setAddressbook(array $addressbook)
    {
        $this->addressbook = $addressbook;

        return $this;
    }

    /**
     * Adds as enquiry.
     *
     * @return self
     */
    public function addToEnquiry(\Pohoda\Enquiry\Enquiry $enquiry)
    {
        $this->enquiry[] = $enquiry;

        return $this;
    }

    /**
     * isset enquiry.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetEnquiry($index)
    {
        return isset($this->enquiry[$index]);
    }

    /**
     * unset enquiry.
     *
     * @param int|string $index
     */
    public function unsetEnquiry($index): void
    {
        unset($this->enquiry[$index]);
    }

    /**
     * Gets as enquiry.
     *
     * @return \Pohoda\Enquiry\Enquiry[]
     */
    public function getEnquiry()
    {
        return $this->enquiry;
    }

    /**
     * Sets a new enquiry.
     *
     * @param \Pohoda\Enquiry\Enquiry[] $enquiry
     *
     * @return self
     */
    public function setEnquiry(array $enquiry)
    {
        $this->enquiry = $enquiry;

        return $this;
    }

    /**
     * Adds as intDoc.
     *
     * @return self
     */
    public function addToIntDoc(\Pohoda\IntDoc\IntDoc $intDoc)
    {
        $this->intDoc[] = $intDoc;

        return $this;
    }

    /**
     * isset intDoc.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetIntDoc($index)
    {
        return isset($this->intDoc[$index]);
    }

    /**
     * unset intDoc.
     *
     * @param int|string $index
     */
    public function unsetIntDoc($index): void
    {
        unset($this->intDoc[$index]);
    }

    /**
     * Gets as intDoc.
     *
     * @return \Pohoda\IntDoc\IntDoc[]
     */
    public function getIntDoc()
    {
        return $this->intDoc;
    }

    /**
     * Sets a new intDoc.
     *
     * @param \Pohoda\IntDoc\IntDoc[] $intDoc
     *
     * @return self
     */
    public function setIntDoc(array $intDoc)
    {
        $this->intDoc = $intDoc;

        return $this;
    }

    /**
     * Adds as invoice.
     *
     * @return self
     */
    public function addToInvoice(\Pohoda\Invoice\Invoice $invoice)
    {
        $this->invoice[] = $invoice;

        return $this;
    }

    /**
     * isset invoice.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetInvoice($index)
    {
        return isset($this->invoice[$index]);
    }

    /**
     * unset invoice.
     *
     * @param int|string $index
     */
    public function unsetInvoice($index): void
    {
        unset($this->invoice[$index]);
    }

    /**
     * Gets as invoice.
     *
     * @return \Pohoda\Invoice\Invoice[]
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * Sets a new invoice.
     *
     * @param \Pohoda\Invoice\Invoice[] $invoice
     *
     * @return self
     */
    public function setInvoice(array $invoice)
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * Adds as offer.
     *
     * @return self
     */
    public function addToOffer(\Pohoda\Offer\Offer $offer)
    {
        $this->offer[] = $offer;

        return $this;
    }

    /**
     * isset offer.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetOffer($index)
    {
        return isset($this->offer[$index]);
    }

    /**
     * unset offer.
     *
     * @param int|string $index
     */
    public function unsetOffer($index): void
    {
        unset($this->offer[$index]);
    }

    /**
     * Gets as offer.
     *
     * @return \Pohoda\Offer\Offer[]
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Sets a new offer.
     *
     * @param \Pohoda\Offer\Offer[] $offer
     *
     * @return self
     */
    public function setOffer(array $offer)
    {
        $this->offer = $offer;

        return $this;
    }

    /**
     * Adds as order.
     *
     * @return self
     */
    public function addToOrder(\Pohoda\Order\Order $order)
    {
        $this->order[] = $order;

        return $this;
    }

    /**
     * isset order.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetOrder($index)
    {
        return isset($this->order[$index]);
    }

    /**
     * unset order.
     *
     * @param int|string $index
     */
    public function unsetOrder($index): void
    {
        unset($this->order[$index]);
    }

    /**
     * Gets as order.
     *
     * @return \Pohoda\Order\Order[]
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order.
     *
     * @param \Pohoda\Order\Order[] $order
     *
     * @return self
     */
    public function setOrder(array $order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Adds as prodejka.
     *
     * @return self
     */
    public function addToProdejka(\Pohoda\Prodejka\Prodejka $prodejka)
    {
        $this->prodejka[] = $prodejka;

        return $this;
    }

    /**
     * isset prodejka.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetProdejka($index)
    {
        return isset($this->prodejka[$index]);
    }

    /**
     * unset prodejka.
     *
     * @param int|string $index
     */
    public function unsetProdejka($index): void
    {
        unset($this->prodejka[$index]);
    }

    /**
     * Gets as prodejka.
     *
     * @return \Pohoda\Prodejka\Prodejka[]
     */
    public function getProdejka()
    {
        return $this->prodejka;
    }

    /**
     * Sets a new prodejka.
     *
     * @param \Pohoda\Prodejka\Prodejka[] $prodejka
     *
     * @return self
     */
    public function setProdejka(array $prodejka)
    {
        $this->prodejka = $prodejka;

        return $this;
    }

    /**
     * Adds as prijemka.
     *
     * @return self
     */
    public function addToPrijemka(\Pohoda\Prijemka\Prijemka $prijemka)
    {
        $this->prijemka[] = $prijemka;

        return $this;
    }

    /**
     * isset prijemka.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPrijemka($index)
    {
        return isset($this->prijemka[$index]);
    }

    /**
     * unset prijemka.
     *
     * @param int|string $index
     */
    public function unsetPrijemka($index): void
    {
        unset($this->prijemka[$index]);
    }

    /**
     * Gets as prijemka.
     *
     * @return \Pohoda\Prijemka\Prijemka[]
     */
    public function getPrijemka()
    {
        return $this->prijemka;
    }

    /**
     * Sets a new prijemka.
     *
     * @param \Pohoda\Prijemka\Prijemka[] $prijemka
     *
     * @return self
     */
    public function setPrijemka(array $prijemka)
    {
        $this->prijemka = $prijemka;

        return $this;
    }

    /**
     * Adds as prevodka.
     *
     * @return self
     */
    public function addToPrevodka(\Pohoda\Prevodka\Prevodka $prevodka)
    {
        $this->prevodka[] = $prevodka;

        return $this;
    }

    /**
     * isset prevodka.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPrevodka($index)
    {
        return isset($this->prevodka[$index]);
    }

    /**
     * unset prevodka.
     *
     * @param int|string $index
     */
    public function unsetPrevodka($index): void
    {
        unset($this->prevodka[$index]);
    }

    /**
     * Gets as prevodka.
     *
     * @return \Pohoda\Prevodka\Prevodka[]
     */
    public function getPrevodka()
    {
        return $this->prevodka;
    }

    /**
     * Sets a new prevodka.
     *
     * @param \Pohoda\Prevodka\Prevodka[] $prevodka
     *
     * @return self
     */
    public function setPrevodka(array $prevodka)
    {
        $this->prevodka = $prevodka;

        return $this;
    }

    /**
     * Adds as stock.
     *
     * @return self
     */
    public function addToStock(\Pohoda\Stock\Stock $stock)
    {
        $this->stock[] = $stock;

        return $this;
    }

    /**
     * isset stock.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetStock($index)
    {
        return isset($this->stock[$index]);
    }

    /**
     * unset stock.
     *
     * @param int|string $index
     */
    public function unsetStock($index): void
    {
        unset($this->stock[$index]);
    }

    /**
     * Gets as stock.
     *
     * @return \Pohoda\Stock\Stock[]
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Sets a new stock.
     *
     * @param \Pohoda\Stock\Stock[] $stock
     *
     * @return self
     */
    public function setStock(array $stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Adds as voucher.
     *
     * @return self
     */
    public function addToVoucher(\Pohoda\Voucher\Voucher $voucher)
    {
        $this->voucher[] = $voucher;

        return $this;
    }

    /**
     * isset voucher.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetVoucher($index)
    {
        return isset($this->voucher[$index]);
    }

    /**
     * unset voucher.
     *
     * @param int|string $index
     */
    public function unsetVoucher($index): void
    {
        unset($this->voucher[$index]);
    }

    /**
     * Gets as voucher.
     *
     * @return \Pohoda\Voucher\Voucher[]
     */
    public function getVoucher()
    {
        return $this->voucher;
    }

    /**
     * Sets a new voucher.
     *
     * @param \Pohoda\Voucher\Voucher[] $voucher
     *
     * @return self
     */
    public function setVoucher(array $voucher)
    {
        $this->voucher = $voucher;

        return $this;
    }

    /**
     * Adds as vydejka.
     *
     * @return self
     */
    public function addToVydejka(\Pohoda\Vydejka\Vydejka $vydejka)
    {
        $this->vydejka[] = $vydejka;

        return $this;
    }

    /**
     * isset vydejka.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetVydejka($index)
    {
        return isset($this->vydejka[$index]);
    }

    /**
     * unset vydejka.
     *
     * @param int|string $index
     */
    public function unsetVydejka($index): void
    {
        unset($this->vydejka[$index]);
    }

    /**
     * Gets as vydejka.
     *
     * @return \Pohoda\Vydejka\Vydejka[]
     */
    public function getVydejka()
    {
        return $this->vydejka;
    }

    /**
     * Sets a new vydejka.
     *
     * @param \Pohoda\Vydejka\Vydejka[] $vydejka
     *
     * @return self
     */
    public function setVydejka(array $vydejka)
    {
        $this->vydejka = $vydejka;

        return $this;
    }

    /**
     * Adds as vyroba.
     *
     * @return self
     */
    public function addToVyroba(\Pohoda\Vyroba\Vyroba $vyroba)
    {
        $this->vyroba[] = $vyroba;

        return $this;
    }

    /**
     * isset vyroba.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetVyroba($index)
    {
        return isset($this->vyroba[$index]);
    }

    /**
     * unset vyroba.
     *
     * @param int|string $index
     */
    public function unsetVyroba($index): void
    {
        unset($this->vyroba[$index]);
    }

    /**
     * Gets as vyroba.
     *
     * @return \Pohoda\Vyroba\Vyroba[]
     */
    public function getVyroba()
    {
        return $this->vyroba;
    }

    /**
     * Sets a new vyroba.
     *
     * @param \Pohoda\Vyroba\Vyroba[] $vyroba
     *
     * @return self
     */
    public function setVyroba(array $vyroba)
    {
        $this->vyroba = $vyroba;

        return $this;
    }

    /**
     * Adds as contract.
     *
     * @return self
     */
    public function addToContract(\Pohoda\Contract\Contract $contract)
    {
        $this->contract[] = $contract;

        return $this;
    }

    /**
     * isset contract.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetContract($index)
    {
        return isset($this->contract[$index]);
    }

    /**
     * unset contract.
     *
     * @param int|string $index
     */
    public function unsetContract($index): void
    {
        unset($this->contract[$index]);
    }

    /**
     * Gets as contract.
     *
     * @return \Pohoda\Contract\Contract[]
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Sets a new contract.
     *
     * @param \Pohoda\Contract\Contract[] $contract
     *
     * @return self
     */
    public function setContract(array $contract)
    {
        $this->contract = $contract;

        return $this;
    }

    /**
     * Adds as store.
     *
     * @return self
     */
    public function addToStore(\Pohoda\Store\Store $store)
    {
        $this->store[] = $store;

        return $this;
    }

    /**
     * isset store.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetStore($index)
    {
        return isset($this->store[$index]);
    }

    /**
     * unset store.
     *
     * @param int|string $index
     */
    public function unsetStore($index): void
    {
        unset($this->store[$index]);
    }

    /**
     * Gets as store.
     *
     * @return \Pohoda\Store\Store[]
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * Sets a new store.
     *
     * @param \Pohoda\Store\Store[] $store
     *
     * @return self
     */
    public function setStore(array $store)
    {
        $this->store = $store;

        return $this;
    }

    /**
     * Adds as groupStocks.
     *
     * @return self
     */
    public function addToGroupStocks(\Pohoda\GroupStocks\GroupStocks $groupStocks)
    {
        $this->groupStocks[] = $groupStocks;

        return $this;
    }

    /**
     * isset groupStocks.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetGroupStocks($index)
    {
        return isset($this->groupStocks[$index]);
    }

    /**
     * unset groupStocks.
     *
     * @param int|string $index
     */
    public function unsetGroupStocks($index): void
    {
        unset($this->groupStocks[$index]);
    }

    /**
     * Gets as groupStocks.
     *
     * @return \Pohoda\GroupStocks\GroupStocks[]
     */
    public function getGroupStocks()
    {
        return $this->groupStocks;
    }

    /**
     * Sets a new groupStocks.
     *
     * @param \Pohoda\GroupStocks\GroupStocks[] $groupStocks
     *
     * @return self
     */
    public function setGroupStocks(array $groupStocks)
    {
        $this->groupStocks = $groupStocks;

        return $this;
    }

    /**
     * Adds as storage.
     *
     * @return self
     */
    public function addToStorage(\Pohoda\Storage\Storage $storage)
    {
        $this->storage[] = $storage;

        return $this;
    }

    /**
     * isset storage.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetStorage($index)
    {
        return isset($this->storage[$index]);
    }

    /**
     * unset storage.
     *
     * @param int|string $index
     */
    public function unsetStorage($index): void
    {
        unset($this->storage[$index]);
    }

    /**
     * Gets as storage.
     *
     * @return \Pohoda\Storage\Storage[]
     */
    public function getStorage()
    {
        return $this->storage;
    }

    /**
     * Sets a new storage.
     *
     * @param \Pohoda\Storage\Storage[] $storage
     *
     * @return self
     */
    public function setStorage(array $storage)
    {
        $this->storage = $storage;

        return $this;
    }

    /**
     * Adds as categoryDetail.
     *
     * @return self
     */
    public function addToCategoryDetail(\Pohoda\Category\CategoryDetail $categoryDetail)
    {
        $this->categoryDetail[] = $categoryDetail;

        return $this;
    }

    /**
     * isset categoryDetail.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetCategoryDetail($index)
    {
        return isset($this->categoryDetail[$index]);
    }

    /**
     * unset categoryDetail.
     *
     * @param int|string $index
     */
    public function unsetCategoryDetail($index): void
    {
        unset($this->categoryDetail[$index]);
    }

    /**
     * Gets as categoryDetail.
     *
     * @return \Pohoda\Category\CategoryDetail[]
     */
    public function getCategoryDetail()
    {
        return $this->categoryDetail;
    }

    /**
     * Sets a new categoryDetail.
     *
     * @param \Pohoda\Category\CategoryDetail[] $categoryDetail
     *
     * @return self
     */
    public function setCategoryDetail(array $categoryDetail)
    {
        $this->categoryDetail = $categoryDetail;

        return $this;
    }

    /**
     * Adds as parameter.
     *
     * @return self
     */
    public function addToParameter(\Pohoda\Parameter\Parameter $parameter)
    {
        $this->parameter[] = $parameter;

        return $this;
    }

    /**
     * isset parameter.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetParameter($index)
    {
        return isset($this->parameter[$index]);
    }

    /**
     * unset parameter.
     *
     * @param int|string $index
     */
    public function unsetParameter($index): void
    {
        unset($this->parameter[$index]);
    }

    /**
     * Gets as parameter.
     *
     * @return \Pohoda\Parameter\Parameter[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Sets a new parameter.
     *
     * @param \Pohoda\Parameter\Parameter[] $parameter
     *
     * @return self
     */
    public function setParameter(array $parameter)
    {
        $this->parameter = $parameter;

        return $this;
    }

    /**
     * Adds as intParamDetail.
     *
     * @return self
     */
    public function addToIntParamDetail(\Pohoda\IntParam\IntParamDetail $intParamDetail)
    {
        $this->intParamDetail[] = $intParamDetail;

        return $this;
    }

    /**
     * isset intParamDetail.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetIntParamDetail($index)
    {
        return isset($this->intParamDetail[$index]);
    }

    /**
     * unset intParamDetail.
     *
     * @param int|string $index
     */
    public function unsetIntParamDetail($index): void
    {
        unset($this->intParamDetail[$index]);
    }

    /**
     * Gets as intParamDetail.
     *
     * @return \Pohoda\IntParam\IntParamDetail[]
     */
    public function getIntParamDetail()
    {
        return $this->intParamDetail;
    }

    /**
     * Sets a new intParamDetail.
     *
     * @param \Pohoda\IntParam\IntParamDetail[] $intParamDetail
     *
     * @return self
     */
    public function setIntParamDetail(array $intParamDetail)
    {
        $this->intParamDetail = $intParamDetail;

        return $this;
    }

    /**
     * Adds as inventoryLists.
     *
     * @return self
     */
    public function addToInventoryLists(\Pohoda\InventoryLists\InventoryLists $inventoryLists)
    {
        $this->inventoryLists[] = $inventoryLists;

        return $this;
    }

    /**
     * isset inventoryLists.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetInventoryLists($index)
    {
        return isset($this->inventoryLists[$index]);
    }

    /**
     * unset inventoryLists.
     *
     * @param int|string $index
     */
    public function unsetInventoryLists($index): void
    {
        unset($this->inventoryLists[$index]);
    }

    /**
     * Gets as inventoryLists.
     *
     * @return \Pohoda\InventoryLists\InventoryLists[]
     */
    public function getInventoryLists()
    {
        return $this->inventoryLists;
    }

    /**
     * Sets a new inventoryLists.
     *
     * @param \Pohoda\InventoryLists\InventoryLists[] $inventoryLists
     *
     * @return self
     */
    public function setInventoryLists(array $inventoryLists)
    {
        $this->inventoryLists = $inventoryLists;

        return $this;
    }

    /**
     * Adds as numericalSeries.
     *
     * @return self
     */
    public function addToNumericalSeries(\Pohoda\NumericalSeries\NumericalSeries $numericalSeries)
    {
        $this->numericalSeries[] = $numericalSeries;

        return $this;
    }

    /**
     * isset numericalSeries.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetNumericalSeries($index)
    {
        return isset($this->numericalSeries[$index]);
    }

    /**
     * unset numericalSeries.
     *
     * @param int|string $index
     */
    public function unsetNumericalSeries($index): void
    {
        unset($this->numericalSeries[$index]);
    }

    /**
     * Gets as numericalSeries.
     *
     * @return \Pohoda\NumericalSeries\NumericalSeries[]
     */
    public function getNumericalSeries()
    {
        return $this->numericalSeries;
    }

    /**
     * Sets a new numericalSeries.
     *
     * @param \Pohoda\NumericalSeries\NumericalSeries[] $numericalSeries
     *
     * @return self
     */
    public function setNumericalSeries(array $numericalSeries)
    {
        $this->numericalSeries = $numericalSeries;

        return $this;
    }

    /**
     * Adds as gDPR.
     *
     * @return self
     */
    public function addToGDPR(\Pohoda\Gdpr\GDPR $gDPR)
    {
        $this->gDPR[] = $gDPR;

        return $this;
    }

    /**
     * isset gDPR.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetGDPR($index)
    {
        return isset($this->gDPR[$index]);
    }

    /**
     * unset gDPR.
     *
     * @param int|string $index
     */
    public function unsetGDPR($index): void
    {
        unset($this->gDPR[$index]);
    }

    /**
     * Gets as gDPR.
     *
     * @return \Pohoda\Gdpr\GDPR[]
     */
    public function getGDPR()
    {
        return $this->gDPR;
    }

    /**
     * Sets a new gDPR.
     *
     * @param \Pohoda\Gdpr\GDPR[] $gDPR
     *
     * @return self
     */
    public function setGDPR(array $gDPR)
    {
        $this->gDPR = $gDPR;

        return $this;
    }

    /**
     * Adds as productRequirement.
     *
     * @return self
     */
    public function addToProductRequirement(\Pohoda\ProductRequirement\ProductRequirement $productRequirement)
    {
        $this->productRequirement[] = $productRequirement;

        return $this;
    }

    /**
     * isset productRequirement.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetProductRequirement($index)
    {
        return isset($this->productRequirement[$index]);
    }

    /**
     * unset productRequirement.
     *
     * @param int|string $index
     */
    public function unsetProductRequirement($index): void
    {
        unset($this->productRequirement[$index]);
    }

    /**
     * Gets as productRequirement.
     *
     * @return \Pohoda\ProductRequirement\ProductRequirement[]
     */
    public function getProductRequirement()
    {
        return $this->productRequirement;
    }

    /**
     * Sets a new productRequirement.
     *
     * @param \Pohoda\ProductRequirement\ProductRequirement[] $productRequirement
     *
     * @return self
     */
    public function setProductRequirement(array $productRequirement)
    {
        $this->productRequirement = $productRequirement;

        return $this;
    }

    /**
     * Adds as bank.
     *
     * @return self
     */
    public function addToBank(\Pohoda\Bank\Bank $bank)
    {
        $this->bank[] = $bank;

        return $this;
    }

    /**
     * isset bank.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetBank($index)
    {
        return isset($this->bank[$index]);
    }

    /**
     * unset bank.
     *
     * @param int|string $index
     */
    public function unsetBank($index): void
    {
        unset($this->bank[$index]);
    }

    /**
     * Gets as bank.
     *
     * @return \Pohoda\Bank\Bank[]
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * Sets a new bank.
     *
     * @param \Pohoda\Bank\Bank[] $bank
     *
     * @return self
     */
    public function setBank(array $bank)
    {
        $this->bank = $bank;

        return $this;
    }

    /**
     * Adds as bankAccount.
     *
     * @return self
     */
    public function addToBankAccount(\Pohoda\BankAccount\BankAccount $bankAccount)
    {
        $this->bankAccount[] = $bankAccount;

        return $this;
    }

    /**
     * isset bankAccount.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetBankAccount($index)
    {
        return isset($this->bankAccount[$index]);
    }

    /**
     * unset bankAccount.
     *
     * @param int|string $index
     */
    public function unsetBankAccount($index): void
    {
        unset($this->bankAccount[$index]);
    }

    /**
     * Gets as bankAccount.
     *
     * @return \Pohoda\BankAccount\BankAccount[]
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    /**
     * Sets a new bankAccount.
     *
     * @param \Pohoda\BankAccount\BankAccount[] $bankAccount
     *
     * @return self
     */
    public function setBankAccount(array $bankAccount)
    {
        $this->bankAccount = $bankAccount;

        return $this;
    }

    /**
     * Adds as rulesPairing.
     *
     * @return self
     */
    public function addToRulesPairing(\Pohoda\RulesPairing\RulesPairing $rulesPairing)
    {
        $this->rulesPairing[] = $rulesPairing;

        return $this;
    }

    /**
     * isset rulesPairing.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRulesPairing($index)
    {
        return isset($this->rulesPairing[$index]);
    }

    /**
     * unset rulesPairing.
     *
     * @param int|string $index
     */
    public function unsetRulesPairing($index): void
    {
        unset($this->rulesPairing[$index]);
    }

    /**
     * Gets as rulesPairing.
     *
     * @return \Pohoda\RulesPairing\RulesPairing[]
     */
    public function getRulesPairing()
    {
        return $this->rulesPairing;
    }

    /**
     * Sets a new rulesPairing.
     *
     * @param \Pohoda\RulesPairing\RulesPairing[] $rulesPairing
     *
     * @return self
     */
    public function setRulesPairing(array $rulesPairing)
    {
        $this->rulesPairing = $rulesPairing;

        return $this;
    }

    /**
     * Adds as discount.
     *
     * @return self
     */
    public function addToDiscount(\Pohoda\Discount\Discount $discount)
    {
        $this->discount[] = $discount;

        return $this;
    }

    /**
     * isset discount.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetDiscount($index)
    {
        return isset($this->discount[$index]);
    }

    /**
     * unset discount.
     *
     * @param int|string $index
     */
    public function unsetDiscount($index): void
    {
        unset($this->discount[$index]);
    }

    /**
     * Gets as discount.
     *
     * @return \Pohoda\Discount\Discount[]
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Sets a new discount.
     *
     * @param \Pohoda\Discount\Discount[] $discount
     *
     * @return self
     */
    public function setDiscount(array $discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Adds as service.
     *
     * @return self
     */
    public function addToService(\Pohoda\Service\Service $service)
    {
        $this->service[] = $service;

        return $this;
    }

    /**
     * isset service.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetService($index)
    {
        return isset($this->service[$index]);
    }

    /**
     * unset service.
     *
     * @param int|string $index
     */
    public function unsetService($index): void
    {
        unset($this->service[$index]);
    }

    /**
     * Gets as service.
     *
     * @return \Pohoda\Service\Service[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service.
     *
     * @param \Pohoda\Service\Service[] $service
     *
     * @return self
     */
    public function setService(array $service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Adds as userAgenda.
     *
     * @return self
     */
    public function addToUserAgenda(\Pohoda\UserAgenda\UserAgenda $userAgenda)
    {
        $this->userAgenda[] = $userAgenda;

        return $this;
    }

    /**
     * isset userAgenda.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetUserAgenda($index)
    {
        return isset($this->userAgenda[$index]);
    }

    /**
     * unset userAgenda.
     *
     * @param int|string $index
     */
    public function unsetUserAgenda($index): void
    {
        unset($this->userAgenda[$index]);
    }

    /**
     * Gets as userAgenda.
     *
     * @return \Pohoda\UserAgenda\UserAgenda[]
     */
    public function getUserAgenda()
    {
        return $this->userAgenda;
    }

    /**
     * Sets a new userAgenda.
     *
     * @param \Pohoda\UserAgenda\UserAgenda[] $userAgenda
     *
     * @return self
     */
    public function setUserAgenda(array $userAgenda)
    {
        $this->userAgenda = $userAgenda;

        return $this;
    }

    /**
     * Adds as centre.
     *
     * @return self
     */
    public function addToCentre(\Pohoda\Centre\Centre $centre)
    {
        $this->centre[] = $centre;

        return $this;
    }

    /**
     * isset centre.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetCentre($index)
    {
        return isset($this->centre[$index]);
    }

    /**
     * unset centre.
     *
     * @param int|string $index
     */
    public function unsetCentre($index): void
    {
        unset($this->centre[$index]);
    }

    /**
     * Gets as centre.
     *
     * @return \Pohoda\Centre\Centre[]
     */
    public function getCentre()
    {
        return $this->centre;
    }

    /**
     * Sets a new centre.
     *
     * @param \Pohoda\Centre\Centre[] $centre
     *
     * @return self
     */
    public function setCentre(array $centre)
    {
        $this->centre = $centre;

        return $this;
    }

    /**
     * Adds as activity.
     *
     * @return self
     */
    public function addToActivity(\Pohoda\Activity\Activity $activity)
    {
        $this->activity[] = $activity;

        return $this;
    }

    /**
     * isset activity.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetActivity($index)
    {
        return isset($this->activity[$index]);
    }

    /**
     * unset activity.
     *
     * @param int|string $index
     */
    public function unsetActivity($index): void
    {
        unset($this->activity[$index]);
    }

    /**
     * Gets as activity.
     *
     * @return \Pohoda\Activity\Activity[]
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Sets a new activity.
     *
     * @param \Pohoda\Activity\Activity[] $activity
     *
     * @return self
     */
    public function setActivity(array $activity)
    {
        $this->activity = $activity;

        return $this;
    }

    /**
     * Adds as listAccountancyRequest.
     *
     * @return self
     */
    public function addToListAccountancyRequest(\Pohoda\List\ListAccountancyRequest $listAccountancyRequest)
    {
        $this->listAccountancyRequest[] = $listAccountancyRequest;

        return $this;
    }

    /**
     * isset listAccountancyRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListAccountancyRequest($index)
    {
        return isset($this->listAccountancyRequest[$index]);
    }

    /**
     * unset listAccountancyRequest.
     *
     * @param int|string $index
     */
    public function unsetListAccountancyRequest($index): void
    {
        unset($this->listAccountancyRequest[$index]);
    }

    /**
     * Gets as listAccountancyRequest.
     *
     * @return \Pohoda\List\ListAccountancyRequest[]
     */
    public function getListAccountancyRequest()
    {
        return $this->listAccountancyRequest;
    }

    /**
     * Sets a new listAccountancyRequest.
     *
     * @param \Pohoda\List\ListAccountancyRequest[] $listAccountancyRequest
     *
     * @return self
     */
    public function setListAccountancyRequest(array $listAccountancyRequest)
    {
        $this->listAccountancyRequest = $listAccountancyRequest;

        return $this;
    }

    /**
     * Adds as listAddressBookRequest.
     *
     * @return self
     */
    public function addToListAddressBookRequest(\Pohoda\ListAddBook\ListAddressBookRequest $listAddressBookRequest)
    {
        $this->listAddressBookRequest[] = $listAddressBookRequest;

        return $this;
    }

    /**
     * isset listAddressBookRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListAddressBookRequest($index)
    {
        return isset($this->listAddressBookRequest[$index]);
    }

    /**
     * unset listAddressBookRequest.
     *
     * @param int|string $index
     */
    public function unsetListAddressBookRequest($index): void
    {
        unset($this->listAddressBookRequest[$index]);
    }

    /**
     * Gets as listAddressBookRequest.
     *
     * @return \Pohoda\ListAddBook\ListAddressBookRequest[]
     */
    public function getListAddressBookRequest()
    {
        return $this->listAddressBookRequest;
    }

    /**
     * Sets a new listAddressBookRequest.
     *
     * @param \Pohoda\ListAddBook\ListAddressBookRequest[] $listAddressBookRequest
     *
     * @return self
     */
    public function setListAddressBookRequest(array $listAddressBookRequest)
    {
        $this->listAddressBookRequest = $listAddressBookRequest;

        return $this;
    }

    /**
     * Adds as listInvoiceRequest.
     *
     * @return self
     */
    public function addToListInvoiceRequest(\Pohoda\List\ListInvoiceRequest $listInvoiceRequest)
    {
        $this->listInvoiceRequest[] = $listInvoiceRequest;

        return $this;
    }

    /**
     * isset listInvoiceRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListInvoiceRequest($index)
    {
        return isset($this->listInvoiceRequest[$index]);
    }

    /**
     * unset listInvoiceRequest.
     *
     * @param int|string $index
     */
    public function unsetListInvoiceRequest($index): void
    {
        unset($this->listInvoiceRequest[$index]);
    }

    /**
     * Gets as listInvoiceRequest.
     *
     * @return \Pohoda\List\ListInvoiceRequest[]
     */
    public function getListInvoiceRequest()
    {
        return $this->listInvoiceRequest;
    }

    /**
     * Sets a new listInvoiceRequest.
     *
     * @param \Pohoda\List\ListInvoiceRequest[] $listInvoiceRequest
     *
     * @return self
     */
    public function setListInvoiceRequest(array $listInvoiceRequest)
    {
        $this->listInvoiceRequest = $listInvoiceRequest;

        return $this;
    }

    /**
     * Adds as listEnquiryRequest.
     *
     * @return self
     */
    public function addToListEnquiryRequest(\Pohoda\List\ListEnquiryRequest $listEnquiryRequest)
    {
        $this->listEnquiryRequest[] = $listEnquiryRequest;

        return $this;
    }

    /**
     * isset listEnquiryRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListEnquiryRequest($index)
    {
        return isset($this->listEnquiryRequest[$index]);
    }

    /**
     * unset listEnquiryRequest.
     *
     * @param int|string $index
     */
    public function unsetListEnquiryRequest($index): void
    {
        unset($this->listEnquiryRequest[$index]);
    }

    /**
     * Gets as listEnquiryRequest.
     *
     * @return \Pohoda\List\ListEnquiryRequest[]
     */
    public function getListEnquiryRequest()
    {
        return $this->listEnquiryRequest;
    }

    /**
     * Sets a new listEnquiryRequest.
     *
     * @param \Pohoda\List\ListEnquiryRequest[] $listEnquiryRequest
     *
     * @return self
     */
    public function setListEnquiryRequest(array $listEnquiryRequest)
    {
        $this->listEnquiryRequest = $listEnquiryRequest;

        return $this;
    }

    /**
     * Adds as listOfferRequest.
     *
     * @return self
     */
    public function addToListOfferRequest(\Pohoda\List\ListOfferRequest $listOfferRequest)
    {
        $this->listOfferRequest[] = $listOfferRequest;

        return $this;
    }

    /**
     * isset listOfferRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListOfferRequest($index)
    {
        return isset($this->listOfferRequest[$index]);
    }

    /**
     * unset listOfferRequest.
     *
     * @param int|string $index
     */
    public function unsetListOfferRequest($index): void
    {
        unset($this->listOfferRequest[$index]);
    }

    /**
     * Gets as listOfferRequest.
     *
     * @return \Pohoda\List\ListOfferRequest[]
     */
    public function getListOfferRequest()
    {
        return $this->listOfferRequest;
    }

    /**
     * Sets a new listOfferRequest.
     *
     * @param \Pohoda\List\ListOfferRequest[] $listOfferRequest
     *
     * @return self
     */
    public function setListOfferRequest(array $listOfferRequest)
    {
        $this->listOfferRequest = $listOfferRequest;

        return $this;
    }

    /**
     * Adds as listOrderRequest.
     *
     * @return self
     */
    public function addToListOrderRequest(\Pohoda\List\ListOrderRequest $listOrderRequest)
    {
        $this->listOrderRequest[] = $listOrderRequest;

        return $this;
    }

    /**
     * isset listOrderRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListOrderRequest($index)
    {
        return isset($this->listOrderRequest[$index]);
    }

    /**
     * unset listOrderRequest.
     *
     * @param int|string $index
     */
    public function unsetListOrderRequest($index): void
    {
        unset($this->listOrderRequest[$index]);
    }

    /**
     * Gets as listOrderRequest.
     *
     * @return \Pohoda\List\ListOrderRequest[]
     */
    public function getListOrderRequest()
    {
        return $this->listOrderRequest;
    }

    /**
     * Sets a new listOrderRequest.
     *
     * @param \Pohoda\List\ListOrderRequest[] $listOrderRequest
     *
     * @return self
     */
    public function setListOrderRequest(array $listOrderRequest)
    {
        $this->listOrderRequest = $listOrderRequest;

        return $this;
    }

    /**
     * Adds as listStockRequest.
     *
     * @return self
     */
    public function addToListStockRequest(\Pohoda\ListStock\ListStockRequest $listStockRequest)
    {
        $this->listStockRequest[] = $listStockRequest;

        return $this;
    }

    /**
     * isset listStockRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListStockRequest($index)
    {
        return isset($this->listStockRequest[$index]);
    }

    /**
     * unset listStockRequest.
     *
     * @param int|string $index
     */
    public function unsetListStockRequest($index): void
    {
        unset($this->listStockRequest[$index]);
    }

    /**
     * Gets as listStockRequest.
     *
     * @return \Pohoda\ListStock\ListStockRequest[]
     */
    public function getListStockRequest()
    {
        return $this->listStockRequest;
    }

    /**
     * Sets a new listStockRequest.
     *
     * @param \Pohoda\ListStock\ListStockRequest[] $listStockRequest
     *
     * @return self
     */
    public function setListStockRequest(array $listStockRequest)
    {
        $this->listStockRequest = $listStockRequest;

        return $this;
    }

    /**
     * Adds as listParameterRequest.
     *
     * @return self
     */
    public function addToListParameterRequest(\Pohoda\List\ListParameterRequest $listParameterRequest)
    {
        $this->listParameterRequest[] = $listParameterRequest;

        return $this;
    }

    /**
     * isset listParameterRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListParameterRequest($index)
    {
        return isset($this->listParameterRequest[$index]);
    }

    /**
     * unset listParameterRequest.
     *
     * @param int|string $index
     */
    public function unsetListParameterRequest($index): void
    {
        unset($this->listParameterRequest[$index]);
    }

    /**
     * Gets as listParameterRequest.
     *
     * @return \Pohoda\List\ListParameterRequest[]
     */
    public function getListParameterRequest()
    {
        return $this->listParameterRequest;
    }

    /**
     * Sets a new listParameterRequest.
     *
     * @param \Pohoda\List\ListParameterRequest[] $listParameterRequest
     *
     * @return self
     */
    public function setListParameterRequest(array $listParameterRequest)
    {
        $this->listParameterRequest = $listParameterRequest;

        return $this;
    }

    /**
     * Adds as listVydejkaRequest.
     *
     * @return self
     */
    public function addToListVydejkaRequest(\Pohoda\List\ListVydejkaRequest $listVydejkaRequest)
    {
        $this->listVydejkaRequest[] = $listVydejkaRequest;

        return $this;
    }

    /**
     * isset listVydejkaRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListVydejkaRequest($index)
    {
        return isset($this->listVydejkaRequest[$index]);
    }

    /**
     * unset listVydejkaRequest.
     *
     * @param int|string $index
     */
    public function unsetListVydejkaRequest($index): void
    {
        unset($this->listVydejkaRequest[$index]);
    }

    /**
     * Gets as listVydejkaRequest.
     *
     * @return \Pohoda\List\ListVydejkaRequest[]
     */
    public function getListVydejkaRequest()
    {
        return $this->listVydejkaRequest;
    }

    /**
     * Sets a new listVydejkaRequest.
     *
     * @param \Pohoda\List\ListVydejkaRequest[] $listVydejkaRequest
     *
     * @return self
     */
    public function setListVydejkaRequest(array $listVydejkaRequest)
    {
        $this->listVydejkaRequest = $listVydejkaRequest;

        return $this;
    }

    /**
     * Adds as listPrijemkaRequest.
     *
     * @return self
     */
    public function addToListPrijemkaRequest(\Pohoda\List\ListPrijemkaRequest $listPrijemkaRequest)
    {
        $this->listPrijemkaRequest[] = $listPrijemkaRequest;

        return $this;
    }

    /**
     * isset listPrijemkaRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListPrijemkaRequest($index)
    {
        return isset($this->listPrijemkaRequest[$index]);
    }

    /**
     * unset listPrijemkaRequest.
     *
     * @param int|string $index
     */
    public function unsetListPrijemkaRequest($index): void
    {
        unset($this->listPrijemkaRequest[$index]);
    }

    /**
     * Gets as listPrijemkaRequest.
     *
     * @return \Pohoda\List\ListPrijemkaRequest[]
     */
    public function getListPrijemkaRequest()
    {
        return $this->listPrijemkaRequest;
    }

    /**
     * Sets a new listPrijemkaRequest.
     *
     * @param \Pohoda\List\ListPrijemkaRequest[] $listPrijemkaRequest
     *
     * @return self
     */
    public function setListPrijemkaRequest(array $listPrijemkaRequest)
    {
        $this->listPrijemkaRequest = $listPrijemkaRequest;

        return $this;
    }

    /**
     * Adds as listBalanceRequest.
     *
     * @return self
     */
    public function addToListBalanceRequest(\Pohoda\List\ListBalanceRequest $listBalanceRequest)
    {
        $this->listBalanceRequest[] = $listBalanceRequest;

        return $this;
    }

    /**
     * isset listBalanceRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListBalanceRequest($index)
    {
        return isset($this->listBalanceRequest[$index]);
    }

    /**
     * unset listBalanceRequest.
     *
     * @param int|string $index
     */
    public function unsetListBalanceRequest($index): void
    {
        unset($this->listBalanceRequest[$index]);
    }

    /**
     * Gets as listBalanceRequest.
     *
     * @return \Pohoda\List\ListBalanceRequest[]
     */
    public function getListBalanceRequest()
    {
        return $this->listBalanceRequest;
    }

    /**
     * Sets a new listBalanceRequest.
     *
     * @param \Pohoda\List\ListBalanceRequest[] $listBalanceRequest
     *
     * @return self
     */
    public function setListBalanceRequest(array $listBalanceRequest)
    {
        $this->listBalanceRequest = $listBalanceRequest;

        return $this;
    }

    /**
     * Adds as listProductRequirementRequest.
     *
     * @return self
     */
    public function addToListProductRequirementRequest(\Pohoda\List\ListProductRequirementRequest $listProductRequirementRequest)
    {
        $this->listProductRequirementRequest[] = $listProductRequirementRequest;

        return $this;
    }

    /**
     * isset listProductRequirementRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListProductRequirementRequest($index)
    {
        return isset($this->listProductRequirementRequest[$index]);
    }

    /**
     * unset listProductRequirementRequest.
     *
     * @param int|string $index
     */
    public function unsetListProductRequirementRequest($index): void
    {
        unset($this->listProductRequirementRequest[$index]);
    }

    /**
     * Gets as listProductRequirementRequest.
     *
     * @return \Pohoda\List\ListProductRequirementRequest[]
     */
    public function getListProductRequirementRequest()
    {
        return $this->listProductRequirementRequest;
    }

    /**
     * Sets a new listProductRequirementRequest.
     *
     * @param \Pohoda\List\ListProductRequirementRequest[] $listProductRequirementRequest
     *
     * @return self
     */
    public function setListProductRequirementRequest(array $listProductRequirementRequest)
    {
        $this->listProductRequirementRequest = $listProductRequirementRequest;

        return $this;
    }

    /**
     * Adds as listBankRequest.
     *
     * @return self
     */
    public function addToListBankRequest(\Pohoda\List\ListBankRequest $listBankRequest)
    {
        $this->listBankRequest[] = $listBankRequest;

        return $this;
    }

    /**
     * isset listBankRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListBankRequest($index)
    {
        return isset($this->listBankRequest[$index]);
    }

    /**
     * unset listBankRequest.
     *
     * @param int|string $index
     */
    public function unsetListBankRequest($index): void
    {
        unset($this->listBankRequest[$index]);
    }

    /**
     * Gets as listBankRequest.
     *
     * @return \Pohoda\List\ListBankRequest[]
     */
    public function getListBankRequest()
    {
        return $this->listBankRequest;
    }

    /**
     * Sets a new listBankRequest.
     *
     * @param \Pohoda\List\ListBankRequest[] $listBankRequest
     *
     * @return self
     */
    public function setListBankRequest(array $listBankRequest)
    {
        $this->listBankRequest = $listBankRequest;

        return $this;
    }

    /**
     * Adds as createAccountingDoubleEntry.
     *
     * @return self
     */
    public function addToCreateAccountingDoubleEntry(\Pohoda\List\CreateAccountingDoubleEntry $createAccountingDoubleEntry)
    {
        $this->createAccountingDoubleEntry[] = $createAccountingDoubleEntry;

        return $this;
    }

    /**
     * isset createAccountingDoubleEntry.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetCreateAccountingDoubleEntry($index)
    {
        return isset($this->createAccountingDoubleEntry[$index]);
    }

    /**
     * unset createAccountingDoubleEntry.
     *
     * @param int|string $index
     */
    public function unsetCreateAccountingDoubleEntry($index): void
    {
        unset($this->createAccountingDoubleEntry[$index]);
    }

    /**
     * Gets as createAccountingDoubleEntry.
     *
     * @return \Pohoda\List\CreateAccountingDoubleEntry[]
     */
    public function getCreateAccountingDoubleEntry()
    {
        return $this->createAccountingDoubleEntry;
    }

    /**
     * Sets a new createAccountingDoubleEntry.
     *
     * @param \Pohoda\List\CreateAccountingDoubleEntry[] $createAccountingDoubleEntry
     *
     * @return self
     */
    public function setCreateAccountingDoubleEntry(array $createAccountingDoubleEntry)
    {
        $this->createAccountingDoubleEntry = $createAccountingDoubleEntry;

        return $this;
    }

    /**
     * Adds as listUserCode.
     *
     * @return self
     */
    public function addToListUserCode(\Pohoda\List\ListUserCode $listUserCode)
    {
        $this->listUserCode[] = $listUserCode;

        return $this;
    }

    /**
     * isset listUserCode.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListUserCode($index)
    {
        return isset($this->listUserCode[$index]);
    }

    /**
     * unset listUserCode.
     *
     * @param int|string $index
     */
    public function unsetListUserCode($index): void
    {
        unset($this->listUserCode[$index]);
    }

    /**
     * Gets as listUserCode.
     *
     * @return \Pohoda\List\ListUserCode[]
     */
    public function getListUserCode()
    {
        return $this->listUserCode;
    }

    /**
     * Sets a new listUserCode.
     *
     * @param \Pohoda\List\ListUserCode[] $listUserCode
     *
     * @return self
     */
    public function setListUserCode(array $listUserCode)
    {
        $this->listUserCode = $listUserCode;

        return $this;
    }

    /**
     * Adds as listAccountingUnitRequest.
     *
     * @return self
     */
    public function addToListAccountingUnitRequest(\Pohoda\Accountingunit\ListAccountingUnitRequest $listAccountingUnitRequest)
    {
        $this->listAccountingUnitRequest[] = $listAccountingUnitRequest;

        return $this;
    }

    /**
     * isset listAccountingUnitRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListAccountingUnitRequest($index)
    {
        return isset($this->listAccountingUnitRequest[$index]);
    }

    /**
     * unset listAccountingUnitRequest.
     *
     * @param int|string $index
     */
    public function unsetListAccountingUnitRequest($index): void
    {
        unset($this->listAccountingUnitRequest[$index]);
    }

    /**
     * Gets as listAccountingUnitRequest.
     *
     * @return \Pohoda\Accountingunit\ListAccountingUnitRequest[]
     */
    public function getListAccountingUnitRequest()
    {
        return $this->listAccountingUnitRequest;
    }

    /**
     * Sets a new listAccountingUnitRequest.
     *
     * @param \Pohoda\Accountingunit\ListAccountingUnitRequest[] $listAccountingUnitRequest
     *
     * @return self
     */
    public function setListAccountingUnitRequest(array $listAccountingUnitRequest)
    {
        $this->listAccountingUnitRequest = $listAccountingUnitRequest;

        return $this;
    }

    /**
     * Adds as listAccountingDoubleEntryRequest.
     *
     * @return self
     */
    public function addToListAccountingDoubleEntryRequest(\Pohoda\List\ListAccountingDoubleEntryRequest $listAccountingDoubleEntryRequest)
    {
        $this->listAccountingDoubleEntryRequest[] = $listAccountingDoubleEntryRequest;

        return $this;
    }

    /**
     * isset listAccountingDoubleEntryRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListAccountingDoubleEntryRequest($index)
    {
        return isset($this->listAccountingDoubleEntryRequest[$index]);
    }

    /**
     * unset listAccountingDoubleEntryRequest.
     *
     * @param int|string $index
     */
    public function unsetListAccountingDoubleEntryRequest($index): void
    {
        unset($this->listAccountingDoubleEntryRequest[$index]);
    }

    /**
     * Gets as listAccountingDoubleEntryRequest.
     *
     * @return \Pohoda\List\ListAccountingDoubleEntryRequest[]
     */
    public function getListAccountingDoubleEntryRequest()
    {
        return $this->listAccountingDoubleEntryRequest;
    }

    /**
     * Sets a new listAccountingDoubleEntryRequest.
     *
     * @param \Pohoda\List\ListAccountingDoubleEntryRequest[] $listAccountingDoubleEntryRequest
     *
     * @return self
     */
    public function setListAccountingDoubleEntryRequest(array $listAccountingDoubleEntryRequest)
    {
        $this->listAccountingDoubleEntryRequest = $listAccountingDoubleEntryRequest;

        return $this;
    }

    /**
     * Adds as listAccountingSingleEntryRequest.
     *
     * @return self
     */
    public function addToListAccountingSingleEntryRequest(\Pohoda\List\ListAccountingSingleEntryRequest $listAccountingSingleEntryRequest)
    {
        $this->listAccountingSingleEntryRequest[] = $listAccountingSingleEntryRequest;

        return $this;
    }

    /**
     * isset listAccountingSingleEntryRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListAccountingSingleEntryRequest($index)
    {
        return isset($this->listAccountingSingleEntryRequest[$index]);
    }

    /**
     * unset listAccountingSingleEntryRequest.
     *
     * @param int|string $index
     */
    public function unsetListAccountingSingleEntryRequest($index): void
    {
        unset($this->listAccountingSingleEntryRequest[$index]);
    }

    /**
     * Gets as listAccountingSingleEntryRequest.
     *
     * @return \Pohoda\List\ListAccountingSingleEntryRequest[]
     */
    public function getListAccountingSingleEntryRequest()
    {
        return $this->listAccountingSingleEntryRequest;
    }

    /**
     * Sets a new listAccountingSingleEntryRequest.
     *
     * @param \Pohoda\List\ListAccountingSingleEntryRequest[] $listAccountingSingleEntryRequest
     *
     * @return self
     */
    public function setListAccountingSingleEntryRequest(array $listAccountingSingleEntryRequest)
    {
        $this->listAccountingSingleEntryRequest = $listAccountingSingleEntryRequest;

        return $this;
    }

    /**
     * Adds as listAccountRequest.
     *
     * @return self
     */
    public function addToListAccountRequest(\Pohoda\List\ListAccountRequest $listAccountRequest)
    {
        $this->listAccountRequest[] = $listAccountRequest;

        return $this;
    }

    /**
     * isset listAccountRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListAccountRequest($index)
    {
        return isset($this->listAccountRequest[$index]);
    }

    /**
     * unset listAccountRequest.
     *
     * @param int|string $index
     */
    public function unsetListAccountRequest($index): void
    {
        unset($this->listAccountRequest[$index]);
    }

    /**
     * Gets as listAccountRequest.
     *
     * @return \Pohoda\List\ListAccountRequest[]
     */
    public function getListAccountRequest()
    {
        return $this->listAccountRequest;
    }

    /**
     * Sets a new listAccountRequest.
     *
     * @param \Pohoda\List\ListAccountRequest[] $listAccountRequest
     *
     * @return self
     */
    public function setListAccountRequest(array $listAccountRequest)
    {
        $this->listAccountRequest = $listAccountRequest;

        return $this;
    }

    /**
     * Adds as listActivityRequest.
     *
     * @return self
     */
    public function addToListActivityRequest(\Pohoda\ListActivity\ListActivityRequest $listActivityRequest)
    {
        $this->listActivityRequest[] = $listActivityRequest;

        return $this;
    }

    /**
     * isset listActivityRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListActivityRequest($index)
    {
        return isset($this->listActivityRequest[$index]);
    }

    /**
     * unset listActivityRequest.
     *
     * @param int|string $index
     */
    public function unsetListActivityRequest($index): void
    {
        unset($this->listActivityRequest[$index]);
    }

    /**
     * Gets as listActivityRequest.
     *
     * @return \Pohoda\ListActivity\ListActivityRequest[]
     */
    public function getListActivityRequest()
    {
        return $this->listActivityRequest;
    }

    /**
     * Sets a new listActivityRequest.
     *
     * @param \Pohoda\ListActivity\ListActivityRequest[] $listActivityRequest
     *
     * @return self
     */
    public function setListActivityRequest(array $listActivityRequest)
    {
        $this->listActivityRequest = $listActivityRequest;

        return $this;
    }

    /**
     * Adds as listCashRequest.
     *
     * @return self
     */
    public function addToListCashRequest(\Pohoda\List\ListCashRequest $listCashRequest)
    {
        $this->listCashRequest[] = $listCashRequest;

        return $this;
    }

    /**
     * isset listCashRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListCashRequest($index)
    {
        return isset($this->listCashRequest[$index]);
    }

    /**
     * unset listCashRequest.
     *
     * @param int|string $index
     */
    public function unsetListCashRequest($index): void
    {
        unset($this->listCashRequest[$index]);
    }

    /**
     * Gets as listCashRequest.
     *
     * @return \Pohoda\List\ListCashRequest[]
     */
    public function getListCashRequest()
    {
        return $this->listCashRequest;
    }

    /**
     * Sets a new listCashRequest.
     *
     * @param \Pohoda\List\ListCashRequest[] $listCashRequest
     *
     * @return self
     */
    public function setListCashRequest(array $listCashRequest)
    {
        $this->listCashRequest = $listCashRequest;

        return $this;
    }

    /**
     * Adds as listCashRegisterRequest.
     *
     * @return self
     */
    public function addToListCashRegisterRequest(\Pohoda\List\ListCashRegisterRequest $listCashRegisterRequest)
    {
        $this->listCashRegisterRequest[] = $listCashRegisterRequest;

        return $this;
    }

    /**
     * isset listCashRegisterRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListCashRegisterRequest($index)
    {
        return isset($this->listCashRegisterRequest[$index]);
    }

    /**
     * unset listCashRegisterRequest.
     *
     * @param int|string $index
     */
    public function unsetListCashRegisterRequest($index): void
    {
        unset($this->listCashRegisterRequest[$index]);
    }

    /**
     * Gets as listCashRegisterRequest.
     *
     * @return \Pohoda\List\ListCashRegisterRequest[]
     */
    public function getListCashRegisterRequest()
    {
        return $this->listCashRegisterRequest;
    }

    /**
     * Sets a new listCashRegisterRequest.
     *
     * @param \Pohoda\List\ListCashRegisterRequest[] $listCashRegisterRequest
     *
     * @return self
     */
    public function setListCashRegisterRequest(array $listCashRegisterRequest)
    {
        $this->listCashRegisterRequest = $listCashRegisterRequest;

        return $this;
    }

    /**
     * Adds as listBankAccountRequest.
     *
     * @return self
     */
    public function addToListBankAccountRequest(\Pohoda\List\ListBankAccountRequest $listBankAccountRequest)
    {
        $this->listBankAccountRequest[] = $listBankAccountRequest;

        return $this;
    }

    /**
     * isset listBankAccountRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListBankAccountRequest($index)
    {
        return isset($this->listBankAccountRequest[$index]);
    }

    /**
     * unset listBankAccountRequest.
     *
     * @param int|string $index
     */
    public function unsetListBankAccountRequest($index): void
    {
        unset($this->listBankAccountRequest[$index]);
    }

    /**
     * Gets as listBankAccountRequest.
     *
     * @return \Pohoda\List\ListBankAccountRequest[]
     */
    public function getListBankAccountRequest()
    {
        return $this->listBankAccountRequest;
    }

    /**
     * Sets a new listBankAccountRequest.
     *
     * @param \Pohoda\List\ListBankAccountRequest[] $listBankAccountRequest
     *
     * @return self
     */
    public function setListBankAccountRequest(array $listBankAccountRequest)
    {
        $this->listBankAccountRequest = $listBankAccountRequest;

        return $this;
    }

    /**
     * Adds as listContractRequest.
     *
     * @return self
     */
    public function addToListContractRequest(\Pohoda\ListContract\ListContractRequest $listContractRequest)
    {
        $this->listContractRequest[] = $listContractRequest;

        return $this;
    }

    /**
     * isset listContractRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListContractRequest($index)
    {
        return isset($this->listContractRequest[$index]);
    }

    /**
     * unset listContractRequest.
     *
     * @param int|string $index
     */
    public function unsetListContractRequest($index): void
    {
        unset($this->listContractRequest[$index]);
    }

    /**
     * Gets as listContractRequest.
     *
     * @return \Pohoda\ListContract\ListContractRequest[]
     */
    public function getListContractRequest()
    {
        return $this->listContractRequest;
    }

    /**
     * Sets a new listContractRequest.
     *
     * @param \Pohoda\ListContract\ListContractRequest[] $listContractRequest
     *
     * @return self
     */
    public function setListContractRequest(array $listContractRequest)
    {
        $this->listContractRequest = $listContractRequest;

        return $this;
    }

    /**
     * Adds as listCentreRequest.
     *
     * @return self
     */
    public function addToListCentreRequest(\Pohoda\ListCentre\ListCentreRequest $listCentreRequest)
    {
        $this->listCentreRequest[] = $listCentreRequest;

        return $this;
    }

    /**
     * isset listCentreRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListCentreRequest($index)
    {
        return isset($this->listCentreRequest[$index]);
    }

    /**
     * unset listCentreRequest.
     *
     * @param int|string $index
     */
    public function unsetListCentreRequest($index): void
    {
        unset($this->listCentreRequest[$index]);
    }

    /**
     * Gets as listCentreRequest.
     *
     * @return \Pohoda\ListCentre\ListCentreRequest[]
     */
    public function getListCentreRequest()
    {
        return $this->listCentreRequest;
    }

    /**
     * Sets a new listCentreRequest.
     *
     * @param \Pohoda\ListCentre\ListCentreRequest[] $listCentreRequest
     *
     * @return self
     */
    public function setListCentreRequest(array $listCentreRequest)
    {
        $this->listCentreRequest = $listCentreRequest;

        return $this;
    }

    /**
     * Adds as listNumericSeriesRequest.
     *
     * @return self
     */
    public function addToListNumericSeriesRequest(\Pohoda\List\ListNumericSeriesRequest $listNumericSeriesRequest)
    {
        $this->listNumericSeriesRequest[] = $listNumericSeriesRequest;

        return $this;
    }

    /**
     * isset listNumericSeriesRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListNumericSeriesRequest($index)
    {
        return isset($this->listNumericSeriesRequest[$index]);
    }

    /**
     * unset listNumericSeriesRequest.
     *
     * @param int|string $index
     */
    public function unsetListNumericSeriesRequest($index): void
    {
        unset($this->listNumericSeriesRequest[$index]);
    }

    /**
     * Gets as listNumericSeriesRequest.
     *
     * @return \Pohoda\List\ListNumericSeriesRequest[]
     */
    public function getListNumericSeriesRequest()
    {
        return $this->listNumericSeriesRequest;
    }

    /**
     * Sets a new listNumericSeriesRequest.
     *
     * @param \Pohoda\List\ListNumericSeriesRequest[] $listNumericSeriesRequest
     *
     * @return self
     */
    public function setListNumericSeriesRequest(array $listNumericSeriesRequest)
    {
        $this->listNumericSeriesRequest = $listNumericSeriesRequest;

        return $this;
    }

    /**
     * Adds as listUserCodeRequest.
     *
     * @return self
     */
    public function addToListUserCodeRequest(\Pohoda\List\ListUserCodeRequest $listUserCodeRequest)
    {
        $this->listUserCodeRequest[] = $listUserCodeRequest;

        return $this;
    }

    /**
     * isset listUserCodeRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListUserCodeRequest($index)
    {
        return isset($this->listUserCodeRequest[$index]);
    }

    /**
     * unset listUserCodeRequest.
     *
     * @param int|string $index
     */
    public function unsetListUserCodeRequest($index): void
    {
        unset($this->listUserCodeRequest[$index]);
    }

    /**
     * Gets as listUserCodeRequest.
     *
     * @return \Pohoda\List\ListUserCodeRequest[]
     */
    public function getListUserCodeRequest()
    {
        return $this->listUserCodeRequest;
    }

    /**
     * Sets a new listUserCodeRequest.
     *
     * @param \Pohoda\List\ListUserCodeRequest[] $listUserCodeRequest
     *
     * @return self
     */
    public function setListUserCodeRequest(array $listUserCodeRequest)
    {
        $this->listUserCodeRequest = $listUserCodeRequest;

        return $this;
    }

    /**
     * Adds as listStorageRequest.
     *
     * @return self
     */
    public function addToListStorageRequest(\Pohoda\List\ListStorageRequest $listStorageRequest)
    {
        $this->listStorageRequest[] = $listStorageRequest;

        return $this;
    }

    /**
     * isset listStorageRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListStorageRequest($index)
    {
        return isset($this->listStorageRequest[$index]);
    }

    /**
     * unset listStorageRequest.
     *
     * @param int|string $index
     */
    public function unsetListStorageRequest($index): void
    {
        unset($this->listStorageRequest[$index]);
    }

    /**
     * Gets as listStorageRequest.
     *
     * @return \Pohoda\List\ListStorageRequest[]
     */
    public function getListStorageRequest()
    {
        return $this->listStorageRequest;
    }

    /**
     * Sets a new listStorageRequest.
     *
     * @param \Pohoda\List\ListStorageRequest[] $listStorageRequest
     *
     * @return self
     */
    public function setListStorageRequest(array $listStorageRequest)
    {
        $this->listStorageRequest = $listStorageRequest;

        return $this;
    }

    /**
     * Adds as listSellingPriceRequest.
     *
     * @return self
     */
    public function addToListSellingPriceRequest(\Pohoda\List\ListSellingPriceRequest $listSellingPriceRequest)
    {
        $this->listSellingPriceRequest[] = $listSellingPriceRequest;

        return $this;
    }

    /**
     * isset listSellingPriceRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListSellingPriceRequest($index)
    {
        return isset($this->listSellingPriceRequest[$index]);
    }

    /**
     * unset listSellingPriceRequest.
     *
     * @param int|string $index
     */
    public function unsetListSellingPriceRequest($index): void
    {
        unset($this->listSellingPriceRequest[$index]);
    }

    /**
     * Gets as listSellingPriceRequest.
     *
     * @return \Pohoda\List\ListSellingPriceRequest[]
     */
    public function getListSellingPriceRequest()
    {
        return $this->listSellingPriceRequest;
    }

    /**
     * Sets a new listSellingPriceRequest.
     *
     * @param \Pohoda\List\ListSellingPriceRequest[] $listSellingPriceRequest
     *
     * @return self
     */
    public function setListSellingPriceRequest(array $listSellingPriceRequest)
    {
        $this->listSellingPriceRequest = $listSellingPriceRequest;

        return $this;
    }

    /**
     * Adds as listCategoryRequest.
     *
     * @return self
     */
    public function addToListCategoryRequest(\Pohoda\List\ListCategoryRequest $listCategoryRequest)
    {
        $this->listCategoryRequest[] = $listCategoryRequest;

        return $this;
    }

    /**
     * isset listCategoryRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListCategoryRequest($index)
    {
        return isset($this->listCategoryRequest[$index]);
    }

    /**
     * unset listCategoryRequest.
     *
     * @param int|string $index
     */
    public function unsetListCategoryRequest($index): void
    {
        unset($this->listCategoryRequest[$index]);
    }

    /**
     * Gets as listCategoryRequest.
     *
     * @return \Pohoda\List\ListCategoryRequest[]
     */
    public function getListCategoryRequest()
    {
        return $this->listCategoryRequest;
    }

    /**
     * Sets a new listCategoryRequest.
     *
     * @param \Pohoda\List\ListCategoryRequest[] $listCategoryRequest
     *
     * @return self
     */
    public function setListCategoryRequest(array $listCategoryRequest)
    {
        $this->listCategoryRequest = $listCategoryRequest;

        return $this;
    }

    /**
     * Adds as listIntParamRequest.
     *
     * @return self
     */
    public function addToListIntParamRequest(\Pohoda\List\ListIntParamRequest $listIntParamRequest)
    {
        $this->listIntParamRequest[] = $listIntParamRequest;

        return $this;
    }

    /**
     * isset listIntParamRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListIntParamRequest($index)
    {
        return isset($this->listIntParamRequest[$index]);
    }

    /**
     * unset listIntParamRequest.
     *
     * @param int|string $index
     */
    public function unsetListIntParamRequest($index): void
    {
        unset($this->listIntParamRequest[$index]);
    }

    /**
     * Gets as listIntParamRequest.
     *
     * @return \Pohoda\List\ListIntParamRequest[]
     */
    public function getListIntParamRequest()
    {
        return $this->listIntParamRequest;
    }

    /**
     * Sets a new listIntParamRequest.
     *
     * @param \Pohoda\List\ListIntParamRequest[] $listIntParamRequest
     *
     * @return self
     */
    public function setListIntParamRequest(array $listIntParamRequest)
    {
        $this->listIntParamRequest = $listIntParamRequest;

        return $this;
    }

    /**
     * Adds as listStoreRequest.
     *
     * @return self
     */
    public function addToListStoreRequest(\Pohoda\List\ListStoreRequest $listStoreRequest)
    {
        $this->listStoreRequest[] = $listStoreRequest;

        return $this;
    }

    /**
     * isset listStoreRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListStoreRequest($index)
    {
        return isset($this->listStoreRequest[$index]);
    }

    /**
     * unset listStoreRequest.
     *
     * @param int|string $index
     */
    public function unsetListStoreRequest($index): void
    {
        unset($this->listStoreRequest[$index]);
    }

    /**
     * Gets as listStoreRequest.
     *
     * @return \Pohoda\List\ListStoreRequest[]
     */
    public function getListStoreRequest()
    {
        return $this->listStoreRequest;
    }

    /**
     * Sets a new listStoreRequest.
     *
     * @param \Pohoda\List\ListStoreRequest[] $listStoreRequest
     *
     * @return self
     */
    public function setListStoreRequest(array $listStoreRequest)
    {
        $this->listStoreRequest = $listStoreRequest;

        return $this;
    }

    /**
     * Adds as listGroupStocksRequest.
     *
     * @return self
     */
    public function addToListGroupStocksRequest(\Pohoda\List\ListGroupStocksRequest $listGroupStocksRequest)
    {
        $this->listGroupStocksRequest[] = $listGroupStocksRequest;

        return $this;
    }

    /**
     * isset listGroupStocksRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListGroupStocksRequest($index)
    {
        return isset($this->listGroupStocksRequest[$index]);
    }

    /**
     * unset listGroupStocksRequest.
     *
     * @param int|string $index
     */
    public function unsetListGroupStocksRequest($index): void
    {
        unset($this->listGroupStocksRequest[$index]);
    }

    /**
     * Gets as listGroupStocksRequest.
     *
     * @return \Pohoda\List\ListGroupStocksRequest[]
     */
    public function getListGroupStocksRequest()
    {
        return $this->listGroupStocksRequest;
    }

    /**
     * Sets a new listGroupStocksRequest.
     *
     * @param \Pohoda\List\ListGroupStocksRequest[] $listGroupStocksRequest
     *
     * @return self
     */
    public function setListGroupStocksRequest(array $listGroupStocksRequest)
    {
        $this->listGroupStocksRequest = $listGroupStocksRequest;

        return $this;
    }

    /**
     * Adds as listActionPriceRequest.
     *
     * @return self
     */
    public function addToListActionPriceRequest(\Pohoda\List\ListActionPriceRequest $listActionPriceRequest)
    {
        $this->listActionPriceRequest[] = $listActionPriceRequest;

        return $this;
    }

    /**
     * isset listActionPriceRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListActionPriceRequest($index)
    {
        return isset($this->listActionPriceRequest[$index]);
    }

    /**
     * unset listActionPriceRequest.
     *
     * @param int|string $index
     */
    public function unsetListActionPriceRequest($index): void
    {
        unset($this->listActionPriceRequest[$index]);
    }

    /**
     * Gets as listActionPriceRequest.
     *
     * @return \Pohoda\List\ListActionPriceRequest[]
     */
    public function getListActionPriceRequest()
    {
        return $this->listActionPriceRequest;
    }

    /**
     * Sets a new listActionPriceRequest.
     *
     * @param \Pohoda\List\ListActionPriceRequest[] $listActionPriceRequest
     *
     * @return self
     */
    public function setListActionPriceRequest(array $listActionPriceRequest)
    {
        $this->listActionPriceRequest = $listActionPriceRequest;

        return $this;
    }

    /**
     * Adds as listPaymentRequest.
     *
     * @return self
     */
    public function addToListPaymentRequest(\Pohoda\List\ListPaymentRequest $listPaymentRequest)
    {
        $this->listPaymentRequest[] = $listPaymentRequest;

        return $this;
    }

    /**
     * isset listPaymentRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListPaymentRequest($index)
    {
        return isset($this->listPaymentRequest[$index]);
    }

    /**
     * unset listPaymentRequest.
     *
     * @param int|string $index
     */
    public function unsetListPaymentRequest($index): void
    {
        unset($this->listPaymentRequest[$index]);
    }

    /**
     * Gets as listPaymentRequest.
     *
     * @return \Pohoda\List\ListPaymentRequest[]
     */
    public function getListPaymentRequest()
    {
        return $this->listPaymentRequest;
    }

    /**
     * Sets a new listPaymentRequest.
     *
     * @param \Pohoda\List\ListPaymentRequest[] $listPaymentRequest
     *
     * @return self
     */
    public function setListPaymentRequest(array $listPaymentRequest)
    {
        $this->listPaymentRequest = $listPaymentRequest;

        return $this;
    }

    /**
     * Adds as listNumericalSeriesRequest.
     *
     * @return self
     */
    public function addToListNumericalSeriesRequest(\Pohoda\List\ListNumericalSeriesRequest $listNumericalSeriesRequest)
    {
        $this->listNumericalSeriesRequest[] = $listNumericalSeriesRequest;

        return $this;
    }

    /**
     * isset listNumericalSeriesRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListNumericalSeriesRequest($index)
    {
        return isset($this->listNumericalSeriesRequest[$index]);
    }

    /**
     * unset listNumericalSeriesRequest.
     *
     * @param int|string $index
     */
    public function unsetListNumericalSeriesRequest($index): void
    {
        unset($this->listNumericalSeriesRequest[$index]);
    }

    /**
     * Gets as listNumericalSeriesRequest.
     *
     * @return \Pohoda\List\ListNumericalSeriesRequest[]
     */
    public function getListNumericalSeriesRequest()
    {
        return $this->listNumericalSeriesRequest;
    }

    /**
     * Sets a new listNumericalSeriesRequest.
     *
     * @param \Pohoda\List\ListNumericalSeriesRequest[] $listNumericalSeriesRequest
     *
     * @return self
     */
    public function setListNumericalSeriesRequest(array $listNumericalSeriesRequest)
    {
        $this->listNumericalSeriesRequest = $listNumericalSeriesRequest;

        return $this;
    }

    /**
     * Adds as listGDPRRequest.
     *
     * @return self
     */
    public function addToListGDPRRequest(\Pohoda\List\ListGDPRRequest $listGDPRRequest)
    {
        $this->listGDPRRequest[] = $listGDPRRequest;

        return $this;
    }

    /**
     * isset listGDPRRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListGDPRRequest($index)
    {
        return isset($this->listGDPRRequest[$index]);
    }

    /**
     * unset listGDPRRequest.
     *
     * @param int|string $index
     */
    public function unsetListGDPRRequest($index): void
    {
        unset($this->listGDPRRequest[$index]);
    }

    /**
     * Gets as listGDPRRequest.
     *
     * @return \Pohoda\List\ListGDPRRequest[]
     */
    public function getListGDPRRequest()
    {
        return $this->listGDPRRequest;
    }

    /**
     * Sets a new listGDPRRequest.
     *
     * @param \Pohoda\List\ListGDPRRequest[] $listGDPRRequest
     *
     * @return self
     */
    public function setListGDPRRequest(array $listGDPRRequest)
    {
        $this->listGDPRRequest = $listGDPRRequest;

        return $this;
    }

    /**
     * Adds as listEstablishmentRequest.
     *
     * @return self
     */
    public function addToListEstablishmentRequest(\Pohoda\List\ListEstablishmentRequest $listEstablishmentRequest)
    {
        $this->listEstablishmentRequest[] = $listEstablishmentRequest;

        return $this;
    }

    /**
     * isset listEstablishmentRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListEstablishmentRequest($index)
    {
        return isset($this->listEstablishmentRequest[$index]);
    }

    /**
     * unset listEstablishmentRequest.
     *
     * @param int|string $index
     */
    public function unsetListEstablishmentRequest($index): void
    {
        unset($this->listEstablishmentRequest[$index]);
    }

    /**
     * Gets as listEstablishmentRequest.
     *
     * @return \Pohoda\List\ListEstablishmentRequest[]
     */
    public function getListEstablishmentRequest()
    {
        return $this->listEstablishmentRequest;
    }

    /**
     * Sets a new listEstablishmentRequest.
     *
     * @param \Pohoda\List\ListEstablishmentRequest[] $listEstablishmentRequest
     *
     * @return self
     */
    public function setListEstablishmentRequest(array $listEstablishmentRequest)
    {
        $this->listEstablishmentRequest = $listEstablishmentRequest;

        return $this;
    }

    /**
     * Adds as listClassificationVATRequest.
     *
     * @return self
     */
    public function addToListClassificationVATRequest(\Pohoda\List\ListClassificationVATRequest $listClassificationVATRequest)
    {
        $this->listClassificationVATRequest[] = $listClassificationVATRequest;

        return $this;
    }

    /**
     * isset listClassificationVATRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListClassificationVATRequest($index)
    {
        return isset($this->listClassificationVATRequest[$index]);
    }

    /**
     * unset listClassificationVATRequest.
     *
     * @param int|string $index
     */
    public function unsetListClassificationVATRequest($index): void
    {
        unset($this->listClassificationVATRequest[$index]);
    }

    /**
     * Gets as listClassificationVATRequest.
     *
     * @return \Pohoda\List\ListClassificationVATRequest[]
     */
    public function getListClassificationVATRequest()
    {
        return $this->listClassificationVATRequest;
    }

    /**
     * Sets a new listClassificationVATRequest.
     *
     * @param \Pohoda\List\ListClassificationVATRequest[] $listClassificationVATRequest
     *
     * @return self
     */
    public function setListClassificationVATRequest(array $listClassificationVATRequest)
    {
        $this->listClassificationVATRequest = $listClassificationVATRequest;

        return $this;
    }

    /**
     * Adds as mKasaRequest.
     *
     * @return self
     */
    public function addToMKasaRequest(\Pohoda\MKasa\MKasaRequest $mKasaRequest)
    {
        $this->mKasaRequest[] = $mKasaRequest;

        return $this;
    }

    /**
     * isset mKasaRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetMKasaRequest($index)
    {
        return isset($this->mKasaRequest[$index]);
    }

    /**
     * unset mKasaRequest.
     *
     * @param int|string $index
     */
    public function unsetMKasaRequest($index): void
    {
        unset($this->mKasaRequest[$index]);
    }

    /**
     * Gets as mKasaRequest.
     *
     * @return \Pohoda\MKasa\MKasaRequest[]
     */
    public function getMKasaRequest()
    {
        return $this->mKasaRequest;
    }

    /**
     * Sets a new mKasaRequest.
     *
     * @param \Pohoda\MKasa\MKasaRequest[] $mKasaRequest
     *
     * @return self
     */
    public function setMKasaRequest(array $mKasaRequest)
    {
        $this->mKasaRequest = $mKasaRequest;

        return $this;
    }

    /**
     * Adds as print.
     *
     * @return self
     */
    public function addToPrint(\Pohoda\Print\PrintXsd $print)
    {
        $this->print[] = $print;

        return $this;
    }

    /**
     * isset print.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPrint($index)
    {
        return isset($this->print[$index]);
    }

    /**
     * unset print.
     *
     * @param int|string $index
     */
    public function unsetPrint($index): void
    {
        unset($this->print[$index]);
    }

    /**
     * Gets as print.
     *
     * @return \Pohoda\Print\PrintXsd[]
     */
    public function getPrint()
    {
        return $this->print;
    }

    /**
     * Sets a new print.
     *
     * @param \Pohoda\Print\PrintXsd[] $print
     *
     * @return self
     */
    public function setPrint(array $print)
    {
        $this->print = $print;

        return $this;
    }

    /**
     * Adds as lock.
     *
     * @return self
     */
    public function addToLock(\Pohoda\Lock\Lock $lock)
    {
        $this->lock[] = $lock;

        return $this;
    }

    /**
     * isset lock.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetLock($index)
    {
        return isset($this->lock[$index]);
    }

    /**
     * unset lock.
     *
     * @param int|string $index
     */
    public function unsetLock($index): void
    {
        unset($this->lock[$index]);
    }

    /**
     * Gets as lock.
     *
     * @return \Pohoda\Lock\Lock[]
     */
    public function getLock()
    {
        return $this->lock;
    }

    /**
     * Sets a new lock.
     *
     * @param \Pohoda\Lock\Lock[] $lock
     *
     * @return self
     */
    public function setLock(array $lock)
    {
        $this->lock = $lock;

        return $this;
    }

    /**
     * Adds as isdoc.
     *
     * @return self
     */
    public function addToIsdoc(\Pohoda\Isdoc\Isdoc $isdoc)
    {
        $this->isdoc[] = $isdoc;

        return $this;
    }

    /**
     * isset isdoc.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetIsdoc($index)
    {
        return isset($this->isdoc[$index]);
    }

    /**
     * unset isdoc.
     *
     * @param int|string $index
     */
    public function unsetIsdoc($index): void
    {
        unset($this->isdoc[$index]);
    }

    /**
     * Gets as isdoc.
     *
     * @return \Pohoda\Isdoc\Isdoc[]
     */
    public function getIsdoc()
    {
        return $this->isdoc;
    }

    /**
     * Sets a new isdoc.
     *
     * @param \Pohoda\Isdoc\Isdoc[] $isdoc
     *
     * @return self
     */
    public function setIsdoc(array $isdoc)
    {
        $this->isdoc = $isdoc;

        return $this;
    }

    /**
     * Adds as sendEET.
     *
     * @return self
     */
    public function addToSendEET(\Pohoda\SendEET\SendEET $sendEET)
    {
        $this->sendEET[] = $sendEET;

        return $this;
    }

    /**
     * isset sendEET.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetSendEET($index)
    {
        return isset($this->sendEET[$index]);
    }

    /**
     * unset sendEET.
     *
     * @param int|string $index
     */
    public function unsetSendEET($index): void
    {
        unset($this->sendEET[$index]);
    }

    /**
     * Gets as sendEET.
     *
     * @return \Pohoda\SendEET\SendEET[]
     */
    public function getSendEET()
    {
        return $this->sendEET;
    }

    /**
     * Sets a new sendEET.
     *
     * @param \Pohoda\SendEET\SendEET[] $sendEET
     *
     * @return self
     */
    public function setSendEET(array $sendEET)
    {
        $this->sendEET = $sendEET;

        return $this;
    }

    /**
     * Adds as accountingSalesVouchers.
     *
     * @return self
     */
    public function addToAccountingSalesVouchers(\Pohoda\AccountingSalesVouchers\AccountingSalesVouchers $accountingSalesVouchers)
    {
        $this->accountingSalesVouchers[] = $accountingSalesVouchers;

        return $this;
    }

    /**
     * isset accountingSalesVouchers.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetAccountingSalesVouchers($index)
    {
        return isset($this->accountingSalesVouchers[$index]);
    }

    /**
     * unset accountingSalesVouchers.
     *
     * @param int|string $index
     */
    public function unsetAccountingSalesVouchers($index): void
    {
        unset($this->accountingSalesVouchers[$index]);
    }

    /**
     * Gets as accountingSalesVouchers.
     *
     * @return \Pohoda\AccountingSalesVouchers\AccountingSalesVouchers[]
     */
    public function getAccountingSalesVouchers()
    {
        return $this->accountingSalesVouchers;
    }

    /**
     * Sets a new accountingSalesVouchers.
     *
     * @param \Pohoda\AccountingSalesVouchers\AccountingSalesVouchers[] $accountingSalesVouchers
     *
     * @return self
     */
    public function setAccountingSalesVouchers(array $accountingSalesVouchers)
    {
        $this->accountingSalesVouchers = $accountingSalesVouchers;

        return $this;
    }

    /**
     * Adds as listGlobalSettingsRequest.
     *
     * @return self
     */
    public function addToListGlobalSettingsRequest(\Pohoda\List\ListGlobalSettingsRequest $listGlobalSettingsRequest)
    {
        $this->listGlobalSettingsRequest[] = $listGlobalSettingsRequest;

        return $this;
    }

    /**
     * isset listGlobalSettingsRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListGlobalSettingsRequest($index)
    {
        return isset($this->listGlobalSettingsRequest[$index]);
    }

    /**
     * unset listGlobalSettingsRequest.
     *
     * @param int|string $index
     */
    public function unsetListGlobalSettingsRequest($index): void
    {
        unset($this->listGlobalSettingsRequest[$index]);
    }

    /**
     * Gets as listGlobalSettingsRequest.
     *
     * @return \Pohoda\List\ListGlobalSettingsRequest[]
     */
    public function getListGlobalSettingsRequest()
    {
        return $this->listGlobalSettingsRequest;
    }

    /**
     * Sets a new listGlobalSettingsRequest.
     *
     * @param \Pohoda\List\ListGlobalSettingsRequest[] $listGlobalSettingsRequest
     *
     * @return self
     */
    public function setListGlobalSettingsRequest(array $listGlobalSettingsRequest)
    {
        $this->listGlobalSettingsRequest = $listGlobalSettingsRequest;

        return $this;
    }

    /**
     * Adds as listRegistrationNumberRequest.
     *
     * @return self
     */
    public function addToListRegistrationNumberRequest(\Pohoda\List\ListRegistrationNumberRequest $listRegistrationNumberRequest)
    {
        $this->listRegistrationNumberRequest[] = $listRegistrationNumberRequest;

        return $this;
    }

    /**
     * isset listRegistrationNumberRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListRegistrationNumberRequest($index)
    {
        return isset($this->listRegistrationNumberRequest[$index]);
    }

    /**
     * unset listRegistrationNumberRequest.
     *
     * @param int|string $index
     */
    public function unsetListRegistrationNumberRequest($index): void
    {
        unset($this->listRegistrationNumberRequest[$index]);
    }

    /**
     * Gets as listRegistrationNumberRequest.
     *
     * @return \Pohoda\List\ListRegistrationNumberRequest[]
     */
    public function getListRegistrationNumberRequest()
    {
        return $this->listRegistrationNumberRequest;
    }

    /**
     * Sets a new listRegistrationNumberRequest.
     *
     * @param \Pohoda\List\ListRegistrationNumberRequest[] $listRegistrationNumberRequest
     *
     * @return self
     */
    public function setListRegistrationNumberRequest(array $listRegistrationNumberRequest)
    {
        $this->listRegistrationNumberRequest = $listRegistrationNumberRequest;

        return $this;
    }

    /**
     * Adds as listMovementRequest.
     *
     * @return self
     */
    public function addToListMovementRequest(\Pohoda\List\ListMovementRequest $listMovementRequest)
    {
        $this->listMovementRequest[] = $listMovementRequest;

        return $this;
    }

    /**
     * isset listMovementRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListMovementRequest($index)
    {
        return isset($this->listMovementRequest[$index]);
    }

    /**
     * unset listMovementRequest.
     *
     * @param int|string $index
     */
    public function unsetListMovementRequest($index): void
    {
        unset($this->listMovementRequest[$index]);
    }

    /**
     * Gets as listMovementRequest.
     *
     * @return \Pohoda\List\ListMovementRequest[]
     */
    public function getListMovementRequest()
    {
        return $this->listMovementRequest;
    }

    /**
     * Sets a new listMovementRequest.
     *
     * @param \Pohoda\List\ListMovementRequest[] $listMovementRequest
     *
     * @return self
     */
    public function setListMovementRequest(array $listMovementRequest)
    {
        $this->listMovementRequest = $listMovementRequest;

        return $this;
    }

    /**
     * Adds as listRecyclingContribRequest.
     *
     * @return self
     */
    public function addToListRecyclingContribRequest(\Pohoda\List\ListRecyclingContribRequest $listRecyclingContribRequest)
    {
        $this->listRecyclingContribRequest[] = $listRecyclingContribRequest;

        return $this;
    }

    /**
     * isset listRecyclingContribRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListRecyclingContribRequest($index)
    {
        return isset($this->listRecyclingContribRequest[$index]);
    }

    /**
     * unset listRecyclingContribRequest.
     *
     * @param int|string $index
     */
    public function unsetListRecyclingContribRequest($index): void
    {
        unset($this->listRecyclingContribRequest[$index]);
    }

    /**
     * Gets as listRecyclingContribRequest.
     *
     * @return \Pohoda\List\ListRecyclingContribRequest[]
     */
    public function getListRecyclingContribRequest()
    {
        return $this->listRecyclingContribRequest;
    }

    /**
     * Sets a new listRecyclingContribRequest.
     *
     * @param \Pohoda\List\ListRecyclingContribRequest[] $listRecyclingContribRequest
     *
     * @return self
     */
    public function setListRecyclingContribRequest(array $listRecyclingContribRequest)
    {
        $this->listRecyclingContribRequest = $listRecyclingContribRequest;

        return $this;
    }

    /**
     * Adds as listIndividualPriceRequest.
     *
     * @return self
     */
    public function addToListIndividualPriceRequest(\Pohoda\List\ListIndividualPriceRequest $listIndividualPriceRequest)
    {
        $this->listIndividualPriceRequest[] = $listIndividualPriceRequest;

        return $this;
    }

    /**
     * isset listIndividualPriceRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListIndividualPriceRequest($index)
    {
        return isset($this->listIndividualPriceRequest[$index]);
    }

    /**
     * unset listIndividualPriceRequest.
     *
     * @param int|string $index
     */
    public function unsetListIndividualPriceRequest($index): void
    {
        unset($this->listIndividualPriceRequest[$index]);
    }

    /**
     * Gets as listIndividualPriceRequest.
     *
     * @return \Pohoda\List\ListIndividualPriceRequest[]
     */
    public function getListIndividualPriceRequest()
    {
        return $this->listIndividualPriceRequest;
    }

    /**
     * Sets a new listIndividualPriceRequest.
     *
     * @param \Pohoda\List\ListIndividualPriceRequest[] $listIndividualPriceRequest
     *
     * @return self
     */
    public function setListIndividualPriceRequest(array $listIndividualPriceRequest)
    {
        $this->listIndividualPriceRequest = $listIndividualPriceRequest;

        return $this;
    }

    /**
     * Adds as listServiceRequest.
     *
     * @return self
     */
    public function addToListServiceRequest(\Pohoda\List\ListServiceRequest $listServiceRequest)
    {
        $this->listServiceRequest[] = $listServiceRequest;

        return $this;
    }

    /**
     * isset listServiceRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListServiceRequest($index)
    {
        return isset($this->listServiceRequest[$index]);
    }

    /**
     * unset listServiceRequest.
     *
     * @param int|string $index
     */
    public function unsetListServiceRequest($index): void
    {
        unset($this->listServiceRequest[$index]);
    }

    /**
     * Gets as listServiceRequest.
     *
     * @return \Pohoda\List\ListServiceRequest[]
     */
    public function getListServiceRequest()
    {
        return $this->listServiceRequest;
    }

    /**
     * Sets a new listServiceRequest.
     *
     * @param \Pohoda\List\ListServiceRequest[] $listServiceRequest
     *
     * @return self
     */
    public function setListServiceRequest(array $listServiceRequest)
    {
        $this->listServiceRequest = $listServiceRequest;

        return $this;
    }

    /**
     * Adds as listRulesPairingRequest.
     *
     * @return self
     */
    public function addToListRulesPairingRequest(\Pohoda\List\ListRulesPairingRequest $listRulesPairingRequest)
    {
        $this->listRulesPairingRequest[] = $listRulesPairingRequest;

        return $this;
    }

    /**
     * isset listRulesPairingRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListRulesPairingRequest($index)
    {
        return isset($this->listRulesPairingRequest[$index]);
    }

    /**
     * unset listRulesPairingRequest.
     *
     * @param int|string $index
     */
    public function unsetListRulesPairingRequest($index): void
    {
        unset($this->listRulesPairingRequest[$index]);
    }

    /**
     * Gets as listRulesPairingRequest.
     *
     * @return \Pohoda\List\ListRulesPairingRequest[]
     */
    public function getListRulesPairingRequest()
    {
        return $this->listRulesPairingRequest;
    }

    /**
     * Sets a new listRulesPairingRequest.
     *
     * @param \Pohoda\List\ListRulesPairingRequest[] $listRulesPairingRequest
     *
     * @return self
     */
    public function setListRulesPairingRequest(array $listRulesPairingRequest)
    {
        $this->listRulesPairingRequest = $listRulesPairingRequest;

        return $this;
    }

    /**
     * Adds as liquidationWithoutLink.
     *
     * @return self
     */
    public function addToLiquidationWithoutLink(\Pohoda\LiquidationWithoutLink\LiquidationWithoutLink $liquidationWithoutLink)
    {
        $this->liquidationWithoutLink[] = $liquidationWithoutLink;

        return $this;
    }

    /**
     * isset liquidationWithoutLink.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetLiquidationWithoutLink($index)
    {
        return isset($this->liquidationWithoutLink[$index]);
    }

    /**
     * unset liquidationWithoutLink.
     *
     * @param int|string $index
     */
    public function unsetLiquidationWithoutLink($index): void
    {
        unset($this->liquidationWithoutLink[$index]);
    }

    /**
     * Gets as liquidationWithoutLink.
     *
     * @return \Pohoda\LiquidationWithoutLink\LiquidationWithoutLink[]
     */
    public function getLiquidationWithoutLink()
    {
        return $this->liquidationWithoutLink;
    }

    /**
     * Sets a new liquidationWithoutLink.
     *
     * @param \Pohoda\LiquidationWithoutLink\LiquidationWithoutLink[] $liquidationWithoutLink
     *
     * @return self
     */
    public function setLiquidationWithoutLink(array $liquidationWithoutLink)
    {
        $this->liquidationWithoutLink = $liquidationWithoutLink;

        return $this;
    }

    /**
     * Adds as automaticLiquidation.
     *
     * @return self
     */
    public function addToAutomaticLiquidation(\Pohoda\AutomaticLiquidation $automaticLiquidation)
    {
        $this->automaticLiquidation[] = $automaticLiquidation;

        return $this;
    }

    /**
     * isset automaticLiquidation.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetAutomaticLiquidation($index)
    {
        return isset($this->automaticLiquidation[$index]);
    }

    /**
     * unset automaticLiquidation.
     *
     * @param int|string $index
     */
    public function unsetAutomaticLiquidation($index): void
    {
        unset($this->automaticLiquidation[$index]);
    }

    /**
     * Gets as automaticLiquidation.
     *
     * @return \Pohoda\AutomaticLiquidation[]
     */
    public function getAutomaticLiquidation()
    {
        return $this->automaticLiquidation;
    }

    /**
     * Sets a new automaticLiquidation.
     *
     * @param \Pohoda\AutomaticLiquidation[] $automaticLiquidation
     *
     * @return self
     */
    public function setAutomaticLiquidation(array $automaticLiquidation)
    {
        $this->automaticLiquidation = $automaticLiquidation;

        return $this;
    }

    /**
     * Adds as listSupplierRequest.
     *
     * @return self
     */
    public function addToListSupplierRequest(\Pohoda\List\ListSupplierRequest $listSupplierRequest)
    {
        $this->listSupplierRequest[] = $listSupplierRequest;

        return $this;
    }

    /**
     * isset listSupplierRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListSupplierRequest($index)
    {
        return isset($this->listSupplierRequest[$index]);
    }

    /**
     * unset listSupplierRequest.
     *
     * @param int|string $index
     */
    public function unsetListSupplierRequest($index): void
    {
        unset($this->listSupplierRequest[$index]);
    }

    /**
     * Gets as listSupplierRequest.
     *
     * @return \Pohoda\List\ListSupplierRequest[]
     */
    public function getListSupplierRequest()
    {
        return $this->listSupplierRequest;
    }

    /**
     * Sets a new listSupplierRequest.
     *
     * @param \Pohoda\List\ListSupplierRequest[] $listSupplierRequest
     *
     * @return self
     */
    public function setListSupplierRequest(array $listSupplierRequest)
    {
        $this->listSupplierRequest = $listSupplierRequest;

        return $this;
    }

    /**
     * Adds as listUserAgendaRequest.
     *
     * @return self
     */
    public function addToListUserAgendaRequest(\Pohoda\List\ListUserAgendaRequest $listUserAgendaRequest)
    {
        $this->listUserAgendaRequest[] = $listUserAgendaRequest;

        return $this;
    }

    /**
     * isset listUserAgendaRequest.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListUserAgendaRequest($index)
    {
        return isset($this->listUserAgendaRequest[$index]);
    }

    /**
     * unset listUserAgendaRequest.
     *
     * @param int|string $index
     */
    public function unsetListUserAgendaRequest($index): void
    {
        unset($this->listUserAgendaRequest[$index]);
    }

    /**
     * Gets as listUserAgendaRequest.
     *
     * @return \Pohoda\List\ListUserAgendaRequest[]
     */
    public function getListUserAgendaRequest()
    {
        return $this->listUserAgendaRequest;
    }

    /**
     * Sets a new listUserAgendaRequest.
     *
     * @param \Pohoda\List\ListUserAgendaRequest[] $listUserAgendaRequest
     *
     * @return self
     */
    public function setListUserAgendaRequest(array $listUserAgendaRequest)
    {
        $this->listUserAgendaRequest = $listUserAgendaRequest;

        return $this;
    }

    /**
     * Adds as advancePartFulfilment.
     *
     * @return self
     */
    public function addToAdvancePartFulfilment(\Pohoda\AdvancePartFulfilment\AdvancePartFulfilment $advancePartFulfilment)
    {
        $this->advancePartFulfilment[] = $advancePartFulfilment;

        return $this;
    }

    /**
     * isset advancePartFulfilment.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetAdvancePartFulfilment($index)
    {
        return isset($this->advancePartFulfilment[$index]);
    }

    /**
     * unset advancePartFulfilment.
     *
     * @param int|string $index
     */
    public function unsetAdvancePartFulfilment($index): void
    {
        unset($this->advancePartFulfilment[$index]);
    }

    /**
     * Gets as advancePartFulfilment.
     *
     * @return \Pohoda\AdvancePartFulfilment\AdvancePartFulfilment[]
     */
    public function getAdvancePartFulfilment()
    {
        return $this->advancePartFulfilment;
    }

    /**
     * Sets a new advancePartFulfilment.
     *
     * @param \Pohoda\AdvancePartFulfilment\AdvancePartFulfilment[] $advancePartFulfilment
     *
     * @return self
     */
    public function setAdvancePartFulfilment(array $advancePartFulfilment)
    {
        $this->advancePartFulfilment = $advancePartFulfilment;

        return $this;
    }
}
