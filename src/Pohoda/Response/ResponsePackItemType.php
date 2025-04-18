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

namespace Pohoda\Response;

/**
 * Class representing ResponsePackItemType.
 *
 * XSD Type: responsePackItemType
 */
class ResponsePackItemType
{
    private ?string $version = null;

    private ?string $id = null;

    private ?string $state = null;

    private ?string $note = null;

    /**
     * @var \Pohoda\AddressBook\AddressbookResponse[]
     */
    private array $addressbookResponse = [
    ];

    /**
     * @var \Pohoda\Invoice\InvoiceResponse[]
     */
    private array $invoiceResponse = [
    ];

    /**
     * @var \Pohoda\NumericalSeries\NumericalSeriesResponse[]
     */
    private array $numericalSeriesResponse = [
    ];

    /**
     * @var \Pohoda\Voucher\VoucherResponse[]
     */
    private array $voucherResponse = [
    ];

    /**
     * @var \Pohoda\IntDoc\IntDocResponse[]
     */
    private array $intDocResponse = [
    ];

    /**
     * @var \Pohoda\Vydejka\VydejkaResponse[]
     */
    private array $vydejkaResponse = [
    ];

    /**
     * @var \Pohoda\Prijemka\PrijemkaResponse[]
     */
    private array $prijemkaResponse = [
    ];

    /**
     * @var \Pohoda\Prodejka\ProdejkaResponse[]
     */
    private array $prodejkaResponse = [
    ];

    /**
     * @var \Pohoda\Stock\StockItemResponse[]
     */
    private array $stockItemResponse = [
    ];

    /**
     * @var \Pohoda\Order\OrderResponse[]
     */
    private array $orderResponse = [
    ];

    /**
     * @var \Pohoda\Enquiry\EnquiryResponse[]
     */
    private array $enquiryResponse = [
    ];

    /**
     * @var \Pohoda\Offer\OfferResponse[]
     */
    private array $offerResponse = [
    ];

    /**
     * @var \Pohoda\Vyroba\VyrobaResponse[]
     */
    private array $vyrobaResponse = [
    ];

    /**
     * @var \Pohoda\Prevodka\PrevodkaResponse[]
     */
    private array $prevodkaResponse = [
    ];

    /**
     * @var \Pohoda\Parameter\ParameterItemResponse[]
     */
    private array $parameterItemResponse = [
    ];

    /**
     * @var \Pohoda\Contract\ContractResponse[]
     */
    private array $contractResponse = [
    ];

    /**
     * @var \Pohoda\Storage\StorageResponse[]
     */
    private array $storageResponse = [
    ];

    /**
     * @var \Pohoda\IntParam\IntParamResponse[]
     */
    private array $intParamResponse = [
    ];

    /**
     * @var \Pohoda\IndividualPrice\IndividualPriceResponse[]
     */
    private array $individualPriceResponse = [
    ];

    /**
     * @var \Pohoda\Store\StoreResponse[]
     */
    private array $storeResponse = [
    ];

    /**
     * @var \Pohoda\GroupStocks\GroupStocksResponse[]
     */
    private array $groupStocksResponse = [
    ];

    /**
     * @var \Pohoda\Print\PrintResponse[]
     */
    private array $printResponse = [
    ];

    /**
     * @var \Pohoda\Lock\LockResponse[]
     */
    private array $lockResponse = [
    ];

    /**
     * @var \Pohoda\Isdoc\IsdocResponse[]
     */
    private array $isdocResponse = [
    ];

    /**
     * @var \Pohoda\SendEET\SendEETResponse[]
     */
    private array $sendEETResponse = [
    ];

    /**
     * @var \Pohoda\MKasa\MKasaResponse[]
     */
    private array $mKasaResponse = [
    ];

    /**
     * @var \Pohoda\InventoryLists\InventoryListsResponse[]
     */
    private array $inventoryListsResponse = [
    ];

    /**
     * @var \Pohoda\List\ListUserCodeResponse[]
     */
    private array $listUserCodeResponse = [
    ];

    /**
     * @var \Pohoda\Supplier\SupplierResponse[]
     */
    private array $supplierResponse = [
    ];

    /**
     * @var \Pohoda\Category\CategoryResponse[]
     */
    private array $categoryResponse = [
    ];

    /**
     * @var \Pohoda\Gdpr\GDPRResponse[]
     */
    private array $gDPRResponse = [
    ];

    /**
     * @var \Pohoda\AccountingSalesVouchers\AccountingSalesVouchersResponse[]
     */
    private array $accountingSalesVouchersResponse = [
    ];

    /**
     * @var \Pohoda\ProductRequirement\ProductRequirementResponse[]
     */
    private array $productRequirementResponse = [
    ];

    /**
     * @var \Pohoda\Bank\BankResponse[]
     */
    private array $bankResponse = [
    ];

    /**
     * @var \Pohoda\BankAccount\BankAccountResponse[]
     */
    private array $bankAccountResponse = [
    ];

    /**
     * @var \Pohoda\RulesPairing\RulesPairingResponse[]
     */
    private array $rulesPairingResponse = [
    ];

    /**
     * @var \Pohoda\LiquidationWithoutLink\LiquidationWithoutLinkResponse[]
     */
    private array $liquidationWithoutLinkResponse = [
    ];

    /**
     * @var \Pohoda\AdvancePartFulfilment\AdvancePartFulfilmentResponse[]
     */
    private array $advancePartFulfilmentResponse = [
    ];

    /**
     * @var \Pohoda\Discount\DiscountResponse[]
     */
    private array $discountResponse = [
    ];

    /**
     * @var \Pohoda\AutomaticLiquidationResponse[]
     */
    private array $automaticLiquidationResponse = [
    ];

    /**
     * @var \Pohoda\Service\ServiceResponse[]
     */
    private array $serviceResponse = [
    ];

    /**
     * @var \Pohoda\UserAgenda\UserAgendaResponse[]
     */
    private array $userAgendaResponse = [
    ];

    /**
     * @var \Pohoda\Activity\ActivityResponse[]
     */
    private array $activityResponse = [
    ];

    /**
     * @var \Pohoda\Centre\CentreResponse[]
     */
    private array $centreResponse = [
    ];

    /**
     * @var \Pohoda\ListCentre\ListCentre[]
     */
    private array $listCentre = [
    ];

    /**
     * @var \Pohoda\ListActivity\ListActivity[]
     */
    private array $listActivity = [
    ];

    /**
     * @var \Pohoda\ListContract\ListContract[]
     */
    private array $listContract = [
    ];

    /**
     * @var \Pohoda\List\ListCash[]
     */
    private array $listCash = [
    ];

    /**
     * @var \Pohoda\List\ListCashRegister[]
     */
    private array $listCashRegister = [
    ];

    /**
     * @var \Pohoda\List\ListBankAccount[]
     */
    private array $listBankAccount = [
    ];

    /**
     * @var \Pohoda\List\ListAccountingSingleEntry[]
     */
    private array $listAccountingSingleEntry = [
    ];

    /**
     * @var \Pohoda\List\ListAccountingDoubleEntry[]
     */
    private array $listAccountingDoubleEntry = [
    ];

    /**
     * @var \Pohoda\List\ListAccount[]
     */
    private array $listAccount = [
    ];

    /**
     * @var \Pohoda\List\ListStorage[]
     */
    private array $listStorage = [
    ];

    /**
     * @var \Pohoda\List\ListSellingPrice[]
     */
    private array $listSellingPrice = [
    ];

    /**
     * @var \Pohoda\List\ListNumericSeries[]
     */
    private array $listNumericSeries = [
    ];

    /**
     * @var \Pohoda\List\CreateAccountingDoubleEntryResponse[]
     */
    private array $createAccountingDoubleEntryResponse = [
    ];

    /**
     * @var \Pohoda\Accountingunit\ListAccountingUnit[]
     */
    private array $listAccountingUnit = [
    ];

    /**
     * @var \Pohoda\ListStock\ListStock[]
     */
    private array $listStock = [
    ];

    /**
     * @var \Pohoda\List\ListInvoice[]
     */
    private array $listInvoice = [
    ];

    /**
     * @var \Pohoda\ListAddBook\ListAddressBook[]
     */
    private array $listAddressBook = [
    ];

    /**
     * @var \Pohoda\List\ListOrder[]
     */
    private array $listOrder = [
    ];

    /**
     * @var \Pohoda\List\ListEnquiry[]
     */
    private array $listEnquiry = [
    ];

    /**
     * @var \Pohoda\List\ListOffer[]
     */
    private array $listOffer = [
    ];

    /**
     * @var \Pohoda\List\ListParameter[]
     */
    private array $listParameter = [
    ];

    /**
     * @var \Pohoda\List\ListUserCodePack[]
     */
    private array $listUserCodePack = [
    ];

    /**
     * @var \Pohoda\List\ListVydejka[]
     */
    private array $listVydejka = [
    ];

    /**
     * @var \Pohoda\List\ListPrijemka[]
     */
    private array $listPrijemka = [
    ];

    /**
     * @var \Pohoda\List\ListBalance[]
     */
    private array $listBalance = [
    ];

    /**
     * @var \Pohoda\List\ListCategory[]
     */
    private array $listCategory = [
    ];

    /**
     * @var \Pohoda\List\ListIntParam[]
     */
    private array $listIntParam = [
    ];

    /**
     * @var \Pohoda\List\ListIntDoc[]
     */
    private array $listIntDoc = [
    ];

    /**
     * @var \Pohoda\List\ListProdejka[]
     */
    private array $listProdejka = [
    ];

    /**
     * @var \Pohoda\List\ListVoucher[]
     */
    private array $listVoucher = [
    ];

    /**
     * @var \Pohoda\List\ListPrevodka[]
     */
    private array $listPrevodka = [
    ];

    /**
     * @var \Pohoda\List\ListVyroba[]
     */
    private array $listVyroba = [
    ];

    /**
     * @var \Pohoda\List\TaxDataResponse[]
     */
    private array $taxDataResponse = [
    ];

    /**
     * @var \Pohoda\List\ListIndividualPrice[]
     */
    private array $listIndividualPrice = [
    ];

    /**
     * @var \Pohoda\List\ListBank[]
     */
    private array $listBank = [
    ];

    /**
     * @var \Pohoda\List\ListAccountancy[]
     */
    private array $listAccountancy = [
    ];

    /**
     * @var \Pohoda\List\ListStore[]
     */
    private array $listStore = [
    ];

    /**
     * @var \Pohoda\List\ListSupplier[]
     */
    private array $listSupplier = [
    ];

    /**
     * @var \Pohoda\List\ListGroupStocks[]
     */
    private array $listGroupStocks = [
    ];

    /**
     * @var \Pohoda\List\ListActionPrice[]
     */
    private array $listActionPrice = [
    ];

    /**
     * @var \Pohoda\List\ListInventoryLists[]
     */
    private array $listInventoryLists = [
    ];

    /**
     * @var \Pohoda\List\ListPayment[]
     */
    private array $listPayment = [
    ];

    /**
     * @var \Pohoda\List\ListNumericalSeries[]
     */
    private array $listNumericalSeries = [
    ];

    /**
     * @var \Pohoda\List\ListGDPR[]
     */
    private array $listGDPR = [
    ];

    /**
     * @var \Pohoda\List\ListEstablishment[]
     */
    private array $listEstablishment = [
    ];

    /**
     * @var \Pohoda\List\ListAccountingFormOfPayment[]
     */
    private array $listAccountingFormOfPayment = [
    ];

    /**
     * @var \Pohoda\List\ListClassificationVAT[]
     */
    private array $listClassificationVAT = [
    ];

    /**
     * @var \Pohoda\List\ListGlobalSettings[]
     */
    private array $listGlobalSettings = [
    ];

    /**
     * @var \Pohoda\List\ListRegistrationNumber[]
     */
    private array $listRegistrationNumber = [
    ];

    /**
     * @var \Pohoda\List\ListProductRequirement[]
     */
    private array $listProductRequirement = [
    ];

    /**
     * @var \Pohoda\List\ListMovement[]
     */
    private array $listMovement = [
    ];

    /**
     * @var \Pohoda\List\ListRecyclingContrib[]
     */
    private array $listRecyclingContrib = [
    ];

    /**
     * @var \Pohoda\List\ListService[]
     */
    private array $listService = [
    ];

    /**
     * @var \Pohoda\List\ListRulesPairing[]
     */
    private array $listRulesPairing = [
    ];

    /**
     * @var \Pohoda\List\ListUserAgenda[]
     */
    private array $listUserAgenda = [
    ];

    /**
     * Zobrazení podrobností o chybě.
     *
     * @var \Pohoda\Response\RecordDuplicityType[]
     */
    private ?array $errorDetail = null;

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
     * Gets as state.
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets a new state.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Gets as note.
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note.
     *
     * @param string $note
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Adds as addressbookResponse.
     *
     * @return self
     */
    public function addToAddressbookResponse(\Pohoda\AddressBook\AddressbookResponse $addressbookResponse)
    {
        $this->addressbookResponse[] = $addressbookResponse;

        return $this;
    }

    /**
     * isset addressbookResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetAddressbookResponse($index)
    {
        return isset($this->addressbookResponse[$index]);
    }

    /**
     * unset addressbookResponse.
     *
     * @param int|string $index
     */
    public function unsetAddressbookResponse($index): void
    {
        unset($this->addressbookResponse[$index]);
    }

    /**
     * Gets as addressbookResponse.
     *
     * @return \Pohoda\AddressBook\AddressbookResponse[]
     */
    public function getAddressbookResponse()
    {
        return $this->addressbookResponse;
    }

    /**
     * Sets a new addressbookResponse.
     *
     * @param \Pohoda\AddressBook\AddressbookResponse[] $addressbookResponse
     *
     * @return self
     */
    public function setAddressbookResponse(?array $addressbookResponse = null)
    {
        $this->addressbookResponse = $addressbookResponse;

        return $this;
    }

    /**
     * Adds as invoiceResponse.
     *
     * @return self
     */
    public function addToInvoiceResponse(\Pohoda\Invoice\InvoiceResponse $invoiceResponse)
    {
        $this->invoiceResponse[] = $invoiceResponse;

        return $this;
    }

    /**
     * isset invoiceResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetInvoiceResponse($index)
    {
        return isset($this->invoiceResponse[$index]);
    }

    /**
     * unset invoiceResponse.
     *
     * @param int|string $index
     */
    public function unsetInvoiceResponse($index): void
    {
        unset($this->invoiceResponse[$index]);
    }

    /**
     * Gets as invoiceResponse.
     *
     * @return \Pohoda\Invoice\InvoiceResponse[]
     */
    public function getInvoiceResponse()
    {
        return $this->invoiceResponse;
    }

    /**
     * Sets a new invoiceResponse.
     *
     * @param \Pohoda\Invoice\InvoiceResponse[] $invoiceResponse
     *
     * @return self
     */
    public function setInvoiceResponse(?array $invoiceResponse = null)
    {
        $this->invoiceResponse = $invoiceResponse;

        return $this;
    }

    /**
     * Adds as numericalSeriesResponse.
     *
     * @return self
     */
    public function addToNumericalSeriesResponse(\Pohoda\NumericalSeries\NumericalSeriesResponse $numericalSeriesResponse)
    {
        $this->numericalSeriesResponse[] = $numericalSeriesResponse;

        return $this;
    }

