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
 * Class representing ListProductRequirementRequestType.
 *
 * XSD Type: listProductRequirementRequestType
 */
class ListProductRequirementRequestType
{
    private ?string $version = null;

    /**
     * Požadovaná verze.
     */
    private ?string $productRequirementVersion = null;

    /**
     * Omezení počtu exportovaných záznamů.
     *
     * @var \Pohoda\Filter\LimitType[]
     */
    private array $limit = [
    ];

    /**
     * @var \Pohoda\Filter\RequestProductRequirementType[]
     */
    private array $requestProductRequirement = [
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
     * Gets as productRequirementVersion.
     *
     * Požadovaná verze.
     *
     * @return string
     */
    public function getProductRequirementVersion()
    {
        return $this->productRequirementVersion;
    }

    /**
     * Sets a new productRequirementVersion.
     *
     * Požadovaná verze.
     *
     * @param string $productRequirementVersion
     *
     * @return self
     */
    public function setProductRequirementVersion($productRequirementVersion)
    {
        $this->productRequirementVersion = $productRequirementVersion;

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
     * Adds as requestProductRequirement.
     *
     * @return self
     */
    public function addToRequestProductRequirement(\Pohoda\Filter\RequestProductRequirementType $requestProductRequirement)
    {
        $this->requestProductRequirement[] = $requestProductRequirement;

        return $this;
    }

    /**
     * isset requestProductRequirement.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestProductRequirement($index)
    {
        return isset($this->requestProductRequirement[$index]);
    }

    /**
     * unset requestProductRequirement.
     *
     * @param int|string $index
     */
    public function unsetRequestProductRequirement($index): void
    {
        unset($this->requestProductRequirement[$index]);
    }

    /**
     * Gets as requestProductRequirement.
     *
     * @return \Pohoda\Filter\RequestProductRequirementType[]
     */
    public function getRequestProductRequirement()
    {
        return $this->requestProductRequirement;
    }

    /**
     * Sets a new requestProductRequirement.
     *
     * @param \Pohoda\Filter\RequestProductRequirementType[] $requestProductRequirement
     *
     * @return self
     */
    public function setRequestProductRequirement(array $requestProductRequirement)
    {
        $this->requestProductRequirement = $requestProductRequirement;

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
