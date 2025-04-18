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
 * Class representing ListEnquiryRequestType.
 *
 * XSD Type: listEnquiryRequestType
 */
class ListEnquiryRequestType
{
    private ?string $version = null;

    private ?string $enquiryType = null;

    /**
     * Požadovaná verze dokladu.
     */
    private ?string $enquiryVersion = null;

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
     * @var \Pohoda\Filter\RequestEnquiryType[]
     */
    private array $requestEnquiry = [
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
     * Gets as enquiryType.
     *
     * @return string
     */
    public function getEnquiryType()
    {
        return $this->enquiryType;
    }

    /**
     * Sets a new enquiryType.
     *
     * @param string $enquiryType
     *
     * @return self
     */
    public function setEnquiryType($enquiryType)
    {
        $this->enquiryType = $enquiryType;

        return $this;
    }

    /**
     * Gets as enquiryVersion.
     *
     * Požadovaná verze dokladu.
     *
     * @return string
     */
    public function getEnquiryVersion()
    {
        return $this->enquiryVersion;
    }

    /**
     * Sets a new enquiryVersion.
     *
     * Požadovaná verze dokladu.
     *
     * @param string $enquiryVersion
     *
     * @return self
     */
    public function setEnquiryVersion($enquiryVersion)
    {
        $this->enquiryVersion = $enquiryVersion;

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
     * Adds as requestEnquiry.
     *
     * @return self
     */
    public function addToRequestEnquiry(\Pohoda\Filter\RequestEnquiryType $requestEnquiry)
    {
        $this->requestEnquiry[] = $requestEnquiry;

        return $this;
    }

    /**
     * isset requestEnquiry.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestEnquiry($index)
    {
        return isset($this->requestEnquiry[$index]);
    }

    /**
     * unset requestEnquiry.
     *
     * @param int|string $index
     */
    public function unsetRequestEnquiry($index): void
    {
        unset($this->requestEnquiry[$index]);
    }

    /**
     * Gets as requestEnquiry.
     *
     * @return \Pohoda\Filter\RequestEnquiryType[]
     */
    public function getRequestEnquiry()
    {
        return $this->requestEnquiry;
    }

    /**
     * Sets a new requestEnquiry.
     *
     * @param \Pohoda\Filter\RequestEnquiryType[] $requestEnquiry
     *
     * @return self
     */
    public function setRequestEnquiry(array $requestEnquiry)
    {
        $this->requestEnquiry = $requestEnquiry;

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