    /**
     * isset numericalSeriesResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetNumericalSeriesResponse($index)
    {
        return isset($this->numericalSeriesResponse[$index]);
    }

    /**
     * unset numericalSeriesResponse.
     *
     * @param int|string $index
     */
    public function unsetNumericalSeriesResponse($index): void
    {
        unset($this->numericalSeriesResponse[$index]);
    }

    /**
     * Gets as numericalSeriesResponse.
     *
     * @return \Pohoda\NumericalSeries\NumericalSeriesResponse[]
     */
    public function getNumericalSeriesResponse()
    {
        return $this->numericalSeriesResponse;
    }

    /**
     * Sets a new numericalSeriesResponse.
     *
     * @param \Pohoda\NumericalSeries\NumericalSeriesResponse[] $numericalSeriesResponse
     *
     * @return self
     */
    public function setNumericalSeriesResponse(?array $numericalSeriesResponse = null)
    {
        $this->numericalSeriesResponse = $numericalSeriesResponse;

        return $this;
    }

    /**
     * Adds as voucherResponse.
     *
     * @return self
     */
    public function addToVoucherResponse(\Pohoda\Voucher\VoucherResponse $voucherResponse)
    {
        $this->voucherResponse[] = $voucherResponse;

        return $this;
    }

    /**
     * isset voucherResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetVoucherResponse($index)
    {
        return isset($this->voucherResponse[$index]);
    }

    /**
     * unset voucherResponse.
     *
     * @param int|string $index
     */
    public function unsetVoucherResponse($index): void
    {
        unset($this->voucherResponse[$index]);
    }

    /**
     * Gets as voucherResponse.
     *
     * @return \Pohoda\Voucher\VoucherResponse[]
     */
    public function getVoucherResponse()
    {
        return $this->voucherResponse;
    }

    /**
     * Sets a new voucherResponse.
     *
     * @param \Pohoda\Voucher\VoucherResponse[] $voucherResponse
     *
     * @return self
     */
    public function setVoucherResponse(?array $voucherResponse = null)
    {
        $this->voucherResponse = $voucherResponse;

        return $this;
    }

    /**
     * Adds as intDocResponse.
     *
     * @return self
     */
    public function addToIntDocResponse(\Pohoda\IntDoc\IntDocResponse $intDocResponse)
    {
        $this->intDocResponse[] = $intDocResponse;

        return $this;
    }

    /**
     * isset intDocResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetIntDocResponse($index)
    {
        return isset($this->intDocResponse[$index]);
    }

    /**
     * unset intDocResponse.
     *
     * @param int|string $index
     */
    public function unsetIntDocResponse($index): void
    {
        unset($this->intDocResponse[$index]);
    }

    /**
     * Gets as intDocResponse.
     *
     * @return \Pohoda\IntDoc\IntDocResponse[]
     */
    public function getIntDocResponse()
    {
        return $this->intDocResponse;
    }

    /**
     * Sets a new intDocResponse.
     *
     * @param \Pohoda\IntDoc\IntDocResponse[] $intDocResponse
     *
     * @return self
     */
    public function setIntDocResponse(?array $intDocResponse = null)
    {
        $this->intDocResponse = $intDocResponse;

        return $this;
    }

    /**
     * Adds as vydejkaResponse.
     *
     * @return self
     */
    public function addToVydejkaResponse(\Pohoda\Vydejka\VydejkaResponse $vydejkaResponse)
    {
        $this->vydejkaResponse[] = $vydejkaResponse;

        return $this;
    }

    /**
     * isset vydejkaResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetVydejkaResponse($index)
    {
        return isset($this->vydejkaResponse[$index]);
    }

    /**
     * unset vydejkaResponse.
     *
     * @param int|string $index
     */
    public function unsetVydejkaResponse($index): void
    {
        unset($this->vydejkaResponse[$index]);
    }

    /**
     * Gets as vydejkaResponse.
     *
     * @return \Pohoda\Vydejka\VydejkaResponse[]
     */
    public function getVydejkaResponse()
    {
        return $this->vydejkaResponse;
    }

    /**
     * Sets a new vydejkaResponse.
     *
     * @param \Pohoda\Vydejka\VydejkaResponse[] $vydejkaResponse
     *
     * @return self
     */
    public function setVydejkaResponse(?array $vydejkaResponse = null)
    {
        $this->vydejkaResponse = $vydejkaResponse;

        return $this;
    }

    /**
     * Adds as prijemkaResponse.
     *
     * @return self
     */
    public function addToPrijemkaResponse(\Pohoda\Prijemka\PrijemkaResponse $prijemkaResponse)
    {
        $this->prijemkaResponse[] = $prijemkaResponse;

        return $this;
    }

    /**
     * isset prijemkaResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPrijemkaResponse($index)
    {
        return isset($this->prijemkaResponse[$index]);
    }

    /**
     * unset prijemkaResponse.
     *
     * @param int|string $index
     */
    public function unsetPrijemkaResponse($index): void
    {
        unset($this->prijemkaResponse[$index]);
    }

    /**
     * Gets as prijemkaResponse.
     *
     * @return \Pohoda\Prijemka\PrijemkaResponse[]
     */
    public function getPrijemkaResponse()
    {
        return $this->prijemkaResponse;
    }

    /**
     * Sets a new prijemkaResponse.
     *
     * @param \Pohoda\Prijemka\PrijemkaResponse[] $prijemkaResponse
     *
     * @return self
     */
    public function setPrijemkaResponse(?array $prijemkaResponse = null)
    {
        $this->prijemkaResponse = $prijemkaResponse;

        return $this;
    }

    /**
     * Adds as prodejkaResponse.
     *
     * @return self
     */
    public function addToProdejkaResponse(\Pohoda\Prodejka\ProdejkaResponse $prodejkaResponse)
    {
        $this->prodejkaResponse[] = $prodejkaResponse;

        return $this;
    }

    /**
     * isset prodejkaResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetProdejkaResponse($index)
    {
        return isset($this->prodejkaResponse[$index]);
    }

    /**
     * unset prodejkaResponse.
     *
     * @param int|string $index
     */
    public function unsetProdejkaResponse($index): void
    {
        unset($this->prodejkaResponse[$index]);
    }

    /**
     * Gets as prodejkaResponse.
     *
     * @return \Pohoda\Prodejka\ProdejkaResponse[]
     */
    public function getProdejkaResponse()
    {
        return $this->prodejkaResponse;
    }

    /**
     * Sets a new prodejkaResponse.
     *
     * @param \Pohoda\Prodejka\ProdejkaResponse[] $prodejkaResponse
     *
     * @return self
     */
    public function setProdejkaResponse(?array $prodejkaResponse = null)
    {
        $this->prodejkaResponse = $prodejkaResponse;

        return $this;
    }

    /**
     * Adds as stockItemResponse.
     *
     * @return self
     */
    public function addToStockItemResponse(\Pohoda\Stock\StockItemResponse $stockItemResponse)
    {
        $this->stockItemResponse[] = $stockItemResponse;

        return $this;
    }

    /**
     * isset stockItemResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetStockItemResponse($index)
    {
        return isset($this->stockItemResponse[$index]);
    }

    /**
     * unset stockItemResponse.
     *
     * @param int|string $index
     */
    public function unsetStockItemResponse($index): void
    {
        unset($this->stockItemResponse[$index]);
    }

    /**
     * Gets as stockItemResponse.
     *
     * @return \Pohoda\Stock\StockItemResponse[]
     */
    public function getStockItemResponse()
    {
        return $this->stockItemResponse;
    }

    /**
     * Sets a new stockItemResponse.
     *
     * @param \Pohoda\Stock\StockItemResponse[] $stockItemResponse
     *
     * @return self
     */
    public function setStockItemResponse(?array $stockItemResponse = null)
    {
        $this->stockItemResponse = $stockItemResponse;

        return $this;
    }

    /**
     * Adds as orderResponse.
     *
     * @return self
     */
    public function addToOrderResponse(\Pohoda\Order\OrderResponse $orderResponse)
    {
        $this->orderResponse[] = $orderResponse;

        return $this;
    }

    /**
     * isset orderResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetOrderResponse($index)
    {
        return isset($this->orderResponse[$index]);
    }

    /**
     * unset orderResponse.
     *
     * @param int|string $index
     */
    public function unsetOrderResponse($index): void
    {
        unset($this->orderResponse[$index]);
    }

    /**
     * Gets as orderResponse.
     *
     * @return \Pohoda\Order\OrderResponse[]
     */
    public function getOrderResponse()
    {
        return $this->orderResponse;
    }

    /**
     * Sets a new orderResponse.
     *
     * @param \Pohoda\Order\OrderResponse[] $orderResponse
     *
     * @return self
     */
    public function setOrderResponse(?array $orderResponse = null)
    {
        $this->orderResponse = $orderResponse;

        return $this;
    }

    /**
     * Adds as enquiryResponse.
     *
     * @return self
     */
    public function addToEnquiryResponse(\Pohoda\Enquiry\EnquiryResponse $enquiryResponse)
    {
        $this->enquiryResponse[] = $enquiryResponse;

        return $this;
    }

    /**
     * isset enquiryResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetEnquiryResponse($index)
    {
        return isset($this->enquiryResponse[$index]);
    }

    /**
     * unset enquiryResponse.
     *
     * @param int|string $index
     */
    public function unsetEnquiryResponse($index): void
    {
        unset($this->enquiryResponse[$index]);
    }

    /**
     * Gets as enquiryResponse.
     *
     * @return \Pohoda\Enquiry\EnquiryResponse[]
     */
    public function getEnquiryResponse()
    {
        return $this->enquiryResponse;
    }

    /**
     * Sets a new enquiryResponse.
     *
     * @param \Pohoda\Enquiry\EnquiryResponse[] $enquiryResponse
     *
     * @return self
     */
    public function setEnquiryResponse(?array $enquiryResponse = null)
    {
        $this->enquiryResponse = $enquiryResponse;

        return $this;
    }

    /**
     * Adds as offerResponse.
     *
     * @return self
     */
    public function addToOfferResponse(\Pohoda\Offer\OfferResponse $offerResponse)
    {
        $this->offerResponse[] = $offerResponse;

        return $this;
    }

    /**
     * isset offerResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetOfferResponse($index)
    {
        return isset($this->offerResponse[$index]);
    }

    /**
     * unset offerResponse.
     *
     * @param int|string $index
     */
    public function unsetOfferResponse($index): void
    {
        unset($this->offerResponse[$index]);
    }

    /**
     * Gets as offerResponse.
     *
     * @return \Pohoda\Offer\OfferResponse[]
     */
    public function getOfferResponse()
    {
        return $this->offerResponse;
    }

    /**
     * Sets a new offerResponse.
     *
     * @param \Pohoda\Offer\OfferResponse[] $offerResponse
     *
     * @return self
     */
    public function setOfferResponse(?array $offerResponse = null)
    {
        $this->offerResponse = $offerResponse;

        return $this;
    }

    /**
     * Adds as vyrobaResponse.
     *
     * @return self
     */
    public function addToVyrobaResponse(\Pohoda\Vyroba\VyrobaResponse $vyrobaResponse)
    {
        $this->vyrobaResponse[] = $vyrobaResponse;

        return $this;
    }

    /**
     * isset vyrobaResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetVyrobaResponse($index)
    {
        return isset($this->vyrobaResponse[$index]);
    }

    /**
     * unset vyrobaResponse.
     *
     * @param int|string $index
     */
    public function unsetVyrobaResponse($index): void
    {
        unset($this->vyrobaResponse[$index]);
    }

    /**
     * Gets as vyrobaResponse.
     *
     * @return \Pohoda\Vyroba\VyrobaResponse[]
     */
    public function getVyrobaResponse()
    {
        return $this->vyrobaResponse;
    }

    /**
     * Sets a new vyrobaResponse.
     *
     * @param \Pohoda\Vyroba\VyrobaResponse[] $vyrobaResponse
     *
     * @return self
     */
    public function setVyrobaResponse(?array $vyrobaResponse = null)
    {
        $this->vyrobaResponse = $vyrobaResponse;

        return $this;
    }

    /**
     * Adds as prevodkaResponse.
     *
     * @return self
     */
    public function addToPrevodkaResponse(\Pohoda\Prevodka\PrevodkaResponse $prevodkaResponse)
    {
        $this->prevodkaResponse[] = $prevodkaResponse;

        return $this;
    }

    /**
     * isset prevodkaResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPrevodkaResponse($index)
    {
        return isset($this->prevodkaResponse[$index]);
    }

    /**
     * unset prevodkaResponse.
     *
     * @param int|string $index
     */
    public function unsetPrevodkaResponse($index): void
    {
        unset($this->prevodkaResponse[$index]);
    }

    /**
     * Gets as prevodkaResponse.
     *
     * @return \Pohoda\Prevodka\PrevodkaResponse[]
     */
    public function getPrevodkaResponse()
    {
        return $this->prevodkaResponse;
    }

    /**
     * Sets a new prevodkaResponse.
     *
     * @param \Pohoda\Prevodka\PrevodkaResponse[] $prevodkaResponse
     *
     * @return self
     */
    public function setPrevodkaResponse(?array $prevodkaResponse = null)
    {
        $this->prevodkaResponse = $prevodkaResponse;

        return $this;
    }

    /**
     * Adds as parameterItemResponse.
     *
     * @return self
     */
    public function addToParameterItemResponse(\Pohoda\Parameter\ParameterItemResponse $parameterItemResponse)
    {
        $this->parameterItemResponse[] = $parameterItemResponse;

        return $this;
    }

    /**
     * isset parameterItemResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetParameterItemResponse($index)
    {
        return isset($this->parameterItemResponse[$index]);
    }

    /**
     * unset parameterItemResponse.
     *
     * @param int|string $index
     */
    public function unsetParameterItemResponse($index): void
    {
        unset($this->parameterItemResponse[$index]);
    }

    /**
     * Gets as parameterItemResponse.
     *
     * @return \Pohoda\Parameter\ParameterItemResponse[]
     */
    public function getParameterItemResponse()
    {
        return $this->parameterItemResponse;
    }

    /**
     * Sets a new parameterItemResponse.
     *
     * @param \Pohoda\Parameter\ParameterItemResponse[] $parameterItemResponse
     *
     * @return self
     */
    public function setParameterItemResponse(?array $parameterItemResponse = null)
    {
        $this->parameterItemResponse = $parameterItemResponse;

        return $this;
    }

    /**
     * Adds as contractResponse.
     *
     * @return self
     */
    public function addToContractResponse(\Pohoda\Contract\ContractResponse $contractResponse)
    {
        $this->contractResponse[] = $contractResponse;

        return $this;
    }

    /**
     * isset contractResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetContractResponse($index)
    {
        return isset($this->contractResponse[$index]);
    }

    /**
     * unset contractResponse.
     *
     * @param int|string $index
     */
    public function unsetContractResponse($index): void
    {
        unset($this->contractResponse[$index]);
    }

    /**
     * Gets as contractResponse.
     *
     * @return \Pohoda\Contract\ContractResponse[]
     */
    public function getContractResponse()
    {
        return $this->contractResponse;
    }

