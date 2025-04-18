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

namespace Pohoda\AccountingFormOfPayment;

/**
 * Class representing AccountingFormOfPaymentTypeRootType.
 *
 * XSD Type: accountingFormOfPaymentTypeRoot
 */
class AccountingFormOfPaymentTypeRootType
{
    private ?string $version = null;

    /**
     * @var \Pohoda\AccountingFormOfPayment\AccountingFormOfPaymentHeaderType[]
     */
    private array $accountingFormOfPaymentHeader = [
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
     * Adds as accountingFormOfPaymentHeader.
     *
     * @return self
     */
    public function addToAccountingFormOfPaymentHeader(\Pohoda\AccountingFormOfPayment\AccountingFormOfPaymentHeaderType $accountingFormOfPaymentHeader)
    {
        $this->accountingFormOfPaymentHeader[] = $accountingFormOfPaymentHeader;

        return $this;
    }

    /**
     * isset accountingFormOfPaymentHeader.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetAccountingFormOfPaymentHeader($index)
    {
        return isset($this->accountingFormOfPaymentHeader[$index]);
    }

    /**
     * unset accountingFormOfPaymentHeader.
     *
     * @param int|string $index
     */
    public function unsetAccountingFormOfPaymentHeader($index): void
    {
        unset($this->accountingFormOfPaymentHeader[$index]);
    }

    /**
     * Gets as accountingFormOfPaymentHeader.
     *
     * @return \Pohoda\AccountingFormOfPayment\AccountingFormOfPaymentHeaderType[]
     */
    public function getAccountingFormOfPaymentHeader()
    {
        return $this->accountingFormOfPaymentHeader;
    }

    /**
     * Sets a new accountingFormOfPaymentHeader.
     *
     * @param \Pohoda\AccountingFormOfPayment\AccountingFormOfPaymentHeaderType[] $accountingFormOfPaymentHeader
     *
     * @return self
     */
    public function setAccountingFormOfPaymentHeader(array $accountingFormOfPaymentHeader)
    {
        $this->accountingFormOfPaymentHeader = $accountingFormOfPaymentHeader;

        return $this;
    }
}
