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

namespace Pohoda\ListCentre;

/**
 * Class representing ListRequestCentreType.
 *
 * XSD Type: listRequestCentreType
 */
class ListRequestCentreType
{
    private ?string $version = null;

    /**
     * Požadovaná verze centre dokumentu.
     */
    private ?string $centreVersion = null;

    /**
     * Omezení počtu exportovaných záznamů.
     *
     * @var \Pohoda\Filter\LimitType[]
     */
    private array $limit = [
    ];

    /**
     * @var \Pohoda\Filter\RequestCentreType[]
     */
    private array $requestCentre = [
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
     * Gets as centreVersion.
     *
     * Požadovaná verze centre dokumentu.
     *
     * @return string
     */
    public function getCentreVersion()
    {
        return $this->centreVersion;
    }

    /**
     * Sets a new centreVersion.
     *
     * Požadovaná verze centre dokumentu.
     *
     * @param string $centreVersion
     *
     * @return self
     */
    public function setCentreVersion($centreVersion)
    {
        $this->centreVersion = $centreVersion;

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
     * Adds as requestCentre.
     *
     * @return self
     */
    public function addToRequestCentre(\Pohoda\Filter\RequestCentreType $requestCentre)
    {
        $this->requestCentre[] = $requestCentre;

        return $this;
    }

    /**
     * isset requestCentre.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestCentre($index)
    {
        return isset($this->requestCentre[$index]);
    }

    /**
     * unset requestCentre.
     *
     * @param int|string $index
     */
    public function unsetRequestCentre($index): void
    {
        unset($this->requestCentre[$index]);
    }

    /**
     * Gets as requestCentre.
     *
     * @return \Pohoda\Filter\RequestCentreType[]
     */
    public function getRequestCentre()
    {
        return $this->requestCentre;
    }

    /**
     * Sets a new requestCentre.
     *
     * @param \Pohoda\Filter\RequestCentreType[] $requestCentre
     *
     * @return self
     */
    public function setRequestCentre(array $requestCentre)
    {
        $this->requestCentre = $requestCentre;

        return $this;
    }
}