    /**
     * Sets a new contractResponse.
     *
     * @param \Pohoda\Contract\ContractResponse[] $contractResponse
     *
     * @return self
     */
    public function setContractResponse(?array $contractResponse = null)
    {
        $this->contractResponse = $contractResponse;

        return $this;
    }

    /**
     * Adds as storageResponse.
     *
     * @return self
     */
    public function addToStorageResponse(\Pohoda\Storage\StorageResponse $storageResponse)
    {
        $this->storageResponse[] = $storageResponse;

        return $this;
    }

    /**
     * isset storageResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetStorageResponse($index)
    {
        return isset($this->storageResponse[$index]);
    }

    /**
     * unset storageResponse.
     *
     * @param int|string $index
     */
    public function unsetStorageResponse($index): void
    {
        unset($this->storageResponse[$index]);
    }

    /**
     * Gets as storageResponse.
     *
     * @return \Pohoda\Storage\StorageResponse[]
     */
    public function getStorageResponse()
    {
        return $this->storageResponse;
    }

    /**
     * Sets a new storageResponse.
     *
     * @param \Pohoda\Storage\StorageResponse[] $storageResponse
     *
     * @return self
     */
    public function setStorageResponse(?array $storageResponse = null)
    {
        $this->storageResponse = $storageResponse;

        return $this;
    }

    /**
     * Adds as intParamResponse.
     *
     * @return self
     */
    public function addToIntParamResponse(\Pohoda\IntParam\IntParamResponse $intParamResponse)
    {
        $this->intParamResponse[] = $intParamResponse;

        return $this;
    }

    /**
     * isset intParamResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetIntParamResponse($index)
    {
        return isset($this->intParamResponse[$index]);
    }

    /**
     * unset intParamResponse.
     *
     * @param int|string $index
     */
    public function unsetIntParamResponse($index): void
    {
        unset($this->intParamResponse[$index]);
    }

    /**
     * Gets as intParamResponse.
     *
     * @return \Pohoda\IntParam\IntParamResponse[]
     */
    public function getIntParamResponse()
    {
        return $this->intParamResponse;
    }

    /**
     * Sets a new intParamResponse.
     *
     * @param \Pohoda\IntParam\IntParamResponse[] $intParamResponse
     *
     * @return self
     */
    public function setIntParamResponse(?array $intParamResponse = null)
    {
        $this->intParamResponse = $intParamResponse;

        return $this;
    }

    /**
     * Adds as individualPriceResponse.
     *
     * @return self
     */
    public function addToIndividualPriceResponse(\Pohoda\IndividualPrice\IndividualPriceResponse $individualPriceResponse)
    {
        $this->individualPriceResponse[] = $individualPriceResponse;

        return $this;
    }

    /**
     * isset individualPriceResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetIndividualPriceResponse($index)
    {
        return isset($this->individualPriceResponse[$index]);
    }

    /**
     * unset individualPriceResponse.
     *
     * @param int|string $index
     */
    public function unsetIndividualPriceResponse($index): void
    {
        unset($this->individualPriceResponse[$index]);
    }

    /**
     * Gets as individualPriceResponse.
     *
     * @return \Pohoda\IndividualPrice\IndividualPriceResponse[]
     */
    public function getIndividualPriceResponse()
    {
        return $this->individualPriceResponse;
    }

    /**
     * Sets a new individualPriceResponse.
     *
     * @param \Pohoda\IndividualPrice\IndividualPriceResponse[] $individualPriceResponse
     *
     * @return self
     */
    public function setIndividualPriceResponse(?array $individualPriceResponse = null)
    {
        $this->individualPriceResponse = $individualPriceResponse;

        return $this;
    }

    /**
     * Adds as storeResponse.
     *
     * @return self
     */
    public function addToStoreResponse(\Pohoda\Store\StoreResponse $storeResponse)
    {
        $this->storeResponse[] = $storeResponse;

        return $this;
    }

    /**
     * isset storeResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetStoreResponse($index)
    {
        return isset($this->storeResponse[$index]);
    }

    /**
     * unset storeResponse.
     *
     * @param int|string $index
     */
    public function unsetStoreResponse($index): void
    {
        unset($this->storeResponse[$index]);
    }

    /**
     * Gets as storeResponse.
     *
     * @return \Pohoda\Store\StoreResponse[]
     */
    public function getStoreResponse()
    {
        return $this->storeResponse;
    }

    /**
     * Sets a new storeResponse.
     *
     * @param \Pohoda\Store\StoreResponse[] $storeResponse
     *
     * @return self
     */
    public function setStoreResponse(?array $storeResponse = null)
    {
        $this->storeResponse = $storeResponse;

        return $this;
    }

    /**
     * Adds as groupStocksResponse.
     *
     * @return self
     */
    public function addToGroupStocksResponse(\Pohoda\GroupStocks\GroupStocksResponse $groupStocksResponse)
    {
        $this->groupStocksResponse[] = $groupStocksResponse;

        return $this;
    }

    /**
     * isset groupStocksResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetGroupStocksResponse($index)
    {
        return isset($this->groupStocksResponse[$index]);
    }

    /**
     * unset groupStocksResponse.
     *
     * @param int|string $index
     */
    public function unsetGroupStocksResponse($index): void
    {
        unset($this->groupStocksResponse[$index]);
    }

    /**
     * Gets as groupStocksResponse.
     *
     * @return \Pohoda\GroupStocks\GroupStocksResponse[]
     */
    public function getGroupStocksResponse()
    {
        return $this->groupStocksResponse;
    }

    /**
     * Sets a new groupStocksResponse.
     *
     * @param \Pohoda\GroupStocks\GroupStocksResponse[] $groupStocksResponse
     *
     * @return self
     */
    public function setGroupStocksResponse(?array $groupStocksResponse = null)
    {
        $this->groupStocksResponse = $groupStocksResponse;

        return $this;
    }

    /**
     * Adds as printResponse.
     *
     * @return self
     */
    public function addToPrintResponse(\Pohoda\Print\PrintResponse $printResponse)
    {
        $this->printResponse[] = $printResponse;

        return $this;
    }

    /**
     * isset printResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPrintResponse($index)
    {
        return isset($this->printResponse[$index]);
    }

    /**
     * unset printResponse.
     *
     * @param int|string $index
     */
    public function unsetPrintResponse($index): void
    {
        unset($this->printResponse[$index]);
    }

    /**
     * Gets as printResponse.
     *
     * @return \Pohoda\Print\PrintResponse[]
     */
    public function getPrintResponse()
    {
        return $this->printResponse;
    }

    /**
     * Sets a new printResponse.
     *
     * @param \Pohoda\Print\PrintResponse[] $printResponse
     *
     * @return self
     */
    public function setPrintResponse(?array $printResponse = null)
    {
        $this->printResponse = $printResponse;

        return $this;
    }

    /**
     * Adds as lockResponse.
     *
     * @return self
     */
    public function addToLockResponse(\Pohoda\Lock\LockResponse $lockResponse)
    {
        $this->lockResponse[] = $lockResponse;

        return $this;
    }

    /**
     * isset lockResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetLockResponse($index)
    {
        return isset($this->lockResponse[$index]);
    }

    /**
     * unset lockResponse.
     *
     * @param int|string $index
     */
    public function unsetLockResponse($index): void
    {
        unset($this->lockResponse[$index]);
    }

    /**
     * Gets as lockResponse.
     *
     * @return \Pohoda\Lock\LockResponse[]
     */
    public function getLockResponse()
    {
        return $this->lockResponse;
    }

    /**
     * Sets a new lockResponse.
     *
     * @param \Pohoda\Lock\LockResponse[] $lockResponse
     *
     * @return self
     */
    public function setLockResponse(?array $lockResponse = null)
    {
        $this->lockResponse = $lockResponse;

        return $this;
    }

    /**
     * Adds as isdocResponse.
     *
     * @return self
     */
    public function addToIsdocResponse(\Pohoda\Isdoc\IsdocResponse $isdocResponse)
    {
        $this->isdocResponse[] = $isdocResponse;

        return $this;
    }

    /**
     * isset isdocResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetIsdocResponse($index)
    {
        return isset($this->isdocResponse[$index]);
    }

    /**
     * unset isdocResponse.
     *
     * @param int|string $index
     */
    public function unsetIsdocResponse($index): void
    {
        unset($this->isdocResponse[$index]);
    }

    /**
     * Gets as isdocResponse.
     *
     * @return \Pohoda\Isdoc\IsdocResponse[]
     */
    public function getIsdocResponse()
    {
        return $this->isdocResponse;
    }

    /**
     * Sets a new isdocResponse.
     *
     * @param \Pohoda\Isdoc\IsdocResponse[] $isdocResponse
     *
     * @return self
     */
    public function setIsdocResponse(?array $isdocResponse = null)
    {
        $this->isdocResponse = $isdocResponse;

        return $this;
    }

    /**
     * Adds as sendEETResponse.
     *
     * @return self
     */
    public function addToSendEETResponse(\Pohoda\SendEET\SendEETResponse $sendEETResponse)
    {
        $this->sendEETResponse[] = $sendEETResponse;

        return $this;
    }

    /**
     * isset sendEETResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetSendEETResponse($index)
    {
        return isset($this->sendEETResponse[$index]);
    }

    /**
     * unset sendEETResponse.
     *
     * @param int|string $index
     */
    public function unsetSendEETResponse($index): void
    {
        unset($this->sendEETResponse[$index]);
    }

    /**
     * Gets as sendEETResponse.
     *
     * @return \Pohoda\SendEET\SendEETResponse[]
     */
    public function getSendEETResponse()
    {
        return $this->sendEETResponse;
    }

    /**
     * Sets a new sendEETResponse.
     *
     * @param \Pohoda\SendEET\SendEETResponse[] $sendEETResponse
     *
     * @return self
     */
    public function setSendEETResponse(?array $sendEETResponse = null)
    {
        $this->sendEETResponse = $sendEETResponse;

        return $this;
    }

    /**
     * Adds as mKasaResponse.
     *
     * @return self
     */
    public function addToMKasaResponse(\Pohoda\MKasa\MKasaResponse $mKasaResponse)
    {
        $this->mKasaResponse[] = $mKasaResponse;

        return $this;
    }

    /**
     * isset mKasaResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetMKasaResponse($index)
    {
        return isset($this->mKasaResponse[$index]);
    }

    /**
     * unset mKasaResponse.
     *
     * @param int|string $index
     */
    public function unsetMKasaResponse($index): void
    {
        unset($this->mKasaResponse[$index]);
    }

    /**
     * Gets as mKasaResponse.
     *
     * @return \Pohoda\MKasa\MKasaResponse[]
     */
    public function getMKasaResponse()
    {
        return $this->mKasaResponse;
    }

    /**
     * Sets a new mKasaResponse.
     *
     * @param \Pohoda\MKasa\MKasaResponse[] $mKasaResponse
     *
     * @return self
     */
    public function setMKasaResponse(?array $mKasaResponse = null)
    {
        $this->mKasaResponse = $mKasaResponse;

        return $this;
    }

    /**
     * Adds as inventoryListsResponse.
     *
     * @return self
     */
    public function addToInventoryListsResponse(\Pohoda\InventoryLists\InventoryListsResponse $inventoryListsResponse)
    {
        $this->inventoryListsResponse[] = $inventoryListsResponse;

        return $this;
    }

    /**
     * isset inventoryListsResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetInventoryListsResponse($index)
    {
        return isset($this->inventoryListsResponse[$index]);
    }

    /**
     * unset inventoryListsResponse.
     *
     * @param int|string $index
     */
    public function unsetInventoryListsResponse($index): void
    {
        unset($this->inventoryListsResponse[$index]);
    }

    /**
     * Gets as inventoryListsResponse.
     *
     * @return \Pohoda\InventoryLists\InventoryListsResponse[]
     */
    public function getInventoryListsResponse()
    {
        return $this->inventoryListsResponse;
    }

    /**
     * Sets a new inventoryListsResponse.
     *
     * @param \Pohoda\InventoryLists\InventoryListsResponse[] $inventoryListsResponse
     *
     * @return self
     */
    public function setInventoryListsResponse(?array $inventoryListsResponse = null)
    {
        $this->inventoryListsResponse = $inventoryListsResponse;

        return $this;
    }

    /**
     * Adds as listUserCodeResponse.
     *
     * @return self
     */
    public function addToListUserCodeResponse(\Pohoda\List\ListUserCodeResponse $listUserCodeResponse)
    {
        $this->listUserCodeResponse[] = $listUserCodeResponse;

        return $this;
    }

    /**
     * isset listUserCodeResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListUserCodeResponse($index)
    {
        return isset($this->listUserCodeResponse[$index]);
    }

    /**
     * unset listUserCodeResponse.
     *
     * @param int|string $index
     */
    public function unsetListUserCodeResponse($index): void
    {
        unset($this->listUserCodeResponse[$index]);
    }

    /**
     * Gets as listUserCodeResponse.
     *
     * @return \Pohoda\List\ListUserCodeResponse[]
     */
    public function getListUserCodeResponse()
    {
        return $this->listUserCodeResponse;
    }

    /**
     * Sets a new listUserCodeResponse.
     *
     * @param \Pohoda\List\ListUserCodeResponse[] $listUserCodeResponse
     *
     * @return self
     */
    public function setListUserCodeResponse(?array $listUserCodeResponse = null)
    {
        $this->listUserCodeResponse = $listUserCodeResponse;

        return $this;
    }

    /**
     * Adds as supplierResponse.
     *
     * @return self
     */
    public function addToSupplierResponse(\Pohoda\Supplier\SupplierResponse $supplierResponse)
    {
        $this->supplierResponse[] = $supplierResponse;

        return $this;
    }

    /**
     * isset supplierResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetSupplierResponse($index)
    {
        return isset($this->supplierResponse[$index]);
    }

    /**
     * unset supplierResponse.
     *
     * @param int|string $index
     */
    public function unsetSupplierResponse($index): void
    {
        unset($this->supplierResponse[$index]);
    }

    /**
     * Gets as supplierResponse.
     *
     * @return \Pohoda\Supplier\SupplierResponse[]
     */
    public function getSupplierResponse()
    {
        return $this->supplierResponse;
    }

    /**
     * Sets a new supplierResponse.
     *
     * @param \Pohoda\Supplier\SupplierResponse[] $supplierResponse
     *
     * @return self
     */
    public function setSupplierResponse(?array $supplierResponse = null)
    {
        $this->supplierResponse = $supplierResponse;

        return $this;
    }

    /**
     * Adds as categoryResponse.
     *
     * @return self
     */
    public function addToCategoryResponse(\Pohoda\Category\CategoryResponse $categoryResponse)
    {
        $this->categoryResponse[] = $categoryResponse;

        return $this;
    }

    /**
     * isset categoryResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetCategoryResponse($index)
    {
        return isset($this->categoryResponse[$index]);
    }

    /**
     * unset categoryResponse.
     *
     * @param int|string $index
     */
    public function unsetCategoryResponse($index): void
    {
        unset($this->categoryResponse[$index]);
    }

    /**
     * Gets as categoryResponse.
     *
     * @return \Pohoda\Category\CategoryResponse[]
     */
    public function getCategoryResponse()
    {
        return $this->categoryResponse;
    }

