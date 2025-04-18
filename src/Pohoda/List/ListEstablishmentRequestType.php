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
 * Class representing ListEstablishmentRequestType.
 *
 * XSD Type: listEstablishmentRequestType
 */
class ListEstablishmentRequestType
{
    private ?string $version = null;

    /**
     * Požadovaná verze.
     */
    private ?string $establishmentVersion = null;

    /**
     * Omezení počtu exportovaných záznamů.
     *
     * @var \Pohoda\Filter\LimitType[]
     */
    private array $limit = [
    ];

    /**
     * @var \Pohoda\List\RequestEstablishmentType[]
     */
    private array $requestEstablishment = [
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
     * Gets as establishmentVersion.
     *
     * Požadovaná verze.
     *
     * @return string
     */
    public function getEstablishmentVersion()
    {
        return $this->establishmentVersion;
    }

    /**
     * Sets a new establishmentVersion.
     *
     * Požadovaná verze.
     *
     * @param string $establishmentVersion
     *
     * @return self
     */
    public function setEstablishmentVersion($establishmentVersion)
    {
        $this->establishmentVersion = $establishmentVersion;

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
     * Adds as requestEstablishment.
     *
     * @return self
     */
    public function addToRequestEstablishment(\Pohoda\List\RequestEstablishmentType $requestEstablishment)
    {
        $this->requestEstablishment[] = $requestEstablishment;

        return $this;
    }

    /**
     * isset requestEstablishment.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestEstablishment($index)
    {
        return isset($this->requestEstablishment[$index]);
    }

    /**
     * unset requestEstablishment.
     *
     * @param int|string $index
     */
    public function unsetRequestEstablishment($index): void
    {
        unset($this->requestEstablishment[$index]);
    }

    /**
     * Gets as requestEstablishment.
     *
     * @return \Pohoda\List\RequestEstablishmentType[]
     */
    public function getRequestEstablishment()
    {
        return $this->requestEstablishment;
    }

    /**
     * Sets a new requestEstablishment.
     *
     * @param \Pohoda\List\RequestEstablishmentType[] $requestEstablishment
     *
     * @return self
     */
    public function setRequestEstablishment(array $requestEstablishment)
    {
        $this->requestEstablishment = $requestEstablishment;

        return $this;
    }
}
