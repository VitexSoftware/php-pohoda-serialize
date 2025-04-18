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
 * Class representing ListAccountancyRequestType.
 *
 * XSD Type: listAccountancyRequestType
 */
class ListAccountancyRequestType
{
    private ?string $version = null;

    /**
     * Požadovaná verze výdejky.
     */
    private ?string $accountancyVersion = null;

    /**
     * Omezení počtu exportovaných záznamů.
     */
    private ?\Pohoda\Filter\LimitType $limit = null;

    private ?\Pohoda\Filter\RequestAccountancyType $requestAccountancy = null;

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
     * Gets as accountancyVersion.
     *
     * Požadovaná verze výdejky.
     *
     * @return string
     */
    public function getAccountancyVersion()
    {
        return $this->accountancyVersion;
    }

    /**
     * Sets a new accountancyVersion.
     *
     * Požadovaná verze výdejky.
     *
     * @param string $accountancyVersion
     *
     * @return self
     */
    public function setAccountancyVersion($accountancyVersion)
    {
        $this->accountancyVersion = $accountancyVersion;

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
     * Gets as requestAccountancy.
     *
     * @return \Pohoda\Filter\RequestAccountancyType
     */
    public function getRequestAccountancy()
    {
        return $this->requestAccountancy;
    }

    /**
     * Sets a new requestAccountancy.
     *
     * @return self
     */
    public function setRequestAccountancy(?\Pohoda\Filter\RequestAccountancyType $requestAccountancy = null)
    {
        $this->requestAccountancy = $requestAccountancy;

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