    /**
     * Sets a new categoryResponse.
     *
     * @param \Pohoda\Category\CategoryResponse[] $categoryResponse
     *
     * @return self
     */
    public function setCategoryResponse(?array $categoryResponse = null)
    {
        $this->categoryResponse = $categoryResponse;

        return $this;
    }

    /**
     * Adds as gDPRResponse.
     *
     * @return self
     */
    public function addToGDPRResponse(\Pohoda\Gdpr\GDPRResponse $gDPRResponse)
    {
        $this->gDPRResponse[] = $gDPRResponse;

        return $this;
    }

    /**
     * isset gDPRResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetGDPRResponse($index)
    {
        return isset($this->gDPRResponse[$index]);
    }

    /**
     * unset gDPRResponse.
     *
     * @param int|string $index
     */
    public function unsetGDPRResponse($index): void
    {
        unset($this->gDPRResponse[$index]);
    }

    /**
     * Gets as gDPRResponse.
     *
     * @return \Pohoda\Gdpr\GDPRResponse[]
     */
    public function getGDPRResponse()
    {
        return $this->gDPRResponse;
    }

    /**
     * Sets a new gDPRResponse.
     *
     * @param \Pohoda\Gdpr\GDPRResponse[] $gDPRResponse
     *
     * @return self
     */
    public function setGDPRResponse(?array $gDPRResponse = null)
    {
        $this->gDPRResponse = $gDPRResponse;

        return $this;
    }

    /**
     * Adds as accountingSalesVouchersResponse.
     *
     * @return self
     */
    public function addToAccountingSalesVouchersResponse(\Pohoda\AccountingSalesVouchers\AccountingSalesVouchersResponse $accountingSalesVouchersResponse)
    {
        $this->accountingSalesVouchersResponse[] = $accountingSalesVouchersResponse;

        return $this;
    }

    /**
     * isset accountingSalesVouchersResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetAccountingSalesVouchersResponse($index)
    {
        return isset($this->accountingSalesVouchersResponse[$index]);
    }

    /**
     * unset accountingSalesVouchersResponse.
     *
     * @param int|string $index
     */
    public function unsetAccountingSalesVouchersResponse($index): void
    {
        unset($this->accountingSalesVouchersResponse[$index]);
    }

    /**
     * Gets as accountingSalesVouchersResponse.
     *
     * @return \Pohoda\AccountingSalesVouchers\AccountingSalesVouchersResponse[]
     */
    public function getAccountingSalesVouchersResponse()
    {
        return $this->accountingSalesVouchersResponse;
    }

    /**
     * Sets a new accountingSalesVouchersResponse.
     *
     * @param \Pohoda\AccountingSalesVouchers\AccountingSalesVouchersResponse[] $accountingSalesVouchersResponse
     *
     * @return self
     */
    public function setAccountingSalesVouchersResponse(?array $accountingSalesVouchersResponse = null)
    {
        $this->accountingSalesVouchersResponse = $accountingSalesVouchersResponse;

        return $this;
    }

    /**
     * Adds as productRequirementResponse.
     *
     * @return self
     */
    public function addToProductRequirementResponse(\Pohoda\ProductRequirement\ProductRequirementResponse $productRequirementResponse)
    {
        $this->productRequirementResponse[] = $productRequirementResponse;

        return $this;
    }

    /**
     * isset productRequirementResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetProductRequirementResponse($index)
    {
        return isset($this->productRequirementResponse[$index]);
    }

    /**
     * unset productRequirementResponse.
     *
     * @param int|string $index
     */
    public function unsetProductRequirementResponse($index): void
    {
        unset($this->productRequirementResponse[$index]);
    }

    /**
     * Gets as productRequirementResponse.
     *
     * @return \Pohoda\ProductRequirement\ProductRequirementResponse[]
     */
    public function getProductRequirementResponse()
    {
        return $this->productRequirementResponse;
    }

    /**
     * Sets a new productRequirementResponse.
     *
     * @param \Pohoda\ProductRequirement\ProductRequirementResponse[] $productRequirementResponse
     *
     * @return self
     */
    public function setProductRequirementResponse(?array $productRequirementResponse = null)
    {
        $this->productRequirementResponse = $productRequirementResponse;

        return $this;
    }

    /**
     * Adds as bankResponse.
     *
     * @return self
     */
    public function addToBankResponse(\Pohoda\Bank\BankResponse $bankResponse)
    {
        $this->bankResponse[] = $bankResponse;

        return $this;
    }

    /**
     * isset bankResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetBankResponse($index)
    {
        return isset($this->bankResponse[$index]);
    }

    /**
     * unset bankResponse.
     *
     * @param int|string $index
     */
    public function unsetBankResponse($index): void
    {
        unset($this->bankResponse[$index]);
    }

    /**
     * Gets as bankResponse.
     *
     * @return \Pohoda\Bank\BankResponse[]
     */
    public function getBankResponse()
    {
        return $this->bankResponse;
    }

    /**
     * Sets a new bankResponse.
     *
     * @param \Pohoda\Bank\BankResponse[] $bankResponse
     *
     * @return self
     */
    public function setBankResponse(?array $bankResponse = null)
    {
        $this->bankResponse = $bankResponse;

        return $this;
    }

    /**
     * Adds as bankAccountResponse.
     *
     * @return self
     */
    public function addToBankAccountResponse(\Pohoda\BankAccount\BankAccountResponse $bankAccountResponse)
    {
        $this->bankAccountResponse[] = $bankAccountResponse;

        return $this;
    }

    /**
     * isset bankAccountResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetBankAccountResponse($index)
    {
        return isset($this->bankAccountResponse[$index]);
    }

    /**
     * unset bankAccountResponse.
     *
     * @param int|string $index
     */
    public function unsetBankAccountResponse($index): void
    {
        unset($this->bankAccountResponse[$index]);
    }

    /**
     * Gets as bankAccountResponse.
     *
     * @return \Pohoda\BankAccount\BankAccountResponse[]
     */
    public function getBankAccountResponse()
    {
        return $this->bankAccountResponse;
    }

    /**
     * Sets a new bankAccountResponse.
     *
     * @param \Pohoda\BankAccount\BankAccountResponse[] $bankAccountResponse
     *
     * @return self
     */
    public function setBankAccountResponse(?array $bankAccountResponse = null)
    {
        $this->bankAccountResponse = $bankAccountResponse;

        return $this;
    }

    /**
     * Adds as rulesPairingResponse.
     *
     * @return self
     */
    public function addToRulesPairingResponse(\Pohoda\RulesPairing\RulesPairingResponse $rulesPairingResponse)
    {
        $this->rulesPairingResponse[] = $rulesPairingResponse;

        return $this;
    }

    /**
     * isset rulesPairingResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRulesPairingResponse($index)
    {
        return isset($this->rulesPairingResponse[$index]);
    }

    /**
     * unset rulesPairingResponse.
     *
     * @param int|string $index
     */
    public function unsetRulesPairingResponse($index): void
    {
        unset($this->rulesPairingResponse[$index]);
    }

    /**
     * Gets as rulesPairingResponse.
     *
     * @return \Pohoda\RulesPairing\RulesPairingResponse[]
     */
    public function getRulesPairingResponse()
    {
        return $this->rulesPairingResponse;
    }

    /**
     * Sets a new rulesPairingResponse.
     *
     * @param \Pohoda\RulesPairing\RulesPairingResponse[] $rulesPairingResponse
     *
     * @return self
     */
    public function setRulesPairingResponse(?array $rulesPairingResponse = null)
    {
        $this->rulesPairingResponse = $rulesPairingResponse;

        return $this;
    }

    /**
     * Adds as liquidationWithoutLinkResponse.
     *
     * @return self
     */
    public function addToLiquidationWithoutLinkResponse(\Pohoda\LiquidationWithoutLink\LiquidationWithoutLinkResponse $liquidationWithoutLinkResponse)
    {
        $this->liquidationWithoutLinkResponse[] = $liquidationWithoutLinkResponse;

        return $this;
    }

    /**
     * isset liquidationWithoutLinkResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetLiquidationWithoutLinkResponse($index)
    {
        return isset($this->liquidationWithoutLinkResponse[$index]);
    }

    /**
     * unset liquidationWithoutLinkResponse.
     *
     * @param int|string $index
     */
    public function unsetLiquidationWithoutLinkResponse($index): void
    {
        unset($this->liquidationWithoutLinkResponse[$index]);
    }

    /**
     * Gets as liquidationWithoutLinkResponse.
     *
     * @return \Pohoda\LiquidationWithoutLink\LiquidationWithoutLinkResponse[]
     */
    public function getLiquidationWithoutLinkResponse()
    {
        return $this->liquidationWithoutLinkResponse;
    }

    /**
     * Sets a new liquidationWithoutLinkResponse.
     *
     * @param \Pohoda\LiquidationWithoutLink\LiquidationWithoutLinkResponse[] $liquidationWithoutLinkResponse
     *
     * @return self
     */
    public function setLiquidationWithoutLinkResponse(?array $liquidationWithoutLinkResponse = null)
    {
        $this->liquidationWithoutLinkResponse = $liquidationWithoutLinkResponse;

        return $this;
    }

    /**
     * Adds as advancePartFulfilmentResponse.
     *
     * @return self
     */
    public function addToAdvancePartFulfilmentResponse(\Pohoda\AdvancePartFulfilment\AdvancePartFulfilmentResponse $advancePartFulfilmentResponse)
    {
        $this->advancePartFulfilmentResponse[] = $advancePartFulfilmentResponse;

        return $this;
    }

    /**
     * isset advancePartFulfilmentResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetAdvancePartFulfilmentResponse($index)
    {
        return isset($this->advancePartFulfilmentResponse[$index]);
    }

    /**
     * unset advancePartFulfilmentResponse.
     *
     * @param int|string $index
     */
    public function unsetAdvancePartFulfilmentResponse($index): void
    {
        unset($this->advancePartFulfilmentResponse[$index]);
    }

    /**
     * Gets as advancePartFulfilmentResponse.
     *
     * @return \Pohoda\AdvancePartFulfilment\AdvancePartFulfilmentResponse[]
     */
    public function getAdvancePartFulfilmentResponse()
    {
        return $this->advancePartFulfilmentResponse;
    }

    /**
     * Sets a new advancePartFulfilmentResponse.
     *
     * @param \Pohoda\AdvancePartFulfilment\AdvancePartFulfilmentResponse[] $advancePartFulfilmentResponse
     *
     * @return self
     */
    public function setAdvancePartFulfilmentResponse(?array $advancePartFulfilmentResponse = null)
    {
        $this->advancePartFulfilmentResponse = $advancePartFulfilmentResponse;

        return $this;
    }

    /**
     * Adds as discountResponse.
     *
     * @return self
     */
    public function addToDiscountResponse(\Pohoda\Discount\DiscountResponse $discountResponse)
    {
        $this->discountResponse[] = $discountResponse;

        return $this;
    }

    /**
     * isset discountResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetDiscountResponse($index)
    {
        return isset($this->discountResponse[$index]);
    }

    /**
     * unset discountResponse.
     *
     * @param int|string $index
     */
    public function unsetDiscountResponse($index): void
    {
        unset($this->discountResponse[$index]);
    }

    /**
     * Gets as discountResponse.
     *
     * @return \Pohoda\Discount\DiscountResponse[]
     */
    public function getDiscountResponse()
    {
        return $this->discountResponse;
    }

    /**
     * Sets a new discountResponse.
     *
     * @param \Pohoda\Discount\DiscountResponse[] $discountResponse
     *
     * @return self
     */
    public function setDiscountResponse(?array $discountResponse = null)
    {
        $this->discountResponse = $discountResponse;

        return $this;
    }

    /**
     * Adds as automaticLiquidationResponse.
     *
     * @return self
     */
    public function addToAutomaticLiquidationResponse(\Pohoda\AutomaticLiquidationResponse $automaticLiquidationResponse)
    {
        $this->automaticLiquidationResponse[] = $automaticLiquidationResponse;

        return $this;
    }

    /**
     * isset automaticLiquidationResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetAutomaticLiquidationResponse($index)
    {
        return isset($this->automaticLiquidationResponse[$index]);
    }

    /**
     * unset automaticLiquidationResponse.
     *
     * @param int|string $index
     */
    public function unsetAutomaticLiquidationResponse($index): void
    {
        unset($this->automaticLiquidationResponse[$index]);
    }

    /**
     * Gets as automaticLiquidationResponse.
     *
     * @return \Pohoda\AutomaticLiquidationResponse[]
     */
    public function getAutomaticLiquidationResponse()
    {
        return $this->automaticLiquidationResponse;
    }

    /**
     * Sets a new automaticLiquidationResponse.
     *
     * @param \Pohoda\AutomaticLiquidationResponse[] $automaticLiquidationResponse
     *
     * @return self
     */
    public function setAutomaticLiquidationResponse(?array $automaticLiquidationResponse = null)
    {
        $this->automaticLiquidationResponse = $automaticLiquidationResponse;

        return $this;
    }

    /**
     * Adds as serviceResponse.
     *
     * @return self
     */
    public function addToServiceResponse(\Pohoda\Service\ServiceResponse $serviceResponse)
    {
        $this->serviceResponse[] = $serviceResponse;

        return $this;
    }

    /**
     * isset serviceResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetServiceResponse($index)
    {
        return isset($this->serviceResponse[$index]);
    }

    /**
     * unset serviceResponse.
     *
     * @param int|string $index
     */
    public function unsetServiceResponse($index): void
    {
        unset($this->serviceResponse[$index]);
    }

    /**
     * Gets as serviceResponse.
     *
     * @return \Pohoda\Service\ServiceResponse[]
     */
    public function getServiceResponse()
    {
        return $this->serviceResponse;
    }

    /**
     * Sets a new serviceResponse.
     *
     * @param \Pohoda\Service\ServiceResponse[] $serviceResponse
     *
     * @return self
     */
    public function setServiceResponse(?array $serviceResponse = null)
    {
        $this->serviceResponse = $serviceResponse;

        return $this;
    }

    /**
     * Adds as userAgendaResponse.
     *
     * @return self
     */
    public function addToUserAgendaResponse(\Pohoda\UserAgenda\UserAgendaResponse $userAgendaResponse)
    {
        $this->userAgendaResponse[] = $userAgendaResponse;

        return $this;
    }

    /**
     * isset userAgendaResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetUserAgendaResponse($index)
    {
        return isset($this->userAgendaResponse[$index]);
    }

    /**
     * unset userAgendaResponse.
     *
     * @param int|string $index
     */
    public function unsetUserAgendaResponse($index): void
    {
        unset($this->userAgendaResponse[$index]);
    }

    /**
     * Gets as userAgendaResponse.
     *
     * @return \Pohoda\UserAgenda\UserAgendaResponse[]
     */
    public function getUserAgendaResponse()
    {
        return $this->userAgendaResponse;
    }

    /**
     * Sets a new userAgendaResponse.
     *
     * @param \Pohoda\UserAgenda\UserAgendaResponse[] $userAgendaResponse
     *
     * @return self
     */
    public function setUserAgendaResponse(?array $userAgendaResponse = null)
    {
        $this->userAgendaResponse = $userAgendaResponse;

        return $this;
    }

