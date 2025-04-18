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
 * Class representing ListBalanceRequestType.
 *
 * XSD Type: listBalanceRequestType
 */
class ListBalanceRequestType
{
    private ?string $version = null;

    /**
     * Požadovaná verze dokladu.
     */
    private ?string $balanceVersion = null;

    /**
     * Označení externího systému, pro který se vyexportují identifikátory.
     */
    private ?string $extSystem = null;

    /**
     * Omezení počtu exportovaných záznamů.
     */
    private ?\Pohoda\Filter\LimitType $limit = null;

    private ?\Pohoda\List\RequestBalanceType $requestBalance = null;

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
     * Gets as balanceVersion.
     *
     * Požadovaná verze dokladu.
     *
     * @return string
     */
    public function getBalanceVersion()
    {
        return $this->balanceVersion;
    }

    /**
     * Sets a new balanceVersion.
     *
     * Požadovaná verze dokladu.
     *
     * @param string $balanceVersion
     *
     * @return self
     */
    public function setBalanceVersion($balanceVersion)
    {
        $this->balanceVersion = $balanceVersion;

        return $this;
    }

    /**
     * Gets as extSystem.
     *
     * Označení externího systému, pro který se vyexportují identifikátory.
     *
     * @return string
     */
    public function getExtSystem()
    {
        return $this->extSystem;
    }

    /**
     * Sets a new extSystem.
     *
     * Označení externího systému, pro který se vyexportují identifikátory.
     *
     * @param string $extSystem
     *
     * @return self
     */
    public function setExtSystem($extSystem)
    {
        $this->extSystem = $extSystem;

        return $this;
    }

    /**
     * Gets as limit.
     *
     * Omezení počtu exportovaných záznamů.
     *
     * @return \Pohoda\Filter\LimitType
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
     * @return self
     */
    public function setLimit(?\Pohoda\Filter\LimitType $limit = null)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * Gets as requestBalance.
     *
     * @return \Pohoda\List\RequestBalanceType
     */
    public function getRequestBalance()
    {
        return $this->requestBalance;
    }

    /**
     * Sets a new requestBalance.
     *
     * @return self
     */
    public function setRequestBalance(\Pohoda\List\RequestBalanceType $requestBalance)
    {
        $this->requestBalance = $requestBalance;

        return $this;
    }
}
