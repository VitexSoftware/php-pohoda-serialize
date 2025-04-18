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
 * Class representing ListPrevodkaRequestType.
 *
 * XSD Type: listPrevodkaRequestType
 */
class ListPrevodkaRequestType
{
    private ?string $version = null;

    /**
     * Požadovaná verze dokladu.
     */
    private ?string $prevodkaVersion = null;

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
     * @var \Pohoda\Filter\RequestPrevodkaType[]
     */
    private array $requestPrevodka = [
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
     * Gets as prevodkaVersion.
     *
     * Požadovaná verze dokladu.
     *
     * @return string
     */
    public function getPrevodkaVersion()
    {
        return $this->prevodkaVersion;
    }

    /**
     * Sets a new prevodkaVersion.
     *
     * Požadovaná verze dokladu.
     *
     * @param string $prevodkaVersion
     *
     * @return self
     */
    public function setPrevodkaVersion($prevodkaVersion)
    {
        $this->prevodkaVersion = $prevodkaVersion;

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
     * Adds as requestPrevodka.
     *
     * @return self
     */
    public function addToRequestPrevodka(\Pohoda\Filter\RequestPrevodkaType $requestPrevodka)
    {
        $this->requestPrevodka[] = $requestPrevodka;

        return $this;
    }

    /**
     * isset requestPrevodka.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestPrevodka($index)
    {
        return isset($this->requestPrevodka[$index]);
    }

    /**
     * unset requestPrevodka.
     *
     * @param int|string $index
     */
    public function unsetRequestPrevodka($index): void
    {
        unset($this->requestPrevodka[$index]);
    }

    /**
     * Gets as requestPrevodka.
     *
     * @return \Pohoda\Filter\RequestPrevodkaType[]
     */
    public function getRequestPrevodka()
    {
        return $this->requestPrevodka;
    }

    /**
     * Sets a new requestPrevodka.
     *
     * @param \Pohoda\Filter\RequestPrevodkaType[] $requestPrevodka
     *
     * @return self
     */
    public function setRequestPrevodka(array $requestPrevodka)
    {
        $this->requestPrevodka = $requestPrevodka;

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
