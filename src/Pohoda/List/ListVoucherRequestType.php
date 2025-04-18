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
 * Class representing ListVoucherRequestType.
 *
 * XSD Type: listVoucherRequestType
 */
class ListVoucherRequestType
{
    private ?string $version = null;

    /**
     * Požadovaná verze dokladu.
     */
    private ?string $voucherVersion = null;

    /**
     * Označení externího systému, pro který se vyexportují identifikátory.
     */
    private ?string $extSystem = null;

    /**
     * Omezení počtu exportovaných záznamů.
     *
     * @var \Pohoda\Filter\LimitType[]
     */
    private array $limit = [
    ];

    /**
     * @var \Pohoda\Filter\RequestVoucherType[]
     */
    private array $requestVoucher = [
    ];

    /**
     * Omezení exportu dat dokladů.
     *
     * @var \Pohoda\List\RestrictionDocParamType[]
     */
    private array $restrictionData = [
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
     * Gets as voucherVersion.
     *
     * Požadovaná verze dokladu.
     *
     * @return string
     */
    public function getVoucherVersion()
    {
        return $this->voucherVersion;
    }

    /**
     * Sets a new voucherVersion.
     *
     * Požadovaná verze dokladu.
     *
     * @param string $voucherVersion
     *
     * @return self
     */
    public function setVoucherVersion($voucherVersion)
    {
        $this->voucherVersion = $voucherVersion;

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
     * Adds as requestVoucher.
     *
     * @return self
     */
    public function addToRequestVoucher(\Pohoda\Filter\RequestVoucherType $requestVoucher)
    {
        $this->requestVoucher[] = $requestVoucher;

        return $this;
    }

    /**
     * isset requestVoucher.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestVoucher($index)
    {
        return isset($this->requestVoucher[$index]);
    }

    /**
     * unset requestVoucher.
     *
     * @param int|string $index
     */
    public function unsetRequestVoucher($index): void
    {
        unset($this->requestVoucher[$index]);
    }

    /**
     * Gets as requestVoucher.
     *
     * @return \Pohoda\Filter\RequestVoucherType[]
     */
    public function getRequestVoucher()
    {
        return $this->requestVoucher;
    }

    /**
     * Sets a new requestVoucher.
     *
     * @param \Pohoda\Filter\RequestVoucherType[] $requestVoucher
     *
     * @return self
     */
    public function setRequestVoucher(array $requestVoucher)
    {
        $this->requestVoucher = $requestVoucher;

        return $this;
    }

    /**
     * Adds as restrictionData.
     *
     * Omezení exportu dat dokladů.
     *
     * @return self
     */
    public function addToRestrictionData(\Pohoda\List\RestrictionDocParamType $restrictionData)
    {
        $this->restrictionData[] = $restrictionData;

        return $this;
    }

    /**
     * isset restrictionData.
     *
     * Omezení exportu dat dokladů.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRestrictionData($index)
    {
        return isset($this->restrictionData[$index]);
    }

    /**
     * unset restrictionData.
     *
     * Omezení exportu dat dokladů.
     *
     * @param int|string $index
     */
    public function unsetRestrictionData($index): void
    {
        unset($this->restrictionData[$index]);
    }

    /**
     * Gets as restrictionData.
     *
     * Omezení exportu dat dokladů.
     *
     * @return \Pohoda\List\RestrictionDocParamType[]
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
     * @param \Pohoda\List\RestrictionDocParamType[] $restrictionData
     *
     * @return self
     */
    public function setRestrictionData(array $restrictionData)
    {
        $this->restrictionData = $restrictionData;

        return $this;
    }
}
