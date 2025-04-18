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

namespace Pohoda\Payment;

/**
 * Class representing PaymentTypeRootType.
 *
 * XSD Type: paymentTypeRoot
 */
class PaymentTypeRootType
{
    private ?string $version = null;

    /**
     * @var \Pohoda\Payment\PaymentHeaderType[]
     */
    private array $paymentHeader = [
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
     * Adds as paymentHeader.
     *
     * @return self
     */
    public function addToPaymentHeader(\Pohoda\Payment\PaymentHeaderType $paymentHeader)
    {
        $this->paymentHeader[] = $paymentHeader;

        return $this;
    }

    /**
     * isset paymentHeader.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPaymentHeader($index)
    {
        return isset($this->paymentHeader[$index]);
    }

    /**
     * unset paymentHeader.
     *
     * @param int|string $index
     */
    public function unsetPaymentHeader($index): void
    {
        unset($this->paymentHeader[$index]);
    }

    /**
     * Gets as paymentHeader.
     *
     * @return \Pohoda\Payment\PaymentHeaderType[]
     */
    public function getPaymentHeader()
    {
        return $this->paymentHeader;
    }

    /**
     * Sets a new paymentHeader.
     *
     * @param \Pohoda\Payment\PaymentHeaderType[] $paymentHeader
     *
     * @return self
     */
    public function setPaymentHeader(array $paymentHeader)
    {
        $this->paymentHeader = $paymentHeader;

        return $this;
    }
}
