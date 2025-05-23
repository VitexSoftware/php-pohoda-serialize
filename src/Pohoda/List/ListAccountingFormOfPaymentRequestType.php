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

namespace Pohoda\List;

/**
 * Class representing ListAccountingFormOfPaymentRequestType.
 *
 * XSD Type: listAccountingFormOfPaymentRequestType
 */
class ListAccountingFormOfPaymentRequestType
{
    private ?string $version = null;

    /**
     * Požadovaná verze.
     */
    private ?string $accountingFormOfPaymentVersion = null;

    /**
     * Omezení počtu exportovaných záznamů.
     *
     * @var \Pohoda\Filter\LimitType[]
     */
    private array $limit = [
    ];

    /**
     * @var \Pohoda\List\RequestAccountingFormOfPaymentType[]
     */
    private array $requestAccountingFormOfPayment = [
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
     * Gets as accountingFormOfPaymentVersion.
     *
     * Požadovaná verze.
     *
     * @return string
     */
    public function getAccountingFormOfPaymentVersion()
    {
        return $this->accountingFormOfPaymentVersion;
    }

    /**
     * Sets a new accountingFormOfPaymentVersion.
     *
     * Požadovaná verze.
     *
     * @param string $accountingFormOfPaymentVersion
     *
     * @return self
     */
    public function setAccountingFormOfPaymentVersion($accountingFormOfPaymentVersion)
    {
        $this->accountingFormOfPaymentVersion = $accountingFormOfPaymentVersion;

        return $this;
    }

    /**
     * Adds as limit.
     *
     * Omezení počtu exportovaných záznamů.
     *
     * @return self
     */
    public function addToLimit(\Pohoda\Filter\LimitType $limit)
    {
        $this->limit[] = $limit;

        return $this;
    }

    /**
     * isset limit.
     *
     * Omezení počtu exportovaných záznamů.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetLimit($index)
    {
        return isset($this->limit[$index]);
    }

    /**
     * unset limit.
     *
     * Omezení počtu exportovaných záznamů.
     *
     * @param int|string $index
     */
    public function unsetLimit($index): void
    {
        unset($this->limit[$index]);
    }

    /**
     * Gets as limit.
     *
     * Omezení počtu exportovaných záznamů.
     *
     * @return \Pohoda\Filter\LimitType[]
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Sets a new limit.
     *
     * Omezení počtu exportovaných záznamů.
     *
     * @param \Pohoda\Filter\LimitType[] $limit
     *
     * @return self
     */
    public function setLimit(array $limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * Adds as requestAccountingFormOfPayment.
     *
     * @return self
     */
    public function addToRequestAccountingFormOfPayment(\Pohoda\List\RequestAccountingFormOfPaymentType $requestAccountingFormOfPayment)
    {
        $this->requestAccountingFormOfPayment[] = $requestAccountingFormOfPayment;

        return $this;
    }

    /**
     * isset requestAccountingFormOfPayment.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestAccountingFormOfPayment($index)
    {
        return isset($this->requestAccountingFormOfPayment[$index]);
    }

    /**
     * unset requestAccountingFormOfPayment.
     *
     * @param int|string $index
     */
    public function unsetRequestAccountingFormOfPayment($index): void
    {
        unset($this->requestAccountingFormOfPayment[$index]);
    }

    /**
     * Gets as requestAccountingFormOfPayment.
     *
     * @return \Pohoda\List\RequestAccountingFormOfPaymentType[]
     */
    public function getRequestAccountingFormOfPayment()
    {
        return $this->requestAccountingFormOfPayment;
    }

    /**
     * Sets a new requestAccountingFormOfPayment.
     *
     * @param \Pohoda\List\RequestAccountingFormOfPaymentType[] $requestAccountingFormOfPayment
     *
     * @return self
     */
    public function setRequestAccountingFormOfPayment(array $requestAccountingFormOfPayment)
    {
        $this->requestAccountingFormOfPayment = $requestAccountingFormOfPayment;

        return $this;
    }
}
