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
 * Class representing ListUserAgendaRequestType.
 *
 * XSD Type: listUserAgendaRequestType
 */
class ListUserAgendaRequestType
{
    private ?int $userAgendaId = null;

    private ?string $userAgendaIds = null;

    private ?string $version = null;

    /**
     * Požadovaná verze.
     */
    private ?string $userAgendaVersion = null;

    /**
     * Omezení počtu exportovaných záznamů.
     *
     * @var \Pohoda\Filter\LimitType[]
     */
    private array $limit = [
    ];

    /**
     * @var \Pohoda\Filter\RequestUserAgendaType[]
     */
    private array $requestUserAgenda = [
    ];

    /**
     * Omezení exportu dat dokladů.
     *
     * @var \Pohoda\List\RestrictionDocParamType[]
     */
    private array $restrictionData = [
    ];

    /**
     * Gets as userAgendaId.
     *
     * @return int
     */
    public function getUserAgendaId()
    {
        return $this->userAgendaId;
    }

    /**
     * Sets a new userAgendaId.
     *
     * @param int $userAgendaId
     *
     * @return self
     */
    public function setUserAgendaId($userAgendaId)
    {
        $this->userAgendaId = $userAgendaId;

        return $this;
    }

    /**
     * Gets as userAgendaIds.
     *
     * @return string
     */
    public function getUserAgendaIds()
    {
        return $this->userAgendaIds;
    }

    /**
     * Sets a new userAgendaIds.
     *
     * @param string $userAgendaIds
     *
     * @return self
     */
    public function setUserAgendaIds($userAgendaIds)
    {
        $this->userAgendaIds = $userAgendaIds;

        return $this;
    }

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
     * Gets as userAgendaVersion.
     *
     * Požadovaná verze.
     *
     * @return string
     */
    public function getUserAgendaVersion()
    {
        return $this->userAgendaVersion;
    }

    /**
     * Sets a new userAgendaVersion.
     *
     * Požadovaná verze.
     *
     * @param string $userAgendaVersion
     *
     * @return self
     */
    public function setUserAgendaVersion($userAgendaVersion)
    {
        $this->userAgendaVersion = $userAgendaVersion;

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
     * Adds as requestUserAgenda.
     *
     * @return self
     */
    public function addToRequestUserAgenda(\Pohoda\Filter\RequestUserAgendaType $requestUserAgenda)
    {
        $this->requestUserAgenda[] = $requestUserAgenda;

        return $this;
    }

    /**
     * isset requestUserAgenda.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestUserAgenda($index)
    {
        return isset($this->requestUserAgenda[$index]);
    }

    /**
     * unset requestUserAgenda.
     *
     * @param int|string $index
     */
    public function unsetRequestUserAgenda($index): void
    {
        unset($this->requestUserAgenda[$index]);
    }

    /**
     * Gets as requestUserAgenda.
     *
     * @return \Pohoda\Filter\RequestUserAgendaType[]
     */
    public function getRequestUserAgenda()
    {
        return $this->requestUserAgenda;
    }

    /**
     * Sets a new requestUserAgenda.
     *
     * @param \Pohoda\Filter\RequestUserAgendaType[] $requestUserAgenda
     *
     * @return self
     */
    public function setRequestUserAgenda(array $requestUserAgenda)
    {
        $this->requestUserAgenda = $requestUserAgenda;

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
