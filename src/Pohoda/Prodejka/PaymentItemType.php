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

namespace Pohoda\Prodejka;

/**
 * Class representing PaymentItemType.
 *
 * XSD Type: paymentItemType
 */
class PaymentItemType
{
    /**
     * Forma úhrady.
     */
    private ?\Pohoda\Type\PaymentType $paymentType = null;

    /**
     * Text (pouze pro export).
     */
    private ?string $text = null;

    /**
     * Přijato.
     */
    private ?float $received = null;

    /**
     * Přijato (pouze pro export).
     */
    private ?float $receivedHomeCurrency = null;

    /**
     * Typ platby.
     */
    private ?\Pohoda\Prodejka\PaymentAdvancedType $paymentAdvanced = null;

    /**
     * Vráceno (pouze pro export).
     */
    private ?float $returned = null;

    /**
     * Poznámka.
     */
    private ?string $note = null;

    /**
     * Gets as paymentType.
     *
     * Forma úhrady
     *
     * @return \Pohoda\Type\PaymentType
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Sets a new paymentType.
     *
     * Forma úhrady
     *
     * @return self
     */
    public function setPaymentType(\Pohoda\Type\PaymentType $paymentType)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Gets as text.
     *
     * Text (pouze pro export).
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text.
     *
     * Text (pouze pro export).
     *
     * @param string $text
     *
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Gets as received.
     *
     * Přijato.
     *
     * @return float
     */
    public function getReceived()
    {
        return $this->received;
    }

    /**
     * Sets a new received.
     *
     * Přijato.
     *
     * @param float $received
     *
     * @return self
     */
    public function setReceived($received)
    {
        $this->received = $received;

        return $this;
    }

    /**
     * Gets as receivedHomeCurrency.
     *
     * Přijato (pouze pro export).
     *
     * @return float
     */
    public function getReceivedHomeCurrency()
    {
        return $this->receivedHomeCurrency;
    }

    /**
     * Sets a new receivedHomeCurrency.
     *
     * Přijato (pouze pro export).
     *
     * @param float $receivedHomeCurrency
     *
     * @return self
     */
    public function setReceivedHomeCurrency($receivedHomeCurrency)
    {
        $this->receivedHomeCurrency = $receivedHomeCurrency;

        return $this;
    }

    /**
     * Gets as paymentAdvanced.
     *
     * Typ platby.
     *
     * @return \Pohoda\Prodejka\PaymentAdvancedType
     */
    public function getPaymentAdvanced()
    {
        return $this->paymentAdvanced;
    }

    /**
     * Sets a new paymentAdvanced.
     *
     * Typ platby.
     *
     * @return self
     */
    public function setPaymentAdvanced(?\Pohoda\Prodejka\PaymentAdvancedType $paymentAdvanced = null)
    {
        $this->paymentAdvanced = $paymentAdvanced;

        return $this;
    }

    /**
     * Gets as returned.
     *
     * Vráceno (pouze pro export).
     *
     * @return float
     */
    public function getReturned()
    {
        return $this->returned;
    }

    /**
     * Sets a new returned.
     *
     * Vráceno (pouze pro export).
     *
     * @param float $returned
     *
     * @return self
     */
    public function setReturned($returned)
    {
        $this->returned = $returned;

        return $this;
    }

    /**
     * Gets as note.
     *
     * Poznámka.
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
     * Poznámka.
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
}
