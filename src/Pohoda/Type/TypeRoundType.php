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

namespace Pohoda\Type;

/**
 * Class representing TypeRoundType.
 *
 * XSD Type: typeRound
 */
class TypeRoundType
{
    /**
     * Celková suma zaokrouhlení.
     *
     * @var float[]
     */
    private array $priceRound = [
    ];

    private ?float $rateVATround = null;

    private ?float $priceRoundSum = null;

    private ?float $priceRoundSumVAT = null;

    /**
     * Adds as priceRound.
     *
     * Celková suma zaokrouhlení.
     *
     * @param float $priceRound
     *
     * @return self
     */
    public function addToPriceRound($priceRound)
    {
        $this->priceRound[] = $priceRound;

        return $this;
    }

    /**
     * isset priceRound.
     *
     * Celková suma zaokrouhlení.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPriceRound($index)
    {
        return isset($this->priceRound[$index]);
    }

    /**
     * unset priceRound.
     *
     * Celková suma zaokrouhlení.
     *
     * @param int|string $index
     */
    public function unsetPriceRound($index): void
    {
        unset($this->priceRound[$index]);
    }

    /**
     * Gets as priceRound.
     *
     * Celková suma zaokrouhlení.
     *
     * @return float[]
     */
    public function getPriceRound()
    {
        return $this->priceRound;
    }

    /**
     * Sets a new priceRound.
     *
     * Celková suma zaokrouhlení.
     *
     * @param float $priceRound
     *
     * @return self
     */
    public function setPriceRound(array $priceRound)
    {
        $this->priceRound = $priceRound;

        return $this;
    }

    /**
     * Gets as rateVATround.
     *
     * @return float
     */
    public function getRateVATround()
    {
        return $this->rateVATround;
    }

    /**
     * Sets a new rateVATround.
     *
     * @param float $rateVATround
     *
     * @return self
     */
    public function setRateVATround($rateVATround)
    {
        $this->rateVATround = $rateVATround;

        return $this;
    }

    /**
     * Gets as priceRoundSum.
     *
     * @return float
     */
    public function getPriceRoundSum()
    {
        return $this->priceRoundSum;
    }

    /**
     * Sets a new priceRoundSum.
     *
     * @param float $priceRoundSum
     *
     * @return self
     */
    public function setPriceRoundSum($priceRoundSum)
    {
        $this->priceRoundSum = $priceRoundSum;

        return $this;
    }

    /**
     * Gets as priceRoundSumVAT.
     *
     * @return float
     */
    public function getPriceRoundSumVAT()
    {
        return $this->priceRoundSumVAT;
    }

    /**
     * Sets a new priceRoundSumVAT.
     *
     * @param float $priceRoundSumVAT
     *
     * @return self
     */
    public function setPriceRoundSumVAT($priceRoundSumVAT)
    {
        $this->priceRoundSumVAT = $priceRoundSumVAT;

        return $this;
    }
}