    /**
     * Adds as activityResponse.
     *
     * @return self
     */
    public function addToActivityResponse(\Pohoda\Activity\ActivityResponse $activityResponse)
    {
        $this->activityResponse[] = $activityResponse;

        return $this;
    }

    /**
     * isset activityResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetActivityResponse($index)
    {
        return isset($this->activityResponse[$index]);
    }

    /**
     * unset activityResponse.
     *
     * @param int|string $index
     */
    public function unsetActivityResponse($index): void
    {
        unset($this->activityResponse[$index]);
    }

    /**
     * Gets as activityResponse.
     *
     * @return \Pohoda\Activity\ActivityResponse[]
     */
    public function getActivityResponse()
    {
        return $this->activityResponse;
    }

    /**
     * Sets a new activityResponse.
     *
     * @param \Pohoda\Activity\ActivityResponse[] $activityResponse
     *
     * @return self
     */
    public function setActivityResponse(?array $activityResponse = null)
    {
        $this->activityResponse = $activityResponse;

        return $this;
    }

    /**
     * Adds as centreResponse.
     *
     * @return self
     */
    public function addToCentreResponse(\Pohoda\Centre\CentreResponse $centreResponse)
    {
        $this->centreResponse[] = $centreResponse;

        return $this;
    }

    /**
     * isset centreResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetCentreResponse($index)
    {
        return isset($this->centreResponse[$index]);
    }

    /**
     * unset centreResponse.
     *
     * @param int|string $index
     */
    public function unsetCentreResponse($index): void
    {
        unset($this->centreResponse[$index]);
    }

    /**
     * Gets as centreResponse.
     *
     * @return \Pohoda\Centre\CentreResponse[]
     */
    public function getCentreResponse()
    {
        return $this->centreResponse;
    }

    /**
     * Sets a new centreResponse.
     *
     * @param \Pohoda\Centre\CentreResponse[] $centreResponse
     *
     * @return self
     */
    public function setCentreResponse(?array $centreResponse = null)
    {
        $this->centreResponse = $centreResponse;

        return $this;
    }

    /**
     * Adds as listCentre.
     *
     * @return self
     */
    public function addToListCentre(\Pohoda\ListCentre\ListCentre $listCentre)
    {
        $this->listCentre[] = $listCentre;

        return $this;
    }

    /**
     * isset listCentre.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListCentre($index)
    {
        return isset($this->listCentre[$index]);
    }

    /**
     * unset listCentre.
     *
     * @param int|string $index
     */
    public function unsetListCentre($index): void
    {
        unset($this->listCentre[$index]);
    }

    /**
     * Gets as listCentre.
     *
     * @return \Pohoda\ListCentre\ListCentre[]
     */
    public function getListCentre()
    {
        return $this->listCentre;
    }

    /**
     * Sets a new listCentre.
     *
     * @param \Pohoda\ListCentre\ListCentre[] $listCentre
     *
     * @return self
     */
    public function setListCentre(?array $listCentre = null)
    {
        $this->listCentre = $listCentre;

        return $this;
    }

    /**
     * Adds as listActivity.
     *
     * @return self
     */
    public function addToListActivity(\Pohoda\ListActivity\ListActivity $listActivity)
    {
        $this->listActivity[] = $listActivity;

        return $this;
    }

    /**
     * isset listActivity.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListActivity($index)
    {
        return isset($this->listActivity[$index]);
    }

    /**
     * unset listActivity.
     *
     * @param int|string $index
     */
    public function unsetListActivity($index): void
    {
        unset($this->listActivity[$index]);
    }

    /**
     * Gets as listActivity.
     *
     * @return \Pohoda\ListActivity\ListActivity[]
     */
    public function getListActivity()
    {
        return $this->listActivity;
    }

    /**
     * Sets a new listActivity.
     *
     * @param \Pohoda\ListActivity\ListActivity[] $listActivity
     *
     * @return self
     */
    public function setListActivity(?array $listActivity = null)
    {
        $this->listActivity = $listActivity;

        return $this;
    }

    /**
     * Adds as listContract.
     *
     * @return self
     */
    public function addToListContract(\Pohoda\ListContract\ListContract $listContract)
    {
        $this->listContract[] = $listContract;

        return $this;
    }

    /**
     * isset listContract.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListContract($index)
    {
        return isset($this->listContract[$index]);
    }

    /**
     * unset listContract.
     *
     * @param int|string $index
     */
    public function unsetListContract($index): void
    {
        unset($this->listContract[$index]);
    }

    /**
     * Gets as listContract.
     *
     * @return \Pohoda\ListContract\ListContract[]
     */
    public function getListContract()
    {
        return $this->listContract;
    }

    /**
     * Sets a new listContract.
     *
     * @param \Pohoda\ListContract\ListContract[] $listContract
     *
     * @return self
     */
    public function setListContract(?array $listContract = null)
    {
        $this->listContract = $listContract;

        return $this;
    }

    /**
     * Adds as listCash.
     *
     * @return self
     */
    public function addToListCash(\Pohoda\List\ListCash $listCash)
    {
        $this->listCash[] = $listCash;

        return $this;
    }

    /**
     * isset listCash.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListCash($index)
    {
        return isset($this->listCash[$index]);
    }

    /**
     * unset listCash.
     *
     * @param int|string $index
     */
    public function unsetListCash($index): void
    {
        unset($this->listCash[$index]);
    }

    /**
     * Gets as listCash.
     *
     * @return \Pohoda\List\ListCash[]
     */
    public function getListCash()
    {
        return $this->listCash;
    }

    /**
     * Sets a new listCash.
     *
     * @param \Pohoda\List\ListCash[] $listCash
     *
     * @return self
     */
    public function setListCash(?array $listCash = null)
    {
        $this->listCash = $listCash;

        return $this;
    }

    /**
     * Adds as listCashRegister.
     *
     * @return self
     */
    public function addToListCashRegister(\Pohoda\List\ListCashRegister $listCashRegister)
    {
        $this->listCashRegister[] = $listCashRegister;

        return $this;
    }

    /**
     * isset listCashRegister.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListCashRegister($index)
    {
        return isset($this->listCashRegister[$index]);
    }

    /**
     * unset listCashRegister.
     *
     * @param int|string $index
     */
    public function unsetListCashRegister($index): void
    {
        unset($this->listCashRegister[$index]);
    }

    /**
     * Gets as listCashRegister.
     *
     * @return \Pohoda\List\ListCashRegister[]
     */
    public function getListCashRegister()
    {
        return $this->listCashRegister;
    }

    /**
     * Sets a new listCashRegister.
     *
     * @param \Pohoda\List\ListCashRegister[] $listCashRegister
     *
     * @return self
     */
    public function setListCashRegister(?array $listCashRegister = null)
    {
        $this->listCashRegister = $listCashRegister;

        return $this;
    }

    /**
     * Adds as listBankAccount.
     *
     * @return self
     */
    public function addToListBankAccount(\Pohoda\List\ListBankAccount $listBankAccount)
    {
        $this->listBankAccount[] = $listBankAccount;

        return $this;
    }

    /**
     * isset listBankAccount.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListBankAccount($index)
    {
        return isset($this->listBankAccount[$index]);
    }

    /**
     * unset listBankAccount.
     *
     * @param int|string $index
     */
    public function unsetListBankAccount($index): void
    {
        unset($this->listBankAccount[$index]);
    }

    /**
     * Gets as listBankAccount.
     *
     * @return \Pohoda\List\ListBankAccount[]
     */
    public function getListBankAccount()
    {
        return $this->listBankAccount;
    }

    /**
     * Sets a new listBankAccount.
     *
     * @param \Pohoda\List\ListBankAccount[] $listBankAccount
     *
     * @return self
     */
    public function setListBankAccount(?array $listBankAccount = null)
    {
        $this->listBankAccount = $listBankAccount;

        return $this;
    }

    /**
     * Adds as listAccountingSingleEntry.
     *
     * @return self
     */
    public function addToListAccountingSingleEntry(\Pohoda\List\ListAccountingSingleEntry $listAccountingSingleEntry)
    {
        $this->listAccountingSingleEntry[] = $listAccountingSingleEntry;

        return $this;
    }

    /**
     * isset listAccountingSingleEntry.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListAccountingSingleEntry($index)
    {
        return isset($this->listAccountingSingleEntry[$index]);
    }

    /**
     * unset listAccountingSingleEntry.
     *
     * @param int|string $index
     */
    public function unsetListAccountingSingleEntry($index): void
    {
        unset($this->listAccountingSingleEntry[$index]);
    }

    /**
     * Gets as listAccountingSingleEntry.
     *
     * @return \Pohoda\List\ListAccountingSingleEntry[]
     */
    public function getListAccountingSingleEntry()
    {
        return $this->listAccountingSingleEntry;
    }

    /**
     * Sets a new listAccountingSingleEntry.
     *
     * @param \Pohoda\List\ListAccountingSingleEntry[] $listAccountingSingleEntry
     *
     * @return self
     */
    public function setListAccountingSingleEntry(?array $listAccountingSingleEntry = null)
    {
        $this->listAccountingSingleEntry = $listAccountingSingleEntry;

        return $this;
    }

    /**
     * Adds as listAccountingDoubleEntry.
     *
     * @return self
     */
    public function addToListAccountingDoubleEntry(\Pohoda\List\ListAccountingDoubleEntry $listAccountingDoubleEntry)
    {
        $this->listAccountingDoubleEntry[] = $listAccountingDoubleEntry;

        return $this;
    }

    /**
     * isset listAccountingDoubleEntry.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListAccountingDoubleEntry($index)
    {
        return isset($this->listAccountingDoubleEntry[$index]);
    }

    /**
     * unset listAccountingDoubleEntry.
     *
     * @param int|string $index
     */
    public function unsetListAccountingDoubleEntry($index): void
    {
        unset($this->listAccountingDoubleEntry[$index]);
    }

    /**
     * Gets as listAccountingDoubleEntry.
     *
     * @return \Pohoda\List\ListAccountingDoubleEntry[]
     */
    public function getListAccountingDoubleEntry()
    {
        return $this->listAccountingDoubleEntry;
    }

    /**
     * Sets a new listAccountingDoubleEntry.
     *
     * @param \Pohoda\List\ListAccountingDoubleEntry[] $listAccountingDoubleEntry
     *
     * @return self
     */
    public function setListAccountingDoubleEntry(?array $listAccountingDoubleEntry = null)
    {
        $this->listAccountingDoubleEntry = $listAccountingDoubleEntry;

        return $this;
    }

    /**
     * Adds as listAccount.
     *
     * @return self
     */
    public function addToListAccount(\Pohoda\List\ListAccount $listAccount)
    {
        $this->listAccount[] = $listAccount;

        return $this;
    }

    /**
     * isset listAccount.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListAccount($index)
    {
        return isset($this->listAccount[$index]);
    }

    /**
     * unset listAccount.
     *
     * @param int|string $index
     */
    public function unsetListAccount($index): void
    {
        unset($this->listAccount[$index]);
    }

    /**
     * Gets as listAccount.
     *
     * @return \Pohoda\List\ListAccount[]
     */
    public function getListAccount()
    {
        return $this->listAccount;
    }

    /**
     * Sets a new listAccount.
     *
     * @param \Pohoda\List\ListAccount[] $listAccount
     *
     * @return self
     */
    public function setListAccount(?array $listAccount = null)
    {
        $this->listAccount = $listAccount;

        return $this;
    }

    /**
     * Adds as listStorage.
     *
     * @return self
     */
    public function addToListStorage(\Pohoda\List\ListStorage $listStorage)
    {
        $this->listStorage[] = $listStorage;

        return $this;
    }

    /**
     * isset listStorage.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListStorage($index)
    {
        return isset($this->listStorage[$index]);
    }

    /**
     * unset listStorage.
     *
     * @param int|string $index
     */
    public function unsetListStorage($index): void
    {
        unset($this->listStorage[$index]);
    }

    /**
     * Gets as listStorage.
     *
     * @return \Pohoda\List\ListStorage[]
     */
    public function getListStorage()
    {
        return $this->listStorage;
    }

    /**
     * Sets a new listStorage.
     *
     * @param \Pohoda\List\ListStorage[] $listStorage
     *
     * @return self
     */
    public function setListStorage(?array $listStorage = null)
    {
        $this->listStorage = $listStorage;

        return $this;
    }

    /**
     * Adds as listSellingPrice.
     *
     * @return self
     */
    public function addToListSellingPrice(\Pohoda\List\ListSellingPrice $listSellingPrice)
    {
        $this->listSellingPrice[] = $listSellingPrice;

        return $this;
    }

    /**
     * isset listSellingPrice.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListSellingPrice($index)
    {
        return isset($this->listSellingPrice[$index]);
    }

    /**
     * unset listSellingPrice.
     *
     * @param int|string $index
     */
    public function unsetListSellingPrice($index): void
    {
        unset($this->listSellingPrice[$index]);
    }

    /**
     * Gets as listSellingPrice.
     *
     * @return \Pohoda\List\ListSellingPrice[]
     */
    public function getListSellingPrice()
    {
        return $this->listSellingPrice;
    }

    /**
     * Sets a new listSellingPrice.
     *
     * @param \Pohoda\List\ListSellingPrice[] $listSellingPrice
     *
     * @return self
     */
    public function setListSellingPrice(?array $listSellingPrice = null)
    {
        $this->listSellingPrice = $listSellingPrice;

        return $this;
    }

    /**
     * Adds as listNumericSeries.
     *
     * @return self
     */
    public function addToListNumericSeries(\Pohoda\List\ListNumericSeries $listNumericSeries)
    {
        $this->listNumericSeries[] = $listNumericSeries;

        return $this;
    }

    /**
     * isset listNumericSeries.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListNumericSeries($index)
    {
        return isset($this->listNumericSeries[$index]);
    }

    /**
     * unset listNumericSeries.
     *
     * @param int|string $index
     */
    public function unsetListNumericSeries($index): void
    {
        unset($this->listNumericSeries[$index]);
    }

    /**
     * Gets as listNumericSeries.
     *
     * @return \Pohoda\List\ListNumericSeries[]
     */
    public function getListNumericSeries()
    {
        return $this->listNumericSeries;
    }

    /**
     * Sets a new listNumericSeries.
     *
     * @param \Pohoda\List\ListNumericSeries[] $listNumericSeries
     *
     * @return self
     */
    public function setListNumericSeries(?array $listNumericSeries = null)
    {
        $this->listNumericSeries = $listNumericSeries;

        return $this;
    }

    /**
     * Adds as createAccountingDoubleEntryResponse.
     *
     * @return self
     */
    public function addToCreateAccountingDoubleEntryResponse(\Pohoda\List\CreateAccountingDoubleEntryResponse $createAccountingDoubleEntryResponse)
    {
        $this->createAccountingDoubleEntryResponse[] = $createAccountingDoubleEntryResponse;

        return $this;
    }

    /**
     * isset createAccountingDoubleEntryResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetCreateAccountingDoubleEntryResponse($index)
    {
        return isset($this->createAccountingDoubleEntryResponse[$index]);
    }

    /**
     * unset createAccountingDoubleEntryResponse.
     *
     * @param int|string $index
     */
    public function unsetCreateAccountingDoubleEntryResponse($index): void
    {
        unset($this->createAccountingDoubleEntryResponse[$index]);
    }

