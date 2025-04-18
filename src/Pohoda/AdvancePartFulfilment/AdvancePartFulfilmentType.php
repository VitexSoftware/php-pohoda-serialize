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

namespace Pohoda\AdvancePartFulfilment;

/**
 * Class representing AdvancePartFulfilmentType.
 *
 * XSD Type: advancePartFulfilmentType
 */
class AdvancePartFulfilmentType
{
    private ?string $version = null;

    /**
     * Výběr záznamu.
     */
    private ?\Pohoda\AdvancePartFulfilment\RecordAdvancePartFulfilmentType $record = null;

    /**
     * Procento, na základě kterého bude vypočtena výše zálohy z celkového plnění včetně DPH.
     */
    private ?float $percentTotalFulfilment = null;

    /**
     * Volba bez DPH.
     */
    private ?bool $netOfVAT = null;

    /**
     * Zaokrouhlení pevné částky.
     */
    private ?bool $roundAmount = null;

    /**
     * Záloha konkrétní částkou.
     */
    private ?float $fixedAmount = null;

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
     * Gets as record.
     *
     * Výběr záznamu.
     *
     * @return \Pohoda\AdvancePartFulfilment\RecordAdvancePartFulfilmentType
     */
    public function getRecord()
    {
        return $this->record;
    }

    /**
     * Sets a new record.
     *
     * Výběr záznamu.
     *
     * @return self
     */
    public function setRecord(\Pohoda\AdvancePartFulfilment\RecordAdvancePartFulfilmentType $record)
    {
        $this->record = $record;

        return $this;
    }

    /**
     * Gets as percentTotalFulfilment.
     *
     * Procento, na základě kterého bude vypočtena výše zálohy z celkového plnění včetně DPH.
     *
     * @return float
     */
    public function getPercentTotalFulfilment()
    {
        return $this->percentTotalFulfilment;
    }

    /**
     * Sets a new percentTotalFulfilment.
     *
     * Procento, na základě kterého bude vypočtena výše zálohy z celkového plnění včetně DPH.
     *
     * @param float $percentTotalFulfilment
     *
     * @return self
     */
    public function setPercentTotalFulfilment($percentTotalFulfilment)
    {
        $this->percentTotalFulfilment = $percentTotalFulfilment;

        return $this;
    }

    /**
     * Gets as netOfVAT.
     *
     * Volba bez DPH.
     *
     * @return bool
     */
    public function getNetOfVAT()
    {
        return $this->netOfVAT;
    }

    /**
     * Sets a new netOfVAT.
     *
     * Volba bez DPH.
     *
     * @param bool $netOfVAT
     *
     * @return self
     */
    public function setNetOfVAT($netOfVAT)
    {
        $this->netOfVAT = $netOfVAT;

        return $this;
    }

    /**
     * Gets as roundAmount.
     *
     * Zaokrouhlení pevné částky.
     *
     * @return bool
     */
    public function getRoundAmount()
    {
        return $this->roundAmount;
    }

    /**
     * Sets a new roundAmount.
     *
     * Zaokrouhlení pevné částky.
     *
     * @param bool $roundAmount
     *
     * @return self
     */
    public function setRoundAmount($roundAmount)
    {
        $this->roundAmount = $roundAmount;

        return $this;
    }

    /**
     * Gets as fixedAmount.
     *
     * Záloha konkrétní částkou.
     *
     * @return float
     */
    public function getFixedAmount()
    {
        return $this->fixedAmount;
    }

    /**
     * Sets a new fixedAmount.
     *
     * Záloha konkrétní částkou.
     *
     * @param float $fixedAmount
     *
     * @return self
     */
    public function setFixedAmount($fixedAmount)
    {
        $this->fixedAmount = $fixedAmount;

        return $this;
    }
}
