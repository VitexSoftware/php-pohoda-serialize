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

namespace Pohoda\Bank;

/**
 * Class representing BankDetailType.
 *
 * XSD Type: bankDetailType
 */
class BankDetailType
{
    /**
     * @var \Pohoda\Bank\BankItemType[]
     */
    private array $bankItem = [
    ];

    /**
     * Definice položek pro likvidaci dokladu (Pohledávky/Závazku). Pouze pro import.
     *
     * @var \Pohoda\Bank\BankliquidationItemType[]
     */
    private array $bankLiquidationItem = [
    ];

    /**
     * Adds as bankItem.
     *
     * @return self
     */
    public function addToBankItem(\Pohoda\Bank\BankItemType $bankItem)
    {
        $this->bankItem[] = $bankItem;

        return $this;
    }

    /**
     * isset bankItem.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetBankItem($index)
    {
        return isset($this->bankItem[$index]);
    }

    /**
     * unset bankItem.
     *
     * @param int|string $index
     */
    public function unsetBankItem($index): void
    {
        unset($this->bankItem[$index]);
    }

    /**
     * Gets as bankItem.
     *
     * @return \Pohoda\Bank\BankItemType[]
     */
    public function getBankItem()
    {
        return $this->bankItem;
    }

    /**
     * Sets a new bankItem.
     *
     * @param \Pohoda\Bank\BankItemType[] $bankItem
     *
     * @return self
     */
    public function setBankItem(?array $bankItem = null)
    {
        $this->bankItem = $bankItem;

        return $this;
    }

    /**
     * Adds as bankLiquidationItem.
     *
     * Definice položek pro likvidaci dokladu (Pohledávky/Závazku). Pouze pro import.
     *
     * @return self
     */
    public function addToBankLiquidationItem(\Pohoda\Bank\BankliquidationItemType $bankLiquidationItem)
    {
        $this->bankLiquidationItem[] = $bankLiquidationItem;

        return $this;
    }

    /**
     * isset bankLiquidationItem.
     *
     * Definice položek pro likvidaci dokladu (Pohledávky/Závazku). Pouze pro import.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetBankLiquidationItem($index)
    {
        return isset($this->bankLiquidationItem[$index]);
    }

    /**
     * unset bankLiquidationItem.
     *
     * Definice položek pro likvidaci dokladu (Pohledávky/Závazku). Pouze pro import.
     *
     * @param int|string $index
     */
    public function unsetBankLiquidationItem($index): void
    {
        unset($this->bankLiquidationItem[$index]);
    }

    /**
     * Gets as bankLiquidationItem.
     *
     * Definice položek pro likvidaci dokladu (Pohledávky/Závazku). Pouze pro import.
     *
     * @return \Pohoda\Bank\BankliquidationItemType[]
     */
    public function getBankLiquidationItem()
    {
        return $this->bankLiquidationItem;
    }

    /**
     * Sets a new bankLiquidationItem.
     *
     * Definice položek pro likvidaci dokladu (Pohledávky/Závazku). Pouze pro import.
     *
     * @param \Pohoda\Bank\BankliquidationItemType[] $bankLiquidationItem
     *
     * @return self
     */
    public function setBankLiquidationItem(?array $bankLiquidationItem = null)
    {
        $this->bankLiquidationItem = $bankLiquidationItem;

        return $this;
    }
}