    /**
     * Gets as createAccountingDoubleEntryResponse.
     *
     * @return \Pohoda\List\CreateAccountingDoubleEntryResponse[]
     */
    public function getCreateAccountingDoubleEntryResponse()
    {
        return $this->createAccountingDoubleEntryResponse;
    }

    /**
     * Sets a new createAccountingDoubleEntryResponse.
     *
     * @param \Pohoda\List\CreateAccountingDoubleEntryResponse[] $createAccountingDoubleEntryResponse
     *
     * @return self
     */
    public function setCreateAccountingDoubleEntryResponse(?array $createAccountingDoubleEntryResponse = null)
    {
        $this->createAccountingDoubleEntryResponse = $createAccountingDoubleEntryResponse;

        return $this;
    }

    /**
     * Adds as listAccountingUnit.
     *
     * @return self
     */
    public function addToListAccountingUnit(\Pohoda\Accountingunit\ListAccountingUnit $listAccountingUnit)
    {
        $this->listAccountingUnit[] = $listAccountingUnit;

        return $this;
    }

    /**
     * isset listAccountingUnit.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListAccountingUnit($index)
    {
        return isset($this->listAccountingUnit[$index]);
    }

    /**
     * unset listAccountingUnit.
     *
     * @param int|string $index
     */
    public function unsetListAccountingUnit($index): void
    {
        unset($this->listAccountingUnit[$index]);
    }

    /**
     * Gets as listAccountingUnit.
     *
     * @return \Pohoda\Accountingunit\ListAccountingUnit[]
     */
    public function getListAccountingUnit()
    {
        return $this->listAccountingUnit;
    }

    /**
     * Sets a new listAccountingUnit.
     *
     * @param \Pohoda\Accountingunit\ListAccountingUnit[] $listAccountingUnit
     *
     * @return self
     */
    public function setListAccountingUnit(?array $listAccountingUnit = null)
    {
        $this->listAccountingUnit = $listAccountingUnit;

        return $this;
    }

    /**
     * Adds as listStock.
     *
     * @return self
     */
    public function addToListStock(\Pohoda\ListStock\ListStock $listStock)
    {
        $this->listStock[] = $listStock;

        return $this;
    }

    /**
     * isset listStock.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListStock($index)
    {
        return isset($this->listStock[$index]);
    }

    /**
     * unset listStock.
     *
     * @param int|string $index
     */
    public function unsetListStock($index): void
    {
        unset($this->listStock[$index]);
    }

    /**
     * Gets as listStock.
     *
     * @return \Pohoda\ListStock\ListStock[]
     */
    public function getListStock()
    {
        return $this->listStock;
    }

    /**
     * Sets a new listStock.
     *
     * @param \Pohoda\ListStock\ListStock[] $listStock
     *
     * @return self
     */
    public function setListStock(?array $listStock = null)
    {
        $this->listStock = $listStock;

        return $this;
    }

    /**
     * Adds as listInvoice.
     *
     * @return self
     */
    public function addToListInvoice(\Pohoda\List\ListInvoice $listInvoice)
    {
        $this->listInvoice[] = $listInvoice;

        return $this;
    }

    /**
     * isset listInvoice.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListInvoice($index)
    {
        return isset($this->listInvoice[$index]);
    }

    /**
     * unset listInvoice.
     *
     * @param int|string $index
     */
    public function unsetListInvoice($index): void
    {
        unset($this->listInvoice[$index]);
    }

    /**
     * Gets as listInvoice.
     *
     * @return \Pohoda\List\ListInvoice[]
     */
    public function getListInvoice()
    {
        return $this->listInvoice;
    }

    /**
     * Sets a new listInvoice.
     *
     * @param \Pohoda\List\ListInvoice[] $listInvoice
     *
     * @return self
     */
    public function setListInvoice(?array $listInvoice = null)
    {
        $this->listInvoice = $listInvoice;

        return $this;
    }

    /**
     * Adds as listAddressBook.
     *
     * @return self
     */
    public function addToListAddressBook(\Pohoda\ListAddBook\ListAddressBook $listAddressBook)
    {
        $this->listAddressBook[] = $listAddressBook;

        return $this;
    }

    /**
     * isset listAddressBook.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListAddressBook($index)
    {
        return isset($this->listAddressBook[$index]);
    }

    /**
     * unset listAddressBook.
     *
     * @param int|string $index
     */
    public function unsetListAddressBook($index): void
    {
        unset($this->listAddressBook[$index]);
    }

    /**
     * Gets as listAddressBook.
     *
     * @return \Pohoda\ListAddBook\ListAddressBook[]
     */
    public function getListAddressBook()
    {
        return $this->listAddressBook;
    }

    /**
     * Sets a new listAddressBook.
     *
     * @param \Pohoda\ListAddBook\ListAddressBook[] $listAddressBook
     *
     * @return self
     */
    public function setListAddressBook(?array $listAddressBook = null)
    {
        $this->listAddressBook = $listAddressBook;

        return $this;
    }

    /**
     * Adds as listOrder.
     *
     * @return self
     */
    public function addToListOrder(\Pohoda\List\ListOrder $listOrder)
    {
        $this->listOrder[] = $listOrder;

        return $this;
    }

    /**
     * isset listOrder.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListOrder($index)
    {
        return isset($this->listOrder[$index]);
    }

    /**
     * unset listOrder.
     *
     * @param int|string $index
     */
    public function unsetListOrder($index): void
    {
        unset($this->listOrder[$index]);
    }

    /**
     * Gets as listOrder.
     *
     * @return \Pohoda\List\ListOrder[]
     */
    public function getListOrder()
    {
        return $this->listOrder;
    }

    /**
     * Sets a new listOrder.
     *
     * @param \Pohoda\List\ListOrder[] $listOrder
     *
     * @return self
     */
    public function setListOrder(?array $listOrder = null)
    {
        $this->listOrder = $listOrder;

        return $this;
    }

    /**
     * Adds as listEnquiry.
     *
     * @return self
     */
    public function addToListEnquiry(\Pohoda\List\ListEnquiry $listEnquiry)
    {
        $this->listEnquiry[] = $listEnquiry;

        return $this;
    }

    /**
     * isset listEnquiry.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListEnquiry($index)
    {
        return isset($this->listEnquiry[$index]);
    }

    /**
     * unset listEnquiry.
     *
     * @param int|string $index
     */
    public function unsetListEnquiry($index): void
    {
        unset($this->listEnquiry[$index]);
    }

    /**
     * Gets as listEnquiry.
     *
     * @return \Pohoda\List\ListEnquiry[]
     */
    public function getListEnquiry()
    {
        return $this->listEnquiry;
    }

    /**
     * Sets a new listEnquiry.
     *
     * @param \Pohoda\List\ListEnquiry[] $listEnquiry
     *
     * @return self
     */
    public function setListEnquiry(?array $listEnquiry = null)
    {
        $this->listEnquiry = $listEnquiry;

        return $this;
    }

    /**
     * Adds as listOffer.
     *
     * @return self
     */
    public function addToListOffer(\Pohoda\List\ListOffer $listOffer)
    {
        $this->listOffer[] = $listOffer;

        return $this;
    }

    /**
     * isset listOffer.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListOffer($index)
    {
        return isset($this->listOffer[$index]);
    }

    /**
     * unset listOffer.
     *
     * @param int|string $index
     */
    public function unsetListOffer($index): void
    {
        unset($this->listOffer[$index]);
    }

    /**
     * Gets as listOffer.
     *
     * @return \Pohoda\List\ListOffer[]
     */
    public function getListOffer()
    {
        return $this->listOffer;
    }

    /**
     * Sets a new listOffer.
     *
     * @param \Pohoda\List\ListOffer[] $listOffer
     *
     * @return self
     */
    public function setListOffer(?array $listOffer = null)
    {
        $this->listOffer = $listOffer;

        return $this;
    }

    /**
     * Adds as listParameter.
     *
     * @return self
     */
    public function addToListParameter(\Pohoda\List\ListParameter $listParameter)
    {
        $this->listParameter[] = $listParameter;

        return $this;
    }

    /**
     * isset listParameter.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListParameter($index)
    {
        return isset($this->listParameter[$index]);
    }

    /**
     * unset listParameter.
     *
     * @param int|string $index
     */
    public function unsetListParameter($index): void
    {
        unset($this->listParameter[$index]);
    }

    /**
     * Gets as listParameter.
     *
     * @return \Pohoda\List\ListParameter[]
     */
    public function getListParameter()
    {
        return $this->listParameter;
    }

    /**
     * Sets a new listParameter.
     *
     * @param \Pohoda\List\ListParameter[] $listParameter
     *
     * @return self
     */
    public function setListParameter(?array $listParameter = null)
    {
        $this->listParameter = $listParameter;

        return $this;
    }

    /**
     * Adds as listUserCodePack.
     *
     * @return self
     */
    public function addToListUserCodePack(\Pohoda\List\ListUserCodePack $listUserCodePack)
    {
        $this->listUserCodePack[] = $listUserCodePack;

        return $this;
    }

    /**
     * isset listUserCodePack.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListUserCodePack($index)
    {
        return isset($this->listUserCodePack[$index]);
    }

    /**
     * unset listUserCodePack.
     *
     * @param int|string $index
     */
    public function unsetListUserCodePack($index): void
    {
        unset($this->listUserCodePack[$index]);
    }

    /**
     * Gets as listUserCodePack.
     *
     * @return \Pohoda\List\ListUserCodePack[]
     */
    public function getListUserCodePack()
    {
        return $this->listUserCodePack;
    }

    /**
     * Sets a new listUserCodePack.
     *
     * @param \Pohoda\List\ListUserCodePack[] $listUserCodePack
     *
     * @return self
     */
    public function setListUserCodePack(?array $listUserCodePack = null)
    {
        $this->listUserCodePack = $listUserCodePack;

        return $this;
    }

    /**
     * Adds as listVydejka.
     *
     * @return self
     */
    public function addToListVydejka(\Pohoda\List\ListVydejka $listVydejka)
    {
        $this->listVydejka[] = $listVydejka;

        return $this;
    }

    /**
     * isset listVydejka.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListVydejka($index)
    {
        return isset($this->listVydejka[$index]);
    }

    /**
     * unset listVydejka.
     *
     * @param int|string $index
     */
    public function unsetListVydejka($index): void
    {
        unset($this->listVydejka[$index]);
    }

    /**
     * Gets as listVydejka.
     *
     * @return \Pohoda\List\ListVydejka[]
     */
    public function getListVydejka()
    {
        return $this->listVydejka;
    }

    /**
     * Sets a new listVydejka.
     *
     * @param \Pohoda\List\ListVydejka[] $listVydejka
     *
     * @return self
     */
    public function setListVydejka(?array $listVydejka = null)
    {
        $this->listVydejka = $listVydejka;

        return $this;
    }

    /**
     * Adds as listPrijemka.
     *
     * @return self
     */
    public function addToListPrijemka(\Pohoda\List\ListPrijemka $listPrijemka)
    {
        $this->listPrijemka[] = $listPrijemka;

        return $this;
    }

    /**
     * isset listPrijemka.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListPrijemka($index)
    {
        return isset($this->listPrijemka[$index]);
    }

    /**
     * unset listPrijemka.
     *
     * @param int|string $index
     */
    public function unsetListPrijemka($index): void
    {
        unset($this->listPrijemka[$index]);
    }

    /**
     * Gets as listPrijemka.
     *
     * @return \Pohoda\List\ListPrijemka[]
     */
    public function getListPrijemka()
    {
        return $this->listPrijemka;
    }

    /**
     * Sets a new listPrijemka.
     *
     * @param \Pohoda\List\ListPrijemka[] $listPrijemka
     *
     * @return self
     */
    public function setListPrijemka(?array $listPrijemka = null)
    {
        $this->listPrijemka = $listPrijemka;

        return $this;
    }

    /**
     * Adds as listBalance.
     *
     * @return self
     */
    public function addToListBalance(\Pohoda\List\ListBalance $listBalance)
    {
        $this->listBalance[] = $listBalance;

        return $this;
    }

    /**
     * isset listBalance.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListBalance($index)
    {
        return isset($this->listBalance[$index]);
    }

    /**
     * unset listBalance.
     *
     * @param int|string $index
     */
    public function unsetListBalance($index): void
    {
        unset($this->listBalance[$index]);
    }

    /**
     * Gets as listBalance.
     *
     * @return \Pohoda\List\ListBalance[]
     */
    public function getListBalance()
    {
        return $this->listBalance;
    }

    /**
     * Sets a new listBalance.
     *
     * @param \Pohoda\List\ListBalance[] $listBalance
     *
     * @return self
     */
    public function setListBalance(?array $listBalance = null)
    {
        $this->listBalance = $listBalance;

        return $this;
    }

    /**
     * Adds as listCategory.
     *
     * @return self
     */
    public function addToListCategory(\Pohoda\List\ListCategory $listCategory)
    {
        $this->listCategory[] = $listCategory;

        return $this;
    }

    /**
     * isset listCategory.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListCategory($index)
    {
        return isset($this->listCategory[$index]);
    }

    /**
     * unset listCategory.
     *
     * @param int|string $index
     */
    public function unsetListCategory($index): void
    {
        unset($this->listCategory[$index]);
    }

    /**
     * Gets as listCategory.
     *
     * @return \Pohoda\List\ListCategory[]
     */
    public function getListCategory()
    {
        return $this->listCategory;
    }

    /**
     * Sets a new listCategory.
     *
     * @param \Pohoda\List\ListCategory[] $listCategory
     *
     * @return self
     */
    public function setListCategory(?array $listCategory = null)
    {
        $this->listCategory = $listCategory;

        return $this;
    }

    /**
     * Adds as listIntParam.
     *
     * @return self
     */
    public function addToListIntParam(\Pohoda\List\ListIntParam $listIntParam)
    {
        $this->listIntParam[] = $listIntParam;

        return $this;
    }

    /**
     * isset listIntParam.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListIntParam($index)
    {
        return isset($this->listIntParam[$index]);
    }

    /**
     * unset listIntParam.
     *
     * @param int|string $index
     */
    public function unsetListIntParam($index): void
    {
        unset($this->listIntParam[$index]);
    }

    /**
     * Gets as listIntParam.
     *
     * @return \Pohoda\List\ListIntParam[]
     */
    public function getListIntParam()
    {
        return $this->listIntParam;
    }

    /**
     * Sets a new listIntParam.
     *
     * @param \Pohoda\List\ListIntParam[] $listIntParam
     *
     * @return self
     */
    public function setListIntParam(?array $listIntParam = null)
    {
        $this->listIntParam = $listIntParam;

        return $this;
    }

    /**
     * Adds as listIntDoc.
     *
     * @return self
     */
    public function addToListIntDoc(\Pohoda\List\ListIntDoc $listIntDoc)
    {
        $this->listIntDoc[] = $listIntDoc;

        return $this;
    }

