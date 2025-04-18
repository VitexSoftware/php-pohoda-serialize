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
 * Class representing ListBankRequestType.
 *
 * XSD Type: listBankRequestType
 */
class ListBankRequestType
{
    private ?string $version = null;

    /**
     * Požadovaná verze banky.
     */
    private ?string $bankVersion = null;

    /**
     * Omezení počtu exportovaných záznamů.
     */
    private ?\Pohoda\Filter\LimitType $limit = null;

    private ?\Pohoda\Filter\RequestBankType $requestBank = null;

    /**
     * Omezení exportu dat dokladů.
     */
    private ?\Pohoda\List\RestrictionDocParamType $restrictionData = null;

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
     * Gets as bankVersion.
     *
     * Požadovaná verze banky.
     *
     * @return string
     */
    public function getBankVersion()
    {
        return $this->bankVersion;
    }

    /**
     * Sets a new bankVersion.
     *
     * Požadovaná verze banky.
     *
     * @param string $bankVersion
     *
     * @return self
     */
    public function setBankVersion($bankVersion)
    {
        $this->bankVersion = $bankVersion;

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
     * Gets as requestBank.
     *
     * @return \Pohoda\Filter\RequestBankType
     */
    public function getRequestBank()
    {
        return $this->requestBank;
    }

    /**
     * Sets a new requestBank.
     *
     * @return self
     */
    public function setRequestBank(?\Pohoda\Filter\RequestBankType $requestBank = null)
    {
        $this->requestBank = $requestBank;

        return $this;
    }

    /**
     * Gets as restrictionData.
     *
     * Omezení exportu dat dokladů.
     *
     * @return \Pohoda\List\RestrictionDocParamType
     */
    public function getRestrictionData()
    {
        return $this->restrictionData;
    }

    /**
     * Sets a new restrictionData.
     *
     * Omezení exportu dat dokladů.
     *
     * @return self
     */
    public function setRestrictionData(?\Pohoda\List\RestrictionDocParamType $restrictionData = null)
    {
        $this->restrictionData = $restrictionData;

        return $this;
    }
}