    /**
     * isset listIntDoc.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListIntDoc($index)
    {
        return isset($this->listIntDoc[$index]);
    }

    /**
     * unset listIntDoc.
     *
     * @param int|string $index
     */
    public function unsetListIntDoc($index): void
    {
        unset($this->listIntDoc[$index]);
    }

    /**
     * Gets as listIntDoc.
     *
     * @return \Pohoda\List\ListIntDoc[]
     */
    public function getListIntDoc()
    {
        return $this->listIntDoc;
    }

    /**
     * Sets a new listIntDoc.
     *
     * @param \Pohoda\List\ListIntDoc[] $listIntDoc
     *
     * @return self
     */
    public function setListIntDoc(?array $listIntDoc = null)
    {
        $this->listIntDoc = $listIntDoc;

        return $this;
    }

    /**
     * Adds as listProdejka.
     *
     * @return self
     */
    public function addToListProdejka(\Pohoda\List\ListProdejka $listProdejka)
    {
        $this->listProdejka[] = $listProdejka;

        return $this;
    }

    /**
     * isset listProdejka.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListProdejka($index)
    {
        return isset($this->listProdejka[$index]);
    }

    /**
     * unset listProdejka.
     *
     * @param int|string $index
     */
    public function unsetListProdejka($index): void
    {
        unset($this->listProdejka[$index]);
    }

    /**
     * Gets as listProdejka.
     *
     * @return \Pohoda\List\ListProdejka[]
     */
    public function getListProdejka()
    {
        return $this->listProdejka;
    }

    /**
     * Sets a new listProdejka.
     *
     * @param \Pohoda\List\ListProdejka[] $listProdejka
     *
     * @return self
     */
    public function setListProdejka(?array $listProdejka = null)
    {
        $this->listProdejka = $listProdejka;

        return $this;
    }

    /**
     * Adds as listVoucher.
     *
     * @return self
     */
    public function addToListVoucher(\Pohoda\List\ListVoucher $listVoucher)
    {
        $this->listVoucher[] = $listVoucher;

        return $this;
    }

    /**
     * isset listVoucher.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListVoucher($index)
    {
        return isset($this->listVoucher[$index]);
    }

    /**
     * unset listVoucher.
     *
     * @param int|string $index
     */
    public function unsetListVoucher($index): void
    {
        unset($this->listVoucher[$index]);
    }

    /**
     * Gets as listVoucher.
     *
     * @return \Pohoda\List\ListVoucher[]
     */
    public function getListVoucher()
    {
        return $this->listVoucher;
    }

    /**
     * Sets a new listVoucher.
     *
     * @param \Pohoda\List\ListVoucher[] $listVoucher
     *
     * @return self
     */
    public function setListVoucher(?array $listVoucher = null)
    {
        $this->listVoucher = $listVoucher;

        return $this;
    }

    /**
     * Adds as listPrevodka.
     *
     * @return self
     */
    public function addToListPrevodka(\Pohoda\List\ListPrevodka $listPrevodka)
    {
        $this->listPrevodka[] = $listPrevodka;

        return $this;
    }

    /**
     * isset listPrevodka.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListPrevodka($index)
    {
        return isset($this->listPrevodka[$index]);
    }

    /**
     * unset listPrevodka.
     *
     * @param int|string $index
     */
    public function unsetListPrevodka($index): void
    {
        unset($this->listPrevodka[$index]);
    }

    /**
     * Gets as listPrevodka.
     *
     * @return \Pohoda\List\ListPrevodka[]
     */
    public function getListPrevodka()
    {
        return $this->listPrevodka;
    }

    /**
     * Sets a new listPrevodka.
     *
     * @param \Pohoda\List\ListPrevodka[] $listPrevodka
     *
     * @return self
     */
    public function setListPrevodka(?array $listPrevodka = null)
    {
        $this->listPrevodka = $listPrevodka;

        return $this;
    }

    /**
     * Adds as listVyroba.
     *
     * @return self
     */
    public function addToListVyroba(\Pohoda\List\ListVyroba $listVyroba)
    {
        $this->listVyroba[] = $listVyroba;

        return $this;
    }

    /**
     * isset listVyroba.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListVyroba($index)
    {
        return isset($this->listVyroba[$index]);
    }

    /**
     * unset listVyroba.
     *
     * @param int|string $index
     */
    public function unsetListVyroba($index): void
    {
        unset($this->listVyroba[$index]);
    }

    /**
     * Gets as listVyroba.
     *
     * @return \Pohoda\List\ListVyroba[]
     */
    public function getListVyroba()
    {
        return $this->listVyroba;
    }

    /**
     * Sets a new listVyroba.
     *
     * @param \Pohoda\List\ListVyroba[] $listVyroba
     *
     * @return self
     */
    public function setListVyroba(?array $listVyroba = null)
    {
        $this->listVyroba = $listVyroba;

        return $this;
    }

    /**
     * Adds as taxDataResponse.
     *
     * @return self
     */
    public function addToTaxDataResponse(\Pohoda\List\TaxDataResponse $taxDataResponse)
    {
        $this->taxDataResponse[] = $taxDataResponse;

        return $this;
    }

    /**
     * isset taxDataResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetTaxDataResponse($index)
    {
        return isset($this->taxDataResponse[$index]);
    }

    /**
     * unset taxDataResponse.
     *
     * @param int|string $index
     */
    public function unsetTaxDataResponse($index): void
    {
        unset($this->taxDataResponse[$index]);
    }

    /**
     * Gets as taxDataResponse.
     *
     * @return \Pohoda\List\TaxDataResponse[]
     */
    public function getTaxDataResponse()
    {
        return $this->taxDataResponse;
    }

    /**
     * Sets a new taxDataResponse.
     *
     * @param \Pohoda\List\TaxDataResponse[] $taxDataResponse
     *
     * @return self
     */
    public function setTaxDataResponse(?array $taxDataResponse = null)
    {
        $this->taxDataResponse = $taxDataResponse;

        return $this;
    }

    /**
     * Adds as listIndividualPrice.
     *
     * @return self
     */
    public function addToListIndividualPrice(\Pohoda\List\ListIndividualPrice $listIndividualPrice)
    {
        $this->listIndividualPrice[] = $listIndividualPrice;

        return $this;
    }

    /**
     * isset listIndividualPrice.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListIndividualPrice($index)
    {
        return isset($this->listIndividualPrice[$index]);
    }

    /**
     * unset listIndividualPrice.
     *
     * @param int|string $index
     */
    public function unsetListIndividualPrice($index): void
    {
        unset($this->listIndividualPrice[$index]);
    }

    /**
     * Gets as listIndividualPrice.
     *
     * @return \Pohoda\List\ListIndividualPrice[]
     */
    public function getListIndividualPrice()
    {
        return $this->listIndividualPrice;
    }

    /**
     * Sets a new listIndividualPrice.
     *
     * @param \Pohoda\List\ListIndividualPrice[] $listIndividualPrice
     *
     * @return self
     */
    public function setListIndividualPrice(?array $listIndividualPrice = null)
    {
        $this->listIndividualPrice = $listIndividualPrice;

        return $this;
    }

    /**
     * Adds as listBank.
     *
     * @return self
     */
    public function addToListBank(\Pohoda\List\ListBank $listBank)
    {
        $this->listBank[] = $listBank;

        return $this;
    }

    /**
     * isset listBank.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListBank($index)
    {
        return isset($this->listBank[$index]);
    }

    /**
     * unset listBank.
     *
     * @param int|string $index
     */
    public function unsetListBank($index): void
    {
        unset($this->listBank[$index]);
    }

    /**
     * Gets as listBank.
     *
     * @return \Pohoda\List\ListBank[]
     */
    public function getListBank()
    {
        return $this->listBank;
    }

    /**
     * Sets a new listBank.
     *
     * @param \Pohoda\List\ListBank[] $listBank
     *
     * @return self
     */
    public function setListBank(?array $listBank = null)
    {
        $this->listBank = $listBank;

        return $this;
    }

    /**
     * Adds as listAccountancy.
     *
     * @return self
     */
    public function addToListAccountancy(\Pohoda\List\ListAccountancy $listAccountancy)
    {
        $this->listAccountancy[] = $listAccountancy;

        return $this;
    }

    /**
     * isset listAccountancy.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListAccountancy($index)
    {
        return isset($this->listAccountancy[$index]);
    }

    /**
     * unset listAccountancy.
     *
     * @param int|string $index
     */
    public function unsetListAccountancy($index): void
    {
        unset($this->listAccountancy[$index]);
    }

    /**
     * Gets as listAccountancy.
     *
     * @return \Pohoda\List\ListAccountancy[]
     */
    public function getListAccountancy()
    {
        return $this->listAccountancy;
    }

    /**
     * Sets a new listAccountancy.
     *
     * @param \Pohoda\List\ListAccountancy[] $listAccountancy
     *
     * @return self
     */
    public function setListAccountancy(?array $listAccountancy = null)
    {
        $this->listAccountancy = $listAccountancy;

        return $this;
    }

    /**
     * Adds as listStore.
     *
     * @return self
     */
    public function addToListStore(\Pohoda\List\ListStore $listStore)
    {
        $this->listStore[] = $listStore;

        return $this;
    }

    /**
     * isset listStore.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListStore($index)
    {
        return isset($this->listStore[$index]);
    }

    /**
     * unset listStore.
     *
     * @param int|string $index
     */
    public function unsetListStore($index): void
    {
        unset($this->listStore[$index]);
    }

    /**
     * Gets as listStore.
     *
     * @return \Pohoda\List\ListStore[]
     */
    public function getListStore()
    {
        return $this->listStore;
    }

    /**
     * Sets a new listStore.
     *
     * @param \Pohoda\List\ListStore[] $listStore
     *
     * @return self
     */
    public function setListStore(?array $listStore = null)
    {
        $this->listStore = $listStore;

        return $this;
    }

    /**
     * Adds as listSupplier.
     *
     * @return self
     */
    public function addToListSupplier(\Pohoda\List\ListSupplier $listSupplier)
    {
        $this->listSupplier[] = $listSupplier;

        return $this;
    }

    /**
     * isset listSupplier.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListSupplier($index)
    {
        return isset($this->listSupplier[$index]);
    }

    /**
     * unset listSupplier.
     *
     * @param int|string $index
     */
    public function unsetListSupplier($index): void
    {
        unset($this->listSupplier[$index]);
    }

    /**
     * Gets as listSupplier.
     *
     * @return \Pohoda\List\ListSupplier[]
     */
    public function getListSupplier()
    {
        return $this->listSupplier;
    }

    /**
     * Sets a new listSupplier.
     *
     * @param \Pohoda\List\ListSupplier[] $listSupplier
     *
     * @return self
     */
    public function setListSupplier(?array $listSupplier = null)
    {
        $this->listSupplier = $listSupplier;

        return $this;
    }

    /**
     * Adds as listGroupStocks.
     *
     * @return self
     */
    public function addToListGroupStocks(\Pohoda\List\ListGroupStocks $listGroupStocks)
    {
        $this->listGroupStocks[] = $listGroupStocks;

        return $this;
    }

    /**
     * isset listGroupStocks.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListGroupStocks($index)
    {
        return isset($this->listGroupStocks[$index]);
    }

    /**
     * unset listGroupStocks.
     *
     * @param int|string $index
     */
    public function unsetListGroupStocks($index): void
    {
        unset($this->listGroupStocks[$index]);
    }

    /**
     * Gets as listGroupStocks.
     *
     * @return \Pohoda\List\ListGroupStocks[]
     */
    public function getListGroupStocks()
    {
        return $this->listGroupStocks;
    }

    /**
     * Sets a new listGroupStocks.
     *
     * @param \Pohoda\List\ListGroupStocks[] $listGroupStocks
     *
     * @return self
     */
    public function setListGroupStocks(?array $listGroupStocks = null)
    {
        $this->listGroupStocks = $listGroupStocks;

        return $this;
    }

    /**
     * Adds as listActionPrice.
     *
     * @return self
     */
    public function addToListActionPrice(\Pohoda\List\ListActionPrice $listActionPrice)
    {
        $this->listActionPrice[] = $listActionPrice;

        return $this;
    }

    /**
     * isset listActionPrice.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListActionPrice($index)
    {
        return isset($this->listActionPrice[$index]);
    }

    /**
     * unset listActionPrice.
     *
     * @param int|string $index
     */
    public function unsetListActionPrice($index): void
    {
        unset($this->listActionPrice[$index]);
    }

    /**
     * Gets as listActionPrice.
     *
     * @return \Pohoda\List\ListActionPrice[]
     */
    public function getListActionPrice()
    {
        return $this->listActionPrice;
    }

    /**
     * Sets a new listActionPrice.
     *
     * @param \Pohoda\List\ListActionPrice[] $listActionPrice
     *
     * @return self
     */
    public function setListActionPrice(?array $listActionPrice = null)
    {
        $this->listActionPrice = $listActionPrice;

        return $this;
    }

    /**
     * Adds as listInventoryLists.
     *
     * @return self
     */
    public function addToListInventoryLists(\Pohoda\List\ListInventoryLists $listInventoryLists)
    {
        $this->listInventoryLists[] = $listInventoryLists;

        return $this;
    }

    /**
     * isset listInventoryLists.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListInventoryLists($index)
    {
        return isset($this->listInventoryLists[$index]);
    }

    /**
     * unset listInventoryLists.
     *
     * @param int|string $index
     */
    public function unsetListInventoryLists($index): void
    {
        unset($this->listInventoryLists[$index]);
    }

    /**
     * Gets as listInventoryLists.
     *
     * @return \Pohoda\List\ListInventoryLists[]
     */
    public function getListInventoryLists()
    {
        return $this->listInventoryLists;
    }

    /**
     * Sets a new listInventoryLists.
     *
     * @param \Pohoda\List\ListInventoryLists[] $listInventoryLists
     *
     * @return self
     */
    public function setListInventoryLists(?array $listInventoryLists = null)
    {
        $this->listInventoryLists = $listInventoryLists;

        return $this;
    }

    /**
     * Adds as listPayment.
     *
     * @return self
     */
    public function addToListPayment(\Pohoda\List\ListPayment $listPayment)
    {
        $this->listPayment[] = $listPayment;

        return $this;
    }

    /**
     * isset listPayment.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListPayment($index)
    {
        return isset($this->listPayment[$index]);
    }

    /**
     * unset listPayment.
     *
     * @param int|string $index
     */
    public function unsetListPayment($index): void
    {
        unset($this->listPayment[$index]);
    }

    /**
     * Gets as listPayment.
     *
     * @return \Pohoda\List\ListPayment[]
     */
    public function getListPayment()
    {
        return $this->listPayment;
    }

    /**
     * Sets a new listPayment.
     *
     * @param \Pohoda\List\ListPayment[] $listPayment
     *
     * @return self
     */
    public function setListPayment(?array $listPayment = null)
    {
        $this->listPayment = $listPayment;

        return $this;
    }

    /**
     * Adds as listNumericalSeries.
     *
     * @return self
     */
    public function addToListNumericalSeries(\Pohoda\List\ListNumericalSeries $listNumericalSeries)
    {
        $this->listNumericalSeries[] = $listNumericalSeries;

        return $this;
    }

    /**
     * isset listNumericalSeries.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListNumericalSeries($index)
    {
        return isset($this->listNumericalSeries[$index]);
    }

    /**
     * unset listNumericalSeries.
     *
     * @param int|string $index
     */
    public function unsetListNumericalSeries($index): void
    {
        unset($this->listNumericalSeries[$index]);
    }

    /**
     * Gets as listNumericalSeries.
     *
     * @return \Pohoda\List\ListNumericalSeries[]
     */
    public function getListNumericalSeries()
    {
        return $this->listNumericalSeries;
    }

    /**
     * Sets a new listNumericalSeries.
     *
     * @param \Pohoda\List\ListNumericalSeries[] $listNumericalSeries
     *
     * @return self
     */
    public function setListNumericalSeries(?array $listNumericalSeries = null)
    {
        $this->listNumericalSeries = $listNumericalSeries;

        return $this;
    }

    /**
     * Adds as listGDPR.
     *
     * @return self
     */
    public function addToListGDPR(\Pohoda\List\ListGDPR $listGDPR)
    {
        $this->listGDPR[] = $listGDPR;

        return $this;
    }

    /**
     * isset listGDPR.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListGDPR($index)
    {
        return isset($this->listGDPR[$index]);
    }

    /**
     * unset listGDPR.
     *
     * @param int|string $index
     */
    public function unsetListGDPR($index): void
    {
        unset($this->listGDPR[$index]);
    }

    /**
     * Gets as listGDPR.
     *
     * @return \Pohoda\List\ListGDPR[]
     */
    public function getListGDPR()
    {
        return $this->listGDPR;
    }

    /**
     * Sets a new listGDPR.
     *
     * @param \Pohoda\List\ListGDPR[] $listGDPR
     *
     * @return self
     */
    public function setListGDPR(?array $listGDPR = null)
    {
        $this->listGDPR = $listGDPR;

        return $this;
    }

    /**
     * Adds as listEstablishment.
     *
     * @return self
     */
    public function addToListEstablishment(\Pohoda\List\ListEstablishment $listEstablishment)
    {
        $this->listEstablishment[] = $listEstablishment;

        return $this;
    }

    /**
     * isset listEstablishment.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListEstablishment($index)
    {
        return isset($this->listEstablishment[$index]);
    }

    /**
     * unset listEstablishment.
     *
     * @param int|string $index
     */
    public function unsetListEstablishment($index): void
    {
        unset($this->listEstablishment[$index]);
    }

    /**
     * Gets as listEstablishment.
     *
     * @return \Pohoda\List\ListEstablishment[]
     */
    public function getListEstablishment()
    {
        return $this->listEstablishment;
    }

    /**
     * Sets a new listEstablishment.
     *
     * @param \Pohoda\List\ListEstablishment[] $listEstablishment
     *
     * @return self
     */
    public function setListEstablishment(?array $listEstablishment = null)
    {
        $this->listEstablishment = $listEstablishment;

        return $this;
    }

    /**
     * Adds as listAccountingFormOfPayment.
     *
     * @return self
     */
    public function addToListAccountingFormOfPayment(\Pohoda\List\ListAccountingFormOfPayment $listAccountingFormOfPayment)
    {
        $this->listAccountingFormOfPayment[] = $listAccountingFormOfPayment;

        return $this;
    }

    /**
     * isset listAccountingFormOfPayment.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListAccountingFormOfPayment($index)
    {
        return isset($this->listAccountingFormOfPayment[$index]);
    }

    /**
     * unset listAccountingFormOfPayment.
     *
     * @param int|string $index
     */
    public function unsetListAccountingFormOfPayment($index): void
    {
        unset($this->listAccountingFormOfPayment[$index]);
    }

    /**
     * Gets as listAccountingFormOfPayment.
     *
     * @return \Pohoda\List\ListAccountingFormOfPayment[]
     */
    public function getListAccountingFormOfPayment()
    {
        return $this->listAccountingFormOfPayment;
    }

    /**
     * Sets a new listAccountingFormOfPayment.
     *
     * @param \Pohoda\List\ListAccountingFormOfPayment[] $listAccountingFormOfPayment
     *
     * @return self
     */
    public function setListAccountingFormOfPayment(?array $listAccountingFormOfPayment = null)
    {
        $this->listAccountingFormOfPayment = $listAccountingFormOfPayment;

        return $this;
    }

    /**
     * Adds as listClassificationVAT.
     *
     * @return self
     */
    public function addToListClassificationVAT(\Pohoda\List\ListClassificationVAT $listClassificationVAT)
    {
        $this->listClassificationVAT[] = $listClassificationVAT;

        return $this;
    }

    /**
     * isset listClassificationVAT.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListClassificationVAT($index)
    {
        return isset($this->listClassificationVAT[$index]);
    }

    /**
     * unset listClassificationVAT.
     *
     * @param int|string $index
     */
    public function unsetListClassificationVAT($index): void
    {
        unset($this->listClassificationVAT[$index]);
    }

    /**
     * Gets as listClassificationVAT.
     *
     * @return \Pohoda\List\ListClassificationVAT[]
     */
    public function getListClassificationVAT()
    {
        return $this->listClassificationVAT;
    }

    /**
     * Sets a new listClassificationVAT.
     *
     * @param \Pohoda\List\ListClassificationVAT[] $listClassificationVAT
     *
     * @return self
     */
    public function setListClassificationVAT(?array $listClassificationVAT = null)
    {
        $this->listClassificationVAT = $listClassificationVAT;

        return $this;
    }

    /**
     * Adds as listGlobalSettings.
     *
     * @return self
     */
    public function addToListGlobalSettings(\Pohoda\List\ListGlobalSettings $listGlobalSettings)
    {
        $this->listGlobalSettings[] = $listGlobalSettings;

        return $this;
    }

    /**
     * isset listGlobalSettings.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListGlobalSettings($index)
    {
        return isset($this->listGlobalSettings[$index]);
    }

    /**
     * unset listGlobalSettings.
     *
     * @param int|string $index
     */
    public function unsetListGlobalSettings($index): void
    {
        unset($this->listGlobalSettings[$index]);
    }

    /**
     * Gets as listGlobalSettings.
     *
     * @return \Pohoda\List\ListGlobalSettings[]
     */
    public function getListGlobalSettings()
    {
        return $this->listGlobalSettings;
    }

    /**
     * Sets a new listGlobalSettings.
     *
     * @param \Pohoda\List\ListGlobalSettings[] $listGlobalSettings
     *
     * @return self
     */
    public function setListGlobalSettings(?array $listGlobalSettings = null)
    {
        $this->listGlobalSettings = $listGlobalSettings;

        return $this;
    }

    /**
     * Adds as listRegistrationNumber.
     *
     * @return self
     */
    public function addToListRegistrationNumber(\Pohoda\List\ListRegistrationNumber $listRegistrationNumber)
    {
        $this->listRegistrationNumber[] = $listRegistrationNumber;

        return $this;
    }

    /**
     * isset listRegistrationNumber.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListRegistrationNumber($index)
    {
        return isset($this->listRegistrationNumber[$index]);
    }

    /**
     * unset listRegistrationNumber.
     *
     * @param int|string $index
     */
    public function unsetListRegistrationNumber($index): void
    {
        unset($this->listRegistrationNumber[$index]);
    }

    /**
     * Gets as listRegistrationNumber.
     *
     * @return \Pohoda\List\ListRegistrationNumber[]
     */
    public function getListRegistrationNumber()
    {
        return $this->listRegistrationNumber;
    }

    /**
     * Sets a new listRegistrationNumber.
     *
     * @param \Pohoda\List\ListRegistrationNumber[] $listRegistrationNumber
     *
     * @return self
     */
    public function setListRegistrationNumber(?array $listRegistrationNumber = null)
    {
        $this->listRegistrationNumber = $listRegistrationNumber;

        return $this;
    }

    /**
     * Adds as listProductRequirement.
     *
     * @return self
     */
    public function addToListProductRequirement(\Pohoda\List\ListProductRequirement $listProductRequirement)
    {
        $this->listProductRequirement[] = $listProductRequirement;

        return $this;
    }

    /**
     * isset listProductRequirement.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListProductRequirement($index)
    {
        return isset($this->listProductRequirement[$index]);
    }

    /**
     * unset listProductRequirement.
     *
     * @param int|string $index
     */
    public function unsetListProductRequirement($index): void
    {
        unset($this->listProductRequirement[$index]);
    }

    /**
     * Gets as listProductRequirement.
     *
     * @return \Pohoda\List\ListProductRequirement[]
     */
    public function getListProductRequirement()
    {
        return $this->listProductRequirement;
    }

    /**
     * Sets a new listProductRequirement.
     *
     * @param \Pohoda\List\ListProductRequirement[] $listProductRequirement
     *
     * @return self
     */
    public function setListProductRequirement(?array $listProductRequirement = null)
    {
        $this->listProductRequirement = $listProductRequirement;

        return $this;
    }

    /**
     * Adds as listMovement.
     *
     * @return self
     */
    public function addToListMovement(\Pohoda\List\ListMovement $listMovement)
    {
        $this->listMovement[] = $listMovement;

        return $this;
    }

    /**
     * isset listMovement.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListMovement($index)
    {
        return isset($this->listMovement[$index]);
    }

    /**
     * unset listMovement.
     *
     * @param int|string $index
     */
    public function unsetListMovement($index): void
    {
        unset($this->listMovement[$index]);
    }

    /**
     * Gets as listMovement.
     *
     * @return \Pohoda\List\ListMovement[]
     */
    public function getListMovement()
    {
        return $this->listMovement;
    }

    /**
     * Sets a new listMovement.
     *
     * @param \Pohoda\List\ListMovement[] $listMovement
     *
     * @return self
     */
    public function setListMovement(?array $listMovement = null)
    {
        $this->listMovement = $listMovement;

        return $this;
    }

    /**
     * Adds as listRecyclingContrib.
     *
     * @return self
     */
    public function addToListRecyclingContrib(\Pohoda\List\ListRecyclingContrib $listRecyclingContrib)
    {
        $this->listRecyclingContrib[] = $listRecyclingContrib;

        return $this;
    }

    /**
     * isset listRecyclingContrib.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListRecyclingContrib($index)
    {
        return isset($this->listRecyclingContrib[$index]);
    }

    /**
     * unset listRecyclingContrib.
     *
     * @param int|string $index
     */
    public function unsetListRecyclingContrib($index): void
    {
        unset($this->listRecyclingContrib[$index]);
    }

    /**
     * Gets as listRecyclingContrib.
     *
     * @return \Pohoda\List\ListRecyclingContrib[]
     */
    public function getListRecyclingContrib()
    {
        return $this->listRecyclingContrib;
    }

    /**
     * Sets a new listRecyclingContrib.
     *
     * @param \Pohoda\List\ListRecyclingContrib[] $listRecyclingContrib
     *
     * @return self
     */
    public function setListRecyclingContrib(?array $listRecyclingContrib = null)
    {
        $this->listRecyclingContrib = $listRecyclingContrib;

        return $this;
    }

    /**
     * Adds as listService.
     *
     * @return self
     */
    public function addToListService(\Pohoda\List\ListService $listService)
    {
        $this->listService[] = $listService;

        return $this;
    }

    /**
     * isset listService.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListService($index)
    {
        return isset($this->listService[$index]);
    }

    /**
     * unset listService.
     *
     * @param int|string $index
     */
    public function unsetListService($index): void
    {
        unset($this->listService[$index]);
    }

    /**
     * Gets as listService.
     *
     * @return \Pohoda\List\ListService[]
     */
    public function getListService()
    {
        return $this->listService;
    }

    /**
     * Sets a new listService.
     *
     * @param \Pohoda\List\ListService[] $listService
     *
     * @return self
     */
    public function setListService(?array $listService = null)
    {
        $this->listService = $listService;

        return $this;
    }

    /**
     * Adds as listRulesPairing.
     *
     * @return self
     */
    public function addToListRulesPairing(\Pohoda\List\ListRulesPairing $listRulesPairing)
    {
        $this->listRulesPairing[] = $listRulesPairing;

        return $this;
    }

    /**
     * isset listRulesPairing.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListRulesPairing($index)
    {
        return isset($this->listRulesPairing[$index]);
    }

    /**
     * unset listRulesPairing.
     *
     * @param int|string $index
     */
    public function unsetListRulesPairing($index): void
    {
        unset($this->listRulesPairing[$index]);
    }

    /**
     * Gets as listRulesPairing.
     *
     * @return \Pohoda\List\ListRulesPairing[]
     */
    public function getListRulesPairing()
    {
        return $this->listRulesPairing;
    }

    /**
     * Sets a new listRulesPairing.
     *
     * @param \Pohoda\List\ListRulesPairing[] $listRulesPairing
     *
     * @return self
     */
    public function setListRulesPairing(?array $listRulesPairing = null)
    {
        $this->listRulesPairing = $listRulesPairing;

        return $this;
    }

    /**
     * Adds as listUserAgenda.
     *
     * @return self
     */
    public function addToListUserAgenda(\Pohoda\List\ListUserAgenda $listUserAgenda)
    {
        $this->listUserAgenda[] = $listUserAgenda;

        return $this;
    }

    /**
     * isset listUserAgenda.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetListUserAgenda($index)
    {
        return isset($this->listUserAgenda[$index]);
    }

    /**
     * unset listUserAgenda.
     *
     * @param int|string $index
     */
    public function unsetListUserAgenda($index): void
    {
        unset($this->listUserAgenda[$index]);
    }

    /**
     * Gets as listUserAgenda.
     *
     * @return \Pohoda\List\ListUserAgenda[]
     */
    public function getListUserAgenda()
    {
        return $this->listUserAgenda;
    }

    /**
     * Sets a new listUserAgenda.
     *
     * @param \Pohoda\List\ListUserAgenda[] $listUserAgenda
     *
     * @return self
     */
    public function setListUserAgenda(?array $listUserAgenda = null)
    {
        $this->listUserAgenda = $listUserAgenda;

        return $this;
    }

    /**
     * Adds as recordDuplicity.
     *
     * Zobrazení podrobností o chybě.
     *
     * @return self
     */
    public function addToErrorDetail(\Pohoda\Response\RecordDuplicityType $recordDuplicity)
    {
        $this->errorDetail[] = $recordDuplicity;

        return $this;
    }

    /**
     * isset errorDetail.
     *
     * Zobrazení podrobností o chybě.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetErrorDetail($index)
    {
        return isset($this->errorDetail[$index]);
    }

    /**
     * unset errorDetail.
     *
     * Zobrazení podrobností o chybě.
     *
     * @param int|string $index
     */
    public function unsetErrorDetail($index): void
    {
        unset($this->errorDetail[$index]);
    }

    /**
     * Gets as errorDetail.
     *
     * Zobrazení podrobností o chybě.
     *
     * @return \Pohoda\Response\RecordDuplicityType[]
     */
    public function getErrorDetail()
    {
        return $this->errorDetail;
    }

    /**
     * Sets a new errorDetail.
     *
     * Zobrazení podrobností o chybě.
     *
     * @param \Pohoda\Response\RecordDuplicityType[] $errorDetail
     *
     * @return self
     */
    public function setErrorDetail(?array $errorDetail = null)
    {
        $this->errorDetail = $errorDetail;

        return $this;
    }
}
